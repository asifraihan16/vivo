@extends('user.layouts.app')

@section('content-css')

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
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Photo Upload</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <div class="general-label">
                                            <form class="form-horizontal auth-form" method="POST" action="{{url('user/photo_upload')}}" enctype="multipart/form-data">

                                                {{ csrf_field() }}

                                                <input type="hidden" class="form-control" id="horizontalInput1" placeholder="" name="users_id" required="" value="{{ old('title') }}">

                                                <div class="mb-3 row">
                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Mobile Model</label>
                                                    <div class="col-sm-10">
                                                        <select class="select2 form-control custom-select" name="mobile_series_versions_id" style="width: 100%; height:36px;" required="">
                                                            <option>Select</option>
                                                            @foreach($mobile_series_versions as $data)
                                                                <option value="{{ $data->id }}" {{ old('mobile_series_versions_id') == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Title" name="title" required="" value="{{ old('title') }}">
                                                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="input-file-now" class="dropify" name="img" />
                                                        {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Tags</label>
                                                    <div class="col-sm-10">
                                                        <select class="select2 mb-3 select2-multiple" name="tags_id[]" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                            <option>Select</option>
                                                            @foreach($tags as $data)
                                                                <option value="{{ $data->id }}" {{ old('tags_id') == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                                                            @endforeach
                                                        </select>
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
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.forms-advanced.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.form-upload.init.js') }}"></script>

@endsection
