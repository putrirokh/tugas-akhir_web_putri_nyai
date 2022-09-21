@extends('layouts.index')
@section('content')
@foreach ( $ar_produk as $produk )
<center>
    <div class="card shadow mb-4">
         <div class="card-body">
         <div class="text-center">
            <td>
                @if(!empty($produk->foto))
                <img src="{{ asset('assets/img/produk') }}/{{ $produk->foto }}" width="20%" />
                @else
                <img src="{{ asset('assets/img/produk') }}/nofoto1.jpg" width="20%" />
                @endif
            </td>
            </div>
            <div class="product-caption">
                <div class="product-ratting">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star low-star"></i>
                    <i class="far fa-star low-star"></i>
                </div>
                  Nama Produk &nbsp; &nbsp; : {{$produk->nama}}<br/>
                  Jenis Produk  &nbsp; &nbsp; : {{$produk->jen}}<br/>
                  Kategori Produk &nbsp; &nbsp; : {{$produk->kat}}<br/>
                  Merek Produk &nbsp; &nbsp; : {{$produk->merk}}<br/>
                  Harga &nbsp; &nbsp; :Rp{{ number_format($produk->harga)}}<br/>
                  Stok &nbsp; &nbsp; : {{$produk->stok}}<br/>
                  Deskripsi &nbsp; &nbsp;: {{$produk->deskripsi}}<br/>
            </td>
            </div>
         <a href="{{ url('produk') }}" class="btn btn-primary "><i class="fas fa-caret-square-left"></i> Kembali</a>
    </div>
</center>
@endforeach
@endsection