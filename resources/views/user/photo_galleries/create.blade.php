@extends('user.layouts.app')

@section('content-css')
    <link href="{{ URL::asset('admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('admin/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Photo Upload</h4>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="general-label">
                                                <div id="err"></div>
                                                <form id="file_upload_form" class="form-horizontal auth-form" method="POST"
                                                    action="{{ url('user/photo_upload') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" class="form-control" id="horizontalInput1"
                                                        placeholder="" name="users_id" required=""
                                                        value="{{ old('title') }}">

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Mobile
                                                            Model *</label>
                                                        <div class="col-sm-10">
                                                            <select class="select2 form-control custom-select"
                                                                name="mobile_series_versions_id"
                                                                style="width: 100%; height:36px;" required="true">
                                                                <option value="">Select</option>
                                                                @foreach ($mobile_series_versions as $data)
                                                                    <option value="{{ $data->id }}"
                                                                        {{ old('mobile_series_versions_id') == $data->id ? 'selected' : '' }}>
                                                                        {{ $data->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Photo Caption</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="horizontalInput1"
                                                                placeholder="Enter Photo Caption" name="title"
                                                                value="{{ old('title') }}">
                                                            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-3 row">
                                                        <label for="story"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Photo Story</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="story"
                                                                placeholder="Enter Photo Story" name="story"
                                                                value="{{ old('story') }}">
                                                                <span class="text-danger">* Maximum 200 Character</span>
                                                            {!! $errors->first('story', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Image *</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" id="input-file-now" class="dropify"
                                                                name="img" />
                                                            {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Campaign *</label>
                                                        <div class="col-sm-10">
                                                            <select name="campaign_id" id="campaign_id" class="form-control" >
                                                                <option value="">Select</option>
                                                                @foreach ($campaigns as $campaign)
                                                                    <option value="{{ $campaign->id }}">{{ $campaign->title }}</option>
                                                                @endforeach
                                                            </select>
                                                            {!! $errors->first('campaign_id', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Tags</label>
                                                        <div class="col-sm-10">
                                                            <select class="select2 mb-3 select2-multiple" name="tags_id[]"
                                                                style="width: 100%" multiple="multiple"
                                                                data-placeholder="Choose">
                                                                <option>Select</option>
                                                                @foreach ($tags as $data)
                                                                    <option value="{{ $data->id }}"
                                                                        {{ old('tags_id') == $data->id ? 'selected' : '' }}>
                                                                        {{ $data->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 0%"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
        </div><!-- container -->
    </div>
    <!-- end page content -->
@endsection

@section('content-js')
    <script src="{{ URL::asset('admin/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/pages/jquery.forms-advanced.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/pages/jquery.form-upload.init.js') }}"></script>
@endsection

@section('scripts')
    <script src="{{ URL::asset('admin/assets/pages/jquery.form.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#file_upload_form').ajaxForm({
                beforeSend: function() {
                    var percentage = '0';
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('.progress .progress-bar').css("width", percentage + '%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                success: function(res) {
                    var msg =
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                        '<strong>Success!</strong><br>Successfully uploaded file</div>';

                    $('#err').html(msg)

                    setTimeout(function() {
                        window.location.replace('{{ route("user.photo_history") }}');
                    }, 1500);
                },
                error: function(res) {
                    var errResp = res.responseJSON;
                    var errors = errResp.errors;
                    var msg =
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                    msg += '<strong>' + errResp.message + '</strong><br>';
                    if (errors.img) {
                        msg += "* " + errors.img[0] + "<br>";
                    }
                    if (errors.campaign_id) {
                        msg += "* " + errors.campaign_id[0];
                    }
                    if (errors.story) {
                        msg += "* " + errors.story[0];
                    }
                    msg += '</div>';
                    $('#err').html(msg)
                },
                complete: function(xhr) {}
            });
        });
    </script>
@endsection
