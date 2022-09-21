@extends('layouts.index')
@section('content')
@foreach ($data as $rs)
@php 
$ar_gender = ['Laki-Laki'=>'L','Perempuan'=>'P'];
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Customer</h3>
                </div>
                <div class="card-body">
                    <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{route('Customer.update',$rs->id)}}"  enctype="multipart/form-data">
    @csrf
    @method('PUT')  
                               @php $val1 = ($errors->isEmpty()) ? $rs->isbn : old('isbn'); @endphp
<div class="form-group">
                            <label for="">Nama</label>
                            @php $val1 = ($errors->isEmpty()) ? $rs->isbn : old('isbn'); @endphp
<input type="text" name="nama" class="form-control" placeholder="Masukkan nama" >
                        </div>
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                            @foreach ($ar_gender as $label => $jk)
        @php 
        $cek = (old ('gender')== $jk ) ? 'checked' : '';
        @endphp
        <div class="form-check form-check-inline">
        @php $
<input name="gender" type="radio" class="form-check-input @error ('jk') is-invalid @enderror" value="{{ $jk }}"> 
          <label class="form-check-label"> {{ $label }} </label>
        </div>
        @endforeach
        @error ('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
                            <label>Alamat</label>
                            @php $val4 = ($errors->isEmpty()) ? $rs->alamat : old('alamat'); @endphp
      <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{$val4}}</textarea>
      @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
                        <div class="form-group">
                        <label for="">E-mail</label>
                        @php $val5 = ($errors->isEmpty()) ? $rs->email : old('email'); @endphp
<input type="text" name="email" class="form-control" placeholder="Masukkan email" >
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukkan password"  >
                        </div>
                                                <div class="form-group">
                        <label for="">No. HP</label>
                        @php $val5 = ($errors->isEmpty()) ? $rs->hp : old('hp'); @endphp
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