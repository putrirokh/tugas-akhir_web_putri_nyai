@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
@php
 $ar_role=['admin','staff','anggota'];
 $ar_isactive =['yes','no','banned'];
 @endphp
<h3>Form Input User</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('member.store') }}" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Nama User" value="{{ old('name') }}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
     <div class="form-group row">
        <select name="isactive" class="form-control @error('isactive') is-invalid @enderror">
           <option value="">-- Pilih Isactive --</option>
           @foreach($ar_isactive as $isactive)
             <option value="{{ $isactive }}">{{ $isactive }}</option>  
           @endforeach
       </select>
       @error('isactive')<div class="invalid-feedback">{{ $message }}</div>@enderror 
   </div>
   <div class="form-group row">
    <select name="role" class="form-control @error('role') is-invalid @enderror">
       <option value="">-- Pilih Role--</option>
       @foreach($ar_role as $role)
         <option value="{{ $role }}" >{{ $role }}</option>  
       @endforeach
   </select>
   @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror 
     </div>
     <div class="form-group">
        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}">
        @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
     </div>
     <button type="submit" name="proses" value="update" href="login.html" class="btn btn-primary">
         Simpan
    </button>
 </form>
 @else 
  @include('auth.terlarang')
@endif
@endsection