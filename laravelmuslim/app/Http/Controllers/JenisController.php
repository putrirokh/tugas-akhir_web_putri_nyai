<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan daftar jenis
        $ar_jenis = DB:: table ('jenis')-> get ();
        return view ('jenis.index', compact ('ar_jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya untuk tampilkan form insert data
        return view('jenis.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert(
            [ 
                'nama'=>$request->nama,
            ]);
            //landing page
            return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // untuk menampilkan detail
        $ar_jenis = DB:: table ('jenis')
        ->where ('jenis.id', '=', $id)
        -> get ();
        return view ('jenis.show', compact ('ar_jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Jenis :: where ('id', $id)->get();
        return view('jenis.form_edit', compact('data'));

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
        $validasi = $request->validate(
            //mendefinisikan rule validasi data
            [
            'nama' => 'required',
        ],
       
        //menampilkan pesan error jika salah input
            [
            'nama.required' => 'Nama wajib di isi !!!',
            ]
            );
        $validasi = $request->validate(
            //mendefinisikan rule validasi data
            [
            'nama' => 'required',
        ],
       
        //menampilkan pesan error jika salah input
            [
            'nama.required' => 'Nama wajib di isi !!!',
            ]
            );
        DB::table('jenis')->where ('id', $id) -> update(
            [ 
                'nama'=>$request->nama,
            ]);
            //landing page
            return redirect('/jenis'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jenis')->where ('id', $id) ->delete();
        //landing page
        return redirect('/jenis');
 
    }
}
