@extends('layouts.app')
@section('title', ' GeomapAPI | Profile ')
@section('content')

<div class="container-fluid">
    {{-- @include('partials.breadcrumbs') --}}

    <!-- Start Page Content -->
    <div class="row mt-4">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{ auth()->user()->avatar }}" class="img-circle" width="150" />
                        <a href="" data-toggle="modal" data-target="#responsive-modal"><span><i class="ti ti-upload" data-toggle="tooltip" title="Upload avatar"></i></span></a>
                        <h4 class="card-title m-t-10">{{ auth()->user()->name }}</h4>
                        <h6 class="card-subtitle"></h6>
                        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body">`
                                        <span class="m-0-auto">
                                            <img src="{{ auth()->user()->avatar }}" class="img-circle" width="150" />
                                        </span>
                                        <br>
                                        <form class="mt-2 form-horizontal form-material" method="post" action="{{ route('upload-avatar') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                           <div class="form-group">
                                               <input type="file" name="upload-avatar" class="form-control form-control-line"></input> <br>    
                                               <button class="btn btn-info" type="submit">Upload</button>
                                           </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                                                       

                    </center>
                </div>
                <div>
                    <hr> </div>
                    <div class="card-body"> 
                        <small class="text-muted">Email address </small>
                        <h6>{{ auth()->user()->email }}</h6> 
                        <small class="text-muted p-t-30 db">Username</small>
                        <h6>{{ auth()->user()->username }}</h6> 
                        <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ auth()->user()->mobile ? auth()->user()->mobile : "N/A" }}</h6> 
                        <small class="text-muted p-t-30 db">Social Profile</small>
                        <br/>
                        <button class="btn btn-circle btn-outline-secondary"><i class="ti ti-facebook"></i></button>
                        <button class="btn btn-circle btn-outline-secondary"><i class="ti ti-twitter"></i></button>
                        <button class="btn btn-circle btn-outline-secondary"><i class="ti ti-youtube"></i></button>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ auth()->user()->avatar }}" alt="user" class="img-circle" /> </div>
                                        <div class="sl-right">
                                            <div><span>{{ auth()->user()->name }}</span> 
                                                <span class="sl-date">{{ Carbon\Carbon::now()->subDays(2)->diffForHumans() }}</span>
                                                <p>Reported an accident <a href="#"> #</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="{{ asset("images/users/8.jpg")}}" class="img-responsive radius" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="{{ asset("images/users/8.jpg")}}" class="img-responsive radius" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="{{ asset("images/users/8.jpg")}}" class="img-responsive radius" /></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="{{ asset("images/users/8.jpg")}}" class="img-responsive radius" /></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-body">
                                    {!! Form::model($me, ['method' => 'PUT', 'route' => ['user-update', $me->id], 'class' => 'form-material form-control-line']) !!}
                                       
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input name="name" type="text" value="{{ $me->name }}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input name="mobile" type="number" value="{{ $me->mobile ? $me->mobile : "" }}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                       
                                      
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            <!-- End Page Content -->
        </div>
        @endsection
