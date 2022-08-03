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
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Profile</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">VIVO</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div id="user_map" class="pro-map" style="height: 220px"></div>
                    </div>
                    <!--end card-body-->
                    <div class="card-body">
                        <div class="dastone-profile">
                            <div class="row">
                                <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                    <div class="dastone-profile-main">
                                        <div class="dastone-profile-main-pic">
                                            @if (Session()->get('img') != null)
                                                <img src="{{ Storage::url(Session()->get('img')) }}" alt=""
                                                    weight="128" height="128" class="rounded-square">
                                            @else
                                                <img src="{{ asset('admin/assets/images/users/dummy_user.png') }}"
                                                    alt="" weight="128" height="128" class="rounded-square">
                                            @endif

                                        </div>
                                        <div class="dastone-profile_user-detail">
                                            <h5 class="dastone-user-name">{{ Session()->get('name') }}</h5>
                                            <!-- <p class="mb-0 dastone-user-name-post">UI/UX Designer, India</p>                                                         -->
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 ms-auto align-self-center">
                                    <ul class="list-unstyled personal-detail mb-0">
                                        <li class=""><i
                                                class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b>
                                                phone </b> : {{ $user->contact ?? 'N/A' }}</li>
                                        <li class="mt-2"><i
                                                class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b>
                                                Email </b> : {{ $user->email }}</li>
                                    </ul>

                                </div>
                                <!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <div class="row">
                                        <div class="col-auto text-end border-end">
                                            <button type="button"
                                                class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>
                                            <p class="mb-0 fw-semibold">Facebook</p>
                                            <!-- <h4 class="m-0 fw-bold">25k <span class="text-muted font-12 fw-normal">Followers</span></h4> -->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end f_profile-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="pb-4">
            <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="Profile_Post_tab" data-bs-toggle="pill"
                        href="#Profile_Post">Setting</a>
                </li>
            </ul>
        </div>
        <!--end card-body-->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel"
                        aria-labelledby="Profile_Post_tab">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Personal Information</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <form class="form-horizontal auth-form" method="POST"
                                            action="{{ url('user/profile_info') }}" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" class="form-control" id="horizontalInput1"
                                                name="name" required="" value="{{ $user->name }}">

                                            <div class="form-group row">
                                                <label
                                                    class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Profile
                                                    Image Change</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input type="file" id="input-file-now" class="dropify"
                                                        name="img" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Name</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="text" name="name"
                                                        value="{{ $user->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Contact
                                                    Phone</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class="las la-phone"></i></span>
                                                        <input type="text" class="form-control"
                                                            value="{{ $user->contact }}"
                                                            placeholder="Contact No" name="contact"
                                                            aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Email
                                                    Address</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class="las la-at"></i></span>
                                                        <input type="text" class="form-control"
                                                            value="{{ $user->email }}" placeholder="Email"
                                                            name="email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                    <button type="submit"
                                                        class="btn btn-sm btn-outline-primary">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <!-- end col -->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end tab-content-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container -->

    <footer class="footer text-center text-sm-start">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script> VIVO <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Geniee360</span>
    </footer>
    <!--end footer-->
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
