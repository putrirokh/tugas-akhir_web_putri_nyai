@extends('layouts.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Daftar Customer</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>E-mail</th>
                                <th>No. HP</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ar_customer as $cus)
                            <tr>
                                <td>{{ $cus->nama }}</td>
                                <td>{{ $cus->gender }}</td>
                                <td>{{ $cus->alamat }}</td>
                                <td>{{ $cus->email }}</td>
                                <td>{{ $cus->hp }}</td>
                                @if(!empty($cus->foto))
              <td><img src="assets ('img/customer')/{{ $cus->foto }}" width="18%" /></td>
              @else
              <td><img src="assets('img')/nophoto.png" width="18%" /></td>
              @endif
            <td>
                                    <form action="{{ url('/customer/' . $cus->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ route('customer.edit',$cus->id) }}" class="btn btn-warning btn-sm">Edit</a>
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