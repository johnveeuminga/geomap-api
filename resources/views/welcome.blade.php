@extends('layouts.app')
@section('title', ' Welcome to Geomap API')

@section('content')
	
	@guest
		<h4>Not logged in</h4>
	@else
		<h5>Logged in</h5>

	@endguest


@endsection