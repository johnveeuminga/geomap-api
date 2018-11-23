@extends('layouts.app')
@section('title', ' API |' . $accident->name)
@section('content')


<div class="container-fluid">
    @include('partials.breadcrumbs')
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
        	<div class="card">
        		<div class="card-body">
        			<h4 class="card-title">{{ $accident->name }} </h4>
        			<p class="card-text"> {{ $accident->description }}</p>
        			<p class="card-text"> <kbd>Lat </kbd>&nbsp;&nbsp;&nbsp;&nbsp;{{ $accident->lat }} <kbd>Long</kbd>&nbsp;&nbsp;&nbsp;&nbsp;{{ $accident->lng }} </p>
        			<small class="text-muted">{{ $accident->user->name }}</small>
        		</div>
        		<div class="card-footer">
        			<h4 class="text-muted">Available map</h4>
	        		<img class="card-img-top" src="/images/background/megamenubg.jpg" alt="Card image cap">
        		</div>
        	</div>
    </div>
    <!-- End Page Content -->
</div>



@endsection
