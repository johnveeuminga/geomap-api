{{-- <div class="page-titles">  --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor">{{ ucfirst(Request::segment(1))}}</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">{{ ucfirst(Request::segment(1))}}</li>
                </ol>
            </div>
        </div>
    </div>
{{-- </div> --}}