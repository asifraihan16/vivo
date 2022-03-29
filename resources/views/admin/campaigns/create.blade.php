@extends('admin.layouts.app')

@section('content-css')

    <!-- <link href="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" /> -->

    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script> -->
    <link href="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/admin/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">

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
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Campaign</h4>                                                   
                                                </div><!--end card-header-->
                                                <div class="card-body">                                    
                                                    <div class="general-label">
                                                        <form class="form-horizontal auth-form" method="POST" action="{{url('admin/campaigns')}}" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title" required="" value="{{ old('title') }}">
                                                                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title Details</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Campaign Title Details" name="title_detail" required="" value="{{ old('title_detail') }}">
                                                                    {!! $errors->first('title_detail', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Slider Image 1 (1920px * 850px)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" id="input-file-now" class="dropify" name="img1" />
                                                                    {!! $errors->first('img1', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Slider Image 2 (1920px * 850px)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" id="input-file-now" class="dropify" name="img2" />
                                                                    {!! $errors->first('img2', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Slider Image 3 (1920px * 850px)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" id="input-file-now" class="dropify" name="img3" />
                                                                    {!! $errors->first('img3', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Description</label>
                                                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                                                    <textarea id="basic-conf" name="desc">Hello, World!</textarea>
                                                                    {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-10 ms-auto">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
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

    <!-- <script src="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.pkgd.min.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script> -->

    <!-- <script src="{{ URL::asset('public/admin/assets/pages/jquery.forms-advanced.js') }}"></script> -->

    <script src="{{ URL::asset('public/admin/assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.form-editor.init.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection