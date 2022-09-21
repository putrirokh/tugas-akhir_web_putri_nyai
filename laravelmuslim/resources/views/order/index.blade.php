@extends('layouts.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Daftar Pemesanan Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('order.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Customer</th>
                                <th>Nama Produk</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ar_order as $order)
                            <tr>
                                <td>{{ $order->cus }}</td>
                                <td>{{ $order->pro }}</td>
                                <td>{{ $order->tgl }}</td>
                                <td>{{ $order->jumlah }}</td>
                                <td>{{ $order->keterangan }}</td>
                                <td>
                                <a href="{{ route('order.show', $order -> id) }}" ><i class="fas fa-eye"></i>Detail</a>&nbsp;
                                    <form action="{{ url('/order/' . $order->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ route('order.edit',$order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="9">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection