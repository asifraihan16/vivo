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
                                                    <h4 class="card-title">Moment of the Month</h4>                                                   
                                                </div><!--end card-header-->
                                                <div class="card-body">                                    
                                                    <div class="general-label">
                                                        <form class="form-horizontal auth-form" method="POST" action="{{ route('moment_of_the_months.update', $data[0]->id) }}" enctype="multipart/form-data">

                                                            {{ csrf_field() }}
                                                            @method('PUT')

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 1</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title1" required="" value="{{ $data[0]->title1 }}">
                                                                        {!! $errors->first('title1', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 1</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img1 ? Storage::url($data[0]->img1) : '' }}" width="200px" height="200px">
                                                                        <input type="file" class="form-control" name="img1" />
                                                                        {!! $errors->first('img1', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 1</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link1" required="" value="{{ $data[0]->link1 }}">
                                                                        {!! $errors->first('link1', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 2</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title2" required="" value="{{ $data[0]->title2 }}" >
                                                                        {!! $errors->first('title2', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 2</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img2 ? Storage::url($data[0]->img2) : '' }}" width="200px" height="200px">
                                                                        <input type="file" class="form-control" name="img2" />
                                                                        {!! $errors->first('img2', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 2</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link2" required="" value="{{ $data[0]->link2 }}" >
                                                                        {!! $errors->first('link2', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 3</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title3" required=""  value="{{ $data[0]->title3 }}">
                                                                        {!! $errors->first('title3', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 3</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img3 ? Storage::url($data[0]->img3) : '' }}" width="200px" height="200px">
                                                                        <input type="file" id="input-file-now" class="form-control" name="img3" />
                                                                        {!! $errors->first('img3', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 3</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link3" required=""  value="{{ $data[0]->link3 }}"">
                                                                        {!! $errors->first('link3', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 4</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title4" required=""  value="{{ $data[0]->title4 }}"}">
                                                                        {!! $errors->first('title4', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 4</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img4 ? Storage::url($data[0]->img4) : '' }}" width="200px" height="200px">
                                                                        <input type="file" id="input-file-now" class="form-control" name="img4" />
                                                                        {!! $errors->first('img4', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 4</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link4" required=""  value="{{ $data[0]->link4 }}"">
                                                                        {!! $errors->first('link4', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 5</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title5" required=""  value="{{ $data[0]->title5 }}"}">
                                                                        {!! $errors->first('title5', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 5</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img5 ? Storage::url($data[0]->img5) : '' }}" width="200px" height="200px">
                                                                        <input type="file" id="input-file-now" class="form-control" name="img5" />
                                                                        {!! $errors->first('img5', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 5</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link5" required=""  value="{{ $data[0]->link5 }}"">
                                                                        {!! $errors->first('link5', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 6</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title6" required=""  value="{{ $data[0]->title6 }}"}">
                                                                        {!! $errors->first('title6', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 6</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img6 ? Storage::url($data[0]->img6) : '' }}" width="200px" height="200px">
                                                                        <input type="file" id="input-file-now" class="form-control" name="img6" />
                                                                        {!! $errors->first('img6', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 6</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link6" required=""  value="{{ $data[0]->link6 }}"">
                                                                        {!! $errors->first('link6', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Title 7</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="title7" required=""  value="{{ $data[0]->title7 }}"}">
                                                                        {!! $errors->first('title7', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Image 7</label>
                                                                    <div class="col-sm-10">
                                                                        <img src="{{ $data[0]->img7 ? Storage::url($data[0]->img7) : '' }}" width="200px" height="200px">
                                                                        <input type="file" id="input-file-now" class="form-control" name="img7" />
                                                                        {!! $errors->first('img7', '<p class="help-block">:message</p>') !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Link 7</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="link7" required=""  value="{{ $data[0]->link7 }}"">
                                                                        {!! $errors->first('link7', '<p class="help-block">:message</p>') !!}
                                                                    </div>
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