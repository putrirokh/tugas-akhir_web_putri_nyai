@extends('layouts.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                           <h3 class="card-title">Manajemen Merek Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('merek.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Merek</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ar_merek as $merek)
                            <tr>
                                <td>{{ $merek->nama }}</td>
                                <td>
                                    <form action="{{ url('/merek/' . $merek->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ route('merek.edit',$merek->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Hapus</button>
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
@endsection





