@extends('layouts.index')
@section('content')
<div class="jumbotron">
	<h2>
		Access Denied !!!
	</h2>
	<p>
		Maaf anda terlarang access halaman ini
	</p>
	<p>
		<a class="btn btn-primary btn-large" href="{{ url('/home') }} ">Home</a>
	</p>
</div>
@endsection
