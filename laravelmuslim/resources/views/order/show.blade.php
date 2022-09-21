@extends('layouts.index')
@section('content')
@foreach ( $ar_order as $order )
@php 
$hartot = $order -> harga * $order -> jumlah;
@endphp
<center>
    <div class="card shadow mb-4">
         <div class="card-body">
         <div class="text-center">
            </div>
            <td align="justify"> 
                  Nama Customer       : {{$order->cus}}<br/>
                  Nama Produk         : {{$order->pro}}<br/>
                  Tanggal Pemesanan      : {{$order->tgl}}<br/>
                  Jumlah   : {{$order->jumlah}}<br/>
                  Harga             :Rp{{ number_format($order->harga)}}<br/>
                  Harga Total             :Rp{{ number_format($hartot)}}<br/>
                              </td>
         <a href="{{ url('produk') }}" class="btn btn-primary "><i class="fas fa-caret-square-left"></i> Kembali</a>
    </div>
</center>
@endforeach
@endsection