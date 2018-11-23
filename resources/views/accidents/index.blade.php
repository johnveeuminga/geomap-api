@extends('layouts.app')
@section('title', ' API | Accidents')
@section('content')

<div class="container-fluid">
    @include('partials.breadcrumbs')
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	{{-- <h4 class="card-title">Accident List</h4> --}}
                	<div class="table-responsive">
                		<table class="table color-table info-table">
                		{{-- <table class="table full-color-table full-success-table"> --}}
                			<thead>
                				<tr>
                					<th>ID</th>
                					<th>Name</th>
                					<th>Description</th>
                					<th>Latitude</th>
                					<th>Longtitude</th>
                					<th>Time Reported</th>
                					<th>By</th>
                					{{-- <th></th> --}}
                				</tr>
                			</thead>
                			<tbody>
                				@foreach ($accidents as $accident)
                				<tr>
                					<td>{{ $accident->id }}</td>
                					<td>
                						<a href="{{ route('accident.show', $accident->id) }}">{{ str_limit($accident->name,15) }} </a>
                					</td>
                					<td>
                						<span data-toggle="tooltip" title="{{$accident->description}}">{{ str_limit( $accident->description, 20) }}</span>
                						
                					</td>
                					<td>{{ $accident->lng }}</td>
                					<td>{{ $accident->lat }}</td>
                					<td>{{ date("m/d/Y", strtotime( $accident->created_at)) }}</td>
                					<td>{{ $accident->user->name }}</td>
                					{{-- <td> class="btn btn-secondary btn-sm" title="View accident"><i class="fa fa-eye"></i></a></td> --}}
                				</tr>
                				@endforeach

                			</tbody>

                		</table>
                		{{ $accidents->links() }}
                	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
</div>

@endsection