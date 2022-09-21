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
                    <h3 class="card-title">Form Pemesanan Produk</h3>
                </div>
                <div class="card-body">
                    <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                    
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                              <label>Nama Customer</label>
                              <select name ="customer" class="form-control @error('customer') is-invalid @enderror">
                                  <option value="">-- Pilih Nama Customer --</option>
                                  @foreach ( $rs1 as $customer)
                                  @php $sel = ( old('customer')== $customer['id']) ? 'selected' : ''; @endphp
                                  <option  value="{{ $customer['id'] }}" {{ $sel }}>{{ $customer['nama'] }}</option>
                                  @endforeach
                              </select>
                              @error('customer')<div class="invalid feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <select name ="produk" class="form-control @error('produk') is-invalid @enderror">
                                    <option value="">-- Pilih Produk --</option>
                                    @foreach ( $rs2 as $produk)
                                    @php $sel = ( old('produk')== $produk['id']) ? 'selected' : ''; @endphp
                                    <option  value="{{ $produk['id'] }}" {{ $sel }}>{{ $produk['nama'] }}</option>
                                    @endforeach
                                </select>
                                @error('produk')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                            <label for="">Tanggal Order</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Masukkan tanggal pemesanan" >
                            @error('tanggal')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="Masukkan jumlah pemesanan" >
                            @error('jumlah')<div class="invalid feedback">{{ $message }}</div>@enderror
                              </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" cols="10" rows="10" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukkan keterangan" ></textarea>
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