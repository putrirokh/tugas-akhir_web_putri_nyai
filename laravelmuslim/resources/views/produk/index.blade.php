@extends('layouts.index')
@section('content')
@php
$no = 1;
$ar_judul =['No','Nama Produk','Jenis','Kategori','Merek','Harga','Stok','Deskripsi','Foto','Action'];
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Manajemen Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                @foreach ($ar_judul as $jdl)
                                <th>{{ $jdl }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ar_produk as $produk)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->jen }}</td>
                                <td>{{ $produk->kat }}</td>
                                <td>{{ $produk->merk }}</td>
                                <td>Rp{{number_format($produk->harga) }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>{{ $produk->deskripsi}}</td>
                                <td>
                                    @if(!empty($produk->foto))
                                    <img src="{{ asset('assets/img/produk') }}/{{ $produk->foto }}" width="20%" />
                                    @else
                                    <img src="{{ asset('assets/img/produk') }}/nofoto1.jpg" width="20%" />
                                    @endif
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('produk.destroy',$produk->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ route('produk.show',$produk->id) }}" class="btn btn-danger"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('produk.edit',$produk->id) }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
                                        <button type="submit" onclick="return confirm ('yakin ingin di hapus?')" class="btn btn-danger "><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection