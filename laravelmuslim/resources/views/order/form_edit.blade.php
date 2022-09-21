@extends('layouts.index')
@section('content')
@php
$rs1 = App\Customer::all();//memanggil master data
$rs2 = App\Produk::all();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Pemesanan Produk</h3>
                </div>
                <div class="card-body">
                    @foreach ($data as $rs)
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{route('order.update',$rs->id)}}"  enctype="multipart/form-data">
    @csrf
    @method('PUT')  
    <div class="form-group">
    <label>Nama Customer</label>
<select name="customer" class="form-control @error('customer') is-invalid @enderror">
            <option value="">-- Pilih Nama Customer --</option>
            @foreach($rs1 as $cus)
            @php  $sel = ( $cus['id'] == $rs->idcustomer) ? 'selected' : ''; @endphp
            @if($errors->isEmpty())
              <!-- tampilin data lama-->
              <option value="{{ $cus['id'] }}" {{ $sel }}>{{ $cus['nama'] }}</option>
            @else
              <option value="{{ $cus['id'] }}">{{ $cus['nama'] }}</option>
            @endif  
            @endforeach
        </select>
        @error('customer')<div class="invalid feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <select name="produk" class="form-control @error('produk') is-invalid @enderror">
            <option value="">-- Pilih Nama Produk --</option>
            @foreach($rs1 as $pro)
            @php  $sel = ( $pro['id'] == $rs->idproduk) ? 'selected' : ''; @endphp
            @if($errors->isEmpty())
              <!-- tampilin data lama-->
              <option value="{{ $pro['id'] }}" {{ $sel }}>{{ $pro['nama'] }}</option>
            @else
              <option value="{{ $pro['id'] }}">{{ $pro['nama'] }}</option>
            @endif  
            @endforeach
        </select>
        @error('produk')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                            <label for="">Tanggal pemesanan</label>
                            @php $val1 = ($errors->isEmpty()) ? $rs->tgl : old('tgl'); @endphp
       <input type="date" name="tgl" class="form-control @error('tgl') is-invalid @enderror" placeholder="Masukkan tanggal pemesanan"  value="{{ $val1 }}">
                            @error('tanggal')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            @php $val2 = ($errors->isEmpty()) ? $rs->jumlah : old('jumlah'); @endphp
       <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah pemesanan"  value="{{ $val2 }}">
                            @error('jumlah')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                        @php $val6 = ($errors->isEmpty()) ? $rs->keterangan : old('keterangan'); @endphp
      <label for="">Keterangan</label>
                            <textarea name="keterangan" cols="10" rows="10" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukkan keterangan" >{{ $val6 }}</textarea>
                            @error('alamat')<div class="invalid feedback">{{ $message }}</div>@enderror
                            </div>
                        <div class="form-group">
                            <button  type="submit" name="proses" value="simpan" class="btn btn-danger btn-sm">Simpan</button>
                        </div>
                    </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection