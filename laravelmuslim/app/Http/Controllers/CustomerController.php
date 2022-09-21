<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use Vallidator, File, Redirect, Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan daftar customer
        $ar_customer = DB:: table ('customer')-> get ();
        return view ('customer.index', compact ('ar_customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya untuk tampilkan form insert data
        return view('customer.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses upload file
        if (!empty ($request -> foto)){
            $request->validate([
                'file' => 'image|mimes:jpg, jpeg, png|max:2048',
            ]);
            $fileName = $request -> nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('img/customer'), $fileName);
        }
        else { // tidak ada upload file
            $fileName = '';
        }

        DB::table('customer')->insert(
            [ 
                'nama'=>$request->nama,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
                'hp'=>$request->hp,
                ]);
            //landing page
            return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_customer = DB:: table ('customer')
        ->where ('customer.id', '=', $id)
        -> get ();
        return view ('customer.show', compact ('ar_customer'));
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Customer :: where ('id', $id)->get();
        return view('customer.form_edit', compact('data'));
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
        // ambil isi kolom foto untuk hapus fisik file atau sekedar ambil nama filenya
        $foto = DB::table('customer')->select('foto')
                ->where('id',$id)->get();
        foreach($foto as $f){
        $namaFile = $f->foto;
        }

        if (!empty ($request -> foto)){
            //hapus fisik file foto lama
            File::delete(public_path('img/customer/'.$namaFile));

            // proses upload file foto baru
            $request->validate([
                'file' => 'image|mimes:jpg, jpeg, png|max:2048',]);
            $fileName = $request -> nama.'.'.$request->foto->extension();  
            $request->foto->move(public_path('img/customer'), $fileName);
        }
        else { // tidak ada upload file
            $fileName = '';
        }

        DB::table('customer')->where ('id', $id) -> update(
            [ 
                'nama'=>$request->nama,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
                'hp'=>$request->hp,
            ]);            
            //landing page
            return redirect('/customer'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ambil isi kolom foto lalu hapus file fotonya 
        $foto = DB::table('customer')->select('foto')
                ->where('id',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        //hapus fisik file di folder img/customer
        File::delete(public_path('img/customer/'.$namaFile));
        //hapus data customer
        DB::table('customer')->where('id',$id)->delete();
        //landing page
        return redirect('/customer');
    }
}
