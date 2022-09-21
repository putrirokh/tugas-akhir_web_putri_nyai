@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
@php
 $ar_role=['admin','staff','anggota'];
 $ar_isactive =['yes','no','banned'];
 @endphp
@php
//panggil master data
@endphp
@foreach ( $data as $rs )
<h3>Form Edit User</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('member.update',$rs->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="form-group">
        <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Nama User" value="{{ $rs->name }}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Email" value="{{ $rs->email }}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
     <div class="form-group row">
        <select name="isactive" class="form-control @error('isactive') is-invalid @enderror">
           <option value="">-- Pilih Isactive --</option>
           @foreach($ar_isactive as $isactive)
           @php  $sel = ( $isactive == $rs->$isactive) ? 'selected' : ''; @endphp
             <option value="{{ $isactive }}" {{ $sel }} >{{ $isactive }}</option>  
           @endforeach
       </select>
       @error('isactive')<div class="invalid-feedback">{{ $message }}</div>@enderror 
   </div>
   <div class="form-group row">
    <select name="role" class="form-control @error('role') is-invalid @enderror">
       <option value="">-- Pilih Role--</option>
       @foreach($ar_role as $role)
       @php  $sel = ( $role == $rs->$role) ? 'selected' : ''; @endphp
         <option value="{{ $role }}" {{ $sel }} >{{ $role }}</option>  
       @endforeach
   </select>
   @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror 
     </div>
     <div class="form-group">
        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ $rs->foto }}">
        @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
     <button type="submit" name="proses" value="update" href="login.html" class="btn btn-primary">
         Simpan
    </button>
 </form>
@endforeach
@else 
  @include('auth.terlarang')
@endif
@endsection