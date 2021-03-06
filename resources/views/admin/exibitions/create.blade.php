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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Exibitions</h4>                                                   
                                        </div><!--end card-header-->
                                        <div class="card-body">                                    
                                            <div class="general-label">
                                                <form class="form-horizontal auth-form" method="POST" action="{{url('admin/exibition_upload')}}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 1 (Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control" name="img1" required="" />
                                                                {!! $errors->first('img1', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 2(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control" name="img2" required="" />
                                                                {!! $errors->first('img2', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 3(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img3" />
                                                                {!! $errors->first('img3', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 4(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img4" />
                                                                {!! $errors->first('img4', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 5(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img5" />
                                                                {!! $errors->first('img5', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 6(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img6" />
                                                                {!! $errors->first('img6', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 7(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img7" />
                                                                {!! $errors->first('img7', '<p class="help-block">:message</p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <label for="horizontalInput1" class="col-sm-12 form-label align-self-center mb-lg-0">Image 8(Dimension : 7700px * 475px, Size : 80kb)</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" id="input-file-now" class="form-control" name="img8" />
                                                                {!! $errors->first('img8', '<p class="help-block">:message</p>') !!}
                                                            </div>
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

    <script src="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>

    <script src="{{ URL::asset('public/admin/assets/pages/jquery.forms-advanced.js') }}"></script>
@endsection