@extends('admin.layouts.app')

@section('content-css')

    <link href="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"><!--end card-header-->
                        <div class="card-body">  
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Mobile Series Version</h4>                                                   
                                        </div><!--end card-header-->
                                        <div class="card-body">                                    
                                            <div class="general-label">
                                                <form class="form-horizontal auth-form" method="POST" action="{{ route('mobile_series_versions.update', $data[0]->id) }}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                     @method('PUT')
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Mobile Series </label>
                                                        <div class="col-sm-10">
                                                            <select class="select2 form-control custom-select" name="mobile_series_id" style="width: 100%; height:36px;" required="">

                                                                {{-- @foreach($mobile_series_versions as $value)
                                                                    <option value="{{$value->id}}" {{ $data[0]->mobile_series_id == $value->id ? 'selected' : '' }}> {{ $value->name }}</option>
                                                                @endforeach --}}

                                                                @foreach($mobile_series as $value)
                                                                    <option value="{{$value->id}}" {{ $data[0]->mobile_series_id == $value->id ? 'selected' : '' }}> {{ $value->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Version Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="name" required="" value="{{ $data[0]->name }}">
                                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                         <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image  (Dimension : 602px * 602px, Size : 50kb)</label>
                                                        <div class="col-sm-10">
                                                            {{-- <input type="file" class="form-control" id="inputName" name="product_image"> --}}
                                                            <img src="{{ asset('/storage/'.$data[0]->img) }}">
                                                            <input type="file" class="form-control" name="img">
                                                            {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div> 
                                                </form>           
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                            </div>                                                                      
                        </div><!--end card-body-->
                    </div><!--end card-->
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