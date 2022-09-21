@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Tambah Data Jenis</h3>
              </div>
              <div class="card-body">
                  <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                  @if (session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif
                  <form action="{{ route('jenis.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">Nama Jenis</label>
                        <input name="nama" type="text" name="title" class="form-control" placeholder="Masukkan nama jenis">
                    </div>
                    <div class="form-group">
                      <button  type="submit" name="proses" value="simpan" class="btn btn-danger btn-sm">Simpan</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
@else 
@include('auth.terlarang')
@endif
@endsection