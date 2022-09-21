<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produk;
use Validator,File,Redirect,Response;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->get();
        return view('produk.index', compact('ar_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->foto)){//proses upload file
            $fileName = $request->nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('assets/img/produk'), $fileName);
        }
        else{ //tidak ada upload file
            $fileName = '';
        }

        DB::table('produk')->insert(
            [
                'jenis_id'=>$request->jenis,
                'merek_id'=>$request->merk,
                'kategori_id'=>$request->kategori,
                'nama'=>$request->nama,
                'harga'=>$request->harga,
                'stok'=>$request->stok,
                'deskripsi'=>$request->deskripsi,
                'foto'=>$fileName,
            ]);
            //landing page
            return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->where('produk.id','=', $id)
        ->get();
        return view('produk.show', compact('ar_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::where('id',$id)->get();
        return view('produk.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foto = DB::table('produk')->select('foto')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        if(!empty($request->foto)){
            //hapus fisik file foto lama di folder img/pengarang
            File::delete(public_path('assets/img/produk/'.$namaFile));
            //proses upload file foto baru
            $request->validate([
                'file' => 'image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $fileName = $request->nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('assets/img/produk'), $fileName);
        }
        else{ //tidak ganti foto, nama file tetap foto yg lama
            $fileName = $namaFile;
        }

        DB::table('produk')->insert(
            [
                'jenis_id'=>$request->jenis,
                'merek_id'=>$request->merk,
                'kategori_id'=>$request->kategori,
                'nama'=>$request->nama,
                'harga'=>$request->harga,
                'stok'=>$request->stok,
                'deskripsi'=>$request->deskripsi,
                'foto'=>$fileName,
            ]);
            //landing page
            return redirect('/produk'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = DB::table('produk')->select('foto')
        ->where('id',$id)->get();
        foreach($foto as $f){
        $namaFile = $f->foto;
        }
        //hapus fisik file di folder img/pengarang
        File::delete(public_path('assets/img/produk/'.$namaFile));
        DB::table('produk')->where('id',$id)->delete();
        //landing page
        return redirect('/produk');
        }

        public function filterJenis($id1)
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->where ('produk.jenis_id', '=', $id1)
        ->get();
        return view('produk.show', compact('ar_produk'));
    
    }

    public function filterPria($id2)
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->where ('produk.jenis_id', '=', $id2)
        ->get();
        return view('produk.show', compact('ar_produk'));
    
    }

    public function filterMerek($id3)
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->where ('produk.merek_id', '=', $id3)
        ->get();
        return view('produk.show', compact('ar_produk'));
    
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->select('produk.*', 'jenis.nama AS jen','kategori.nama AS kat','merek.nama AS merk')
        ->where('produk.nama', 'like', '%' .$search. '%')->paginate(5);
        return view('produk.index', ['ar_produk'=>$ar_produk]);
    }

    public function koleksiproduk()
    {
        $ar_produk = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->join('merek', 'merek.id', '=', 'produk.merek_id')
        ->join('kategori', 'kategori.id', '=', 'produk.kategori_id')
        ->select('produk.*', 'jenis.nama AS jen','merek.nama AS mer','kategori.nama AS kat')
        ->get();
        return view('produk.koleksi', compact('ar_produk'));
    
    }

}