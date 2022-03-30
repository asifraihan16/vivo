@extends('admin.layouts.app')

@section('content-css')

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ URL::asset('public/admin/assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin/assets/plugins/lightpick/lightpick.css') }}" rel="stylesheet" />

@endsection

@section('content')

<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-12">
                <div class="card">                               
                    <div class="card-body">
                        <div class="dastone-profile">
                            <div class="row">
                                <div class="col-lg-8 align-self-center mb-3 mb-lg-0">
                                    <div class="dastone-profile-main">
                                        <div class="">
                                            <center>
                                            @if(Session()->get('img') != null)
                                                <img src="{{ Session()->get('img') ? Storage::url(Session()->get('img')) : '' }}" alt="" class="rounded-square">
                                            @else
                                                <img src="{{asset('public/admin/assets/images/users/dummy_user.png')}}" alt="" class="rounded-square">
                                                
                                            @endif
                                            </center>
                                            <br/>
                                            
                                            <form class="form-horizontal auth-form" method="POST" action="{{url('admin/profile_info')}}" enctype="multipart/form-data">

                                            {{ csrf_field() }}

                                                
                                                <input type="hidden" class="form-control" id="horizontalInput1" name="name" required="" value="{{ Session()->get('name') }}">

                                                
                                                <input type="file" id="input-file-now" class="form-control" name="img" />
                                                {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                                                
                                                <br/>
                                                <center><button type="submit" class="btn btn-primary">Update</button></center>
                                            </form>
                                        </div>
                                        <div class="dastone-profile_user-detail">
                                            <h5 class="dastone-user-name">{{ Session()->get('name') }}</h5>
                                            <ul class="list-unstyled personal-detail mb-0">
                                                <!-- <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> phone </b> : +91 23456 78910</li> -->
                                                <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : {{ Session()->get('email') }}</li>
                                                <!-- <li class="mt-2"><i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> Website </b> : 
                                                    <a href="https://mannatthemes.com" class="font-14 text-primary">https://mannatthemes.com</a> 
                                                </li> -->                                                   
                                            </ul>
                                        </div>
                                    </div>                                                
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end f_profile-->                                                                                
                    </div><!--end card-body-->          
                </div> <!--end card-->    
            </div><!--end col-->
        </div>
    </div><!-- container -->
</div>
<!-- end page content -->       

@endsection

@section('content-js')

    <script src="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.forms-advanced.js') }}"></script>
@endsection