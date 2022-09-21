@extends('layouts.index')
@section('content')
@php 
$ar_gender = ['Laki-Laki'=>'L','Perempuan'=>'P'];
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah  Customer</h3>
                </div>
                <div class="card-body">
                    <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" >
                        </div>
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                            @foreach ($ar_gender as $label => $jk)
        @php 
        $cek = (old ('gender')== $jk ) ? 'checked' : '';
        @endphp
        <div class="form-check form-check-inline">
          <input name="gender" type="radio" class="form-check-input @error ('jk') is-invalid @enderror" value="{{ $jk }}"> 
          <label class="form-check-label"> {{ $label }} </label>
        </div>
        @endforeach
        @error ('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" cols="10" rows="10" class="form-control" placeholder="Masukkan alamat" ></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan email" >
                        </div>
                                                <div class="form-group">
                        <label for="">No. HP</label>
                            <input type="text" name="hp" class="form-control" placeholder="Masukkan No. HP" >
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control form-control-user @error('foto') is-invalid @enderror" / placeholder="Masukkan foto" >
                            @error('foto')<div class="invalid feedback">{{ $message }}</div> @enderror
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
@endsection