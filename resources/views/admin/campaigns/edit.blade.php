@extends('admin.layouts.app')

@section('content-css')
    {{-- <link href="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">
    <link
        href="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" /> --}}

    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" type="text/css">
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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Campaign Edit</h4>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="general-label">
                                                <form class="form-horizontal auth-form" method="POST"
                                                    action="{{ route('campaigns.update', $campaign->id) }}"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    @method('PUT')

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Campaign Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="horizontalInput1"
                                                                placeholder="Enter Mobile Series Name" name="title"
                                                                required="" value="{{ $campaign->title }}">
                                                            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Photo Theme</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="horizontalInput1"
                                                                placeholder="Enter Campaign Title Details"
                                                                name="title_detail" required=""
                                                                value="{{ $campaign->title_detail }}">
                                                            {!! $errors->first('title_detail', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Slider
                                                            Image 1 (1920px * 850px)</label>
                                                        <div class="col-sm-10">

                                                            @if($campaign->img1)
                                                            <img src="{{ $campaign->img1 ? Storage::url($campaign->img1) : '' }}"
                                                                style="width: 300px;" /> <br>
                                                            @else
                                                                No Image available
                                                            @endif
                                                            <input type="file" id="input-file-now" class="dropify"
                                                                name="img1" />
                                                            {!! $errors->first('img1', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Slider
                                                            Image 2 (1920px * 850px)</label>
                                                        <div class="col-sm-10">
                                                            @if($campaign->img2)
                                                            <img src="{{ $campaign->img2 ? Storage::url($campaign->img2) : '' }}"
                                                                style="width: 300px;" /> <br>
                                                            @else
                                                                No Image available
                                                            @endif
                                                            <input type="file" id="input-file-now" class="dropify"
                                                                name="img2" />
                                                            {!! $errors->first('img2', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Slider
                                                            Image 3 (1920px * 850px)</label>
                                                        <div class="col-sm-10">
                                                            @if($campaign->img3)
                                                                <img src="{{ $campaign->img3 ? Storage::url($campaign->img3) : '' }}"
                                                                    style="width: 300px;" />
                                                            @else
                                                                No Image available
                                                            @endif
                                                            <input type="file" id="input-file-now" class="dropify"
                                                                name="img3" />
                                                            {!! $errors->first('img3', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    {{-- <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Campaing
                                                            Status</label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                            <select name="campaign_status" id="campaign_status"
                                                                class="form-control" required>
                                                                <option value="1"
                                                                    {{ $campaign->campaign_status == 1 ? 'selected' : '' }}>
                                                                    Draft</option>
                                                                <option value="2"
                                                                    {{ $campaign->campaign_status == 2 ? 'selected' : '' }}>
                                                                    On Going</option>
                                                                <option value="3"
                                                                    {{ $campaign->campaign_status == 3 ? 'selected' : '' }}>
                                                                    End</option>
                                                            </select>
                                                            {!! $errors->first('campaign_status', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div> --}}

                                                    <div class="mb-3 row">
                                                        <label for="start_date"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Campaing Start Date</label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                            <input type="text" name="start_date" id="start_date" placeholder="dd-mm-yyyy"
                                                                class="form-control" value="{{ $campaign->start_date ? date_format(date_create($campaign->start_date), 'd-m-Y') : '' }}" readonly>
                                                            {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="horizontalInput1"
                                                            class="col-sm-2 form-label align-self-center mb-lg-0">Description</label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                            <textarea id="basic-conf" name="desc" class="form-control" rows="6">{{ $campaign->desc }}</textarea>
                                                            {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-10 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Update</button>
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
    {{-- <script src="{{ URL::asset('public/admin/assets/plugins/select2/select2.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('public/admin/assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}">
    </script>
    <script src="{{ URL::asset('public/admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('public/admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}">
    </script>

    <script src="{{ URL::asset('public/admin/assets/pages/jquery.forms-advanced.js') }}"></script>

    <script src="{{ URL::asset('public/admin/assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/assets/pages/jquery.form-editor.init.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            /* $('#start_date').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 2021,
                maxYear: parseInt(moment().format('YYYY'),10)
            }) */

            $('#start_date').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
                clearBtn: true,
                todayBtn: "linked",
            })
        });
    </script>
@endsection
