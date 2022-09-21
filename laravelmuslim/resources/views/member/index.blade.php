@extends('layouts.index')
@section('content')
@if( Auth::user()->role == 'admin')
@php
$no = 1;
    $ar_judul = ['No', 'Nama', 'Email', 'Isactive','Role','foto','Action'];
@endphp
<a href="{{ route('member.create') }}" class="btn btn-info btn-user">
  Tambah Data
</a>
<br/><br/>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Nama User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                @foreach ($ar_judul as $judul)
                <th>{{ $judul }}</th>                    
                @endforeach
            </tr>
          </thead>
          <tfoot>
            <tr>
                @foreach ($ar_judul as $judul)
                <th>{{ $judul }}</th>                    
                @endforeach
            </tr>
          </tfoot>
          <tbody>
            @foreach ($ar_member as $member)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->isactive }}</td>
                <td>{{ $member->role }}</td>
                @if(!empty($member->foto))                      
                      <td><img src="{{asset ('img/member')}}/{{ $member->foto }}" width="30" /></td>
                      @else
                      <td><img src="{{asset ('img')}}/nobook.png" width="30" /></td>
                @endif
                <td>
                  <form method="POST" action="{{ route('member.destroy',$member->id) }}">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('member.show',$member->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                    <a href="{{ route('member.edit',$member->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                    <button type="submit" class="btn" onclick="return confirm('Are you sure?')" >
                    <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>          
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @else 
  @include('auth.terlarang')
@endif    
@endsection