@extends('layouts.app')
@section('title', ' API |' . $accident->name)
@section('content')

<div class="col-md-12">
	@include('partials.breadcrumbs')
</div>
<div class="col-md-8">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Accident {{ $accident->name }}</h4>
			<h6 class="card-substitute"></h6>

		</div>		
	</div>
</div>
@endsection