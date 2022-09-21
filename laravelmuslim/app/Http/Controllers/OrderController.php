<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use Vallidator, File, Redirect, Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_order = DB::table('order')
        ->join('produk','produk.id','=','order.produk_id')
        ->join('customer','customer.id','=','order.customer_id')
        ->select('order.*','produk.nama AS pro','produk.harga','customer.nama AS cus')
        ->get();
        return view('order.index',compact('ar_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('order')->insert(
            [
                'produk_id'=>$request->produk,
                'customer_id'=>$request->customer,
                'tgl'=>$request->tanggal,
                'jumlah'=>$request->jumlah,
                'keterangan'=>$request->keterangan,
                ]);
            //landing page
            return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_order = DB::table('order')
        ->join('produk','produk.id','=','order.produk_id')
        ->join('customer','customer.id','=','order.customer_id')
        ->select('order.*','produk.nama AS pro', 'produk.harga', 'customer.nama AS cus')
        ->where ('order.id', '=', $id)
        ->get();
        return view('order.show', compact('ar_order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Order :: where ('id', $id)->get();
        return view('order.form_edit', compact('data'));
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
        DB::table('order')->where('id',$id)->update(
            [
                'produk_id'=>$request->produk,
                'customer_id'=>$request->customer,
                'tgl'=>$request->tgl,
                'jumlah'=>$request->jumlah,
                'keterangan'=>$request->keterangan,   
            ]);
            //landing page
            return redirect('/order'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('order')->where('id',$id)->delete();
        return redirect('/order');
    }
}

