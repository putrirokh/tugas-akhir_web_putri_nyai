@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
@php
$rs1 = App\Jenis::all();
$rs2 = App\Merek::all();
$rs3 = App\Kategori::all();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Input</h3>
                </div>
                <div class="card-body">
                    <form class="user" action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                         <label>Jenis</label>
                         <select name= "jenis" class="form-control @error ('jenis') is-invalid @enderror">
            <option value="">-- Pilih Jenis --</option>
            @foreach($rs1 as $jenis)
            @php $sel = (old ('jenis')== $jenis ['id']) ? 'selected' : ''; @endphp
                <option value="{{ $jenis['id']}}" {{ $sel }}>{{ $jenis['nama']}}</option>
            @endforeach
        </select>  
        @error ('jenis') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
                        <div class="form-group">
                          <label>Merek</label>
                          <select name ="merk" class="form-control @error('merk') is-invalid @enderror">
                          <option value="">-- Pilih Merek --</option>
                            @foreach ( $rs2 as $merk)
                            @php $sel = ( old('merk')== $merk['id']) ? 'selected' : ''; @endphp
                          <option  value="{{ $merk['id'] }}" {{ $sel }}>{{ $merk['nama'] }}</option>
                            @endforeach
                          </select>
                            @error('merk')<div class="invalid feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                          <label>Kategori</label>
                          <select name ="kategori" class="form-control @error('kategori') is-invalid @enderror">
                          <option value="">-- Pilih Kategori --</option>
                            @foreach ( $rs3 as $kat)
                            @php $sel = ( old('kategori')== $kat['id']) ? 'selected' : ''; @endphp
                          <option  value="{{ $kat['id'] }}" {{ $sel }}>{{ $kat['nama'] }}</option>
                            @endforeach
                          </select>
                            @error('kategori')<div class="invalid feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama produk" value="{{ old('nama') }}">
                            @error('nama')<div class="invalid feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control  @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="Masukkan harga produk">
                            @error('harga')<div class="invalid feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stok" class="form-control  @error('stok') is-invalid @enderror" value="{{ old('stok') }}" placeholder="Masukkan stok produk">
                            @error('stok')<div class="invalid feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="text" name="deskripsi" cols="10" rows="10" class="form-control  @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi produk">
                            </textarea>
                            @error('deskripsi')<div class="invalid feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label>Foto Produk</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" />
                            @error('foto')<div class="invalid feedback">{{ $message }}</div> @enderror
                          </div>
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