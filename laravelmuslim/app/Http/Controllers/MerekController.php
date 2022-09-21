<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Merek;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan daftar merek
        $ar_merek = DB:: table ('merek')-> get ();
        return view ('merek.index', compact ('ar_merek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya untuk tampilkan form insert data
        return view('merek.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('merek')->insert(
            [ 
                'nama'=>$request->nama,
            ]);
            //landing page
            return redirect('/merek');
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
        $ar_merek = DB:: table ('merek')
        ->where ('merek.id', '=', $id)
        -> get ();
        return view ('merek.show', compact ('ar_merek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Merek :: where ('id', $id)->get();
        return view('merek.form_edit', compact('data'));
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
        DB::table('merek')->where ('id', $id) -> update(
            [ 
                'nama'=>$request->nama,
            ]);
            //landing page
            return redirect('/merek'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('merek')->where ('id', $id) ->delete();
        //landing page
        return redirect('/merek');
 
    }
}
