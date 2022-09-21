@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Manajemen Jenis Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('jenis.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Jenis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ar_jenis as $jenis)
                            <tr>
                                <td>{{ $jenis->nama }}</td>
                                <td>
                                    <form action="{{ url('/jenis/' . $jenis->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ route('jenis.edit',$jenis->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="2">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@else 
@include('auth.terlarang')
@endif
@endsection





