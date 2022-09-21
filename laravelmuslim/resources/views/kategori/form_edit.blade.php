@extends('layouts.index')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
              @foreach ($data as $rs)
<h3 class="card-title">Edit Data Kategori</h3>
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
<form action="{{ route('kategori.update', $rs -> id) }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field ()}}
                  {{ method_field ('PUT')}}
    <div class="form-group">
                        <label for="">Nama Merek</label>
                        @php $val = ($errors->isEmpty()) ? $rs->nama : old('nama'); @endphp
                              <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Kategori" value="{{ $val }}">
                              @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
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