@extends('layouts.index')
@section('content')
@foreach ( $ar_member as $member )
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
    <div class="text-center">
           @if(!empty($member->foto))                      
           <td><img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:25rem;" src="{{asset ('img/member')}}/{{ $buku->foto }}" width="30" /></td>
           @else
           <td><img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:25rem;" src="{{asset ('img')}}/nobook.png" /></td>
           @endif
       </div> 
             Nama : {{$member->name}}<br/>
             Email : {{$member->email}}<br/>
             Isactive : {{$member->isactive}}<br/>
             role : {{$member->role}}<br/>
    <a href="{{ url('member') }}" class="btn btn-primary "><i class="fas fa-caret-square-left"></i> Kembali</a>
   </div>
   @endforeach
@endsection