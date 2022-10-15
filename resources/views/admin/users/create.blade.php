@extends('admin.layouts.app')

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
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Tags</h4>                                                    
                                                </div><!--end card-header-->
                                                <div class="card-body">                                    
                                                    <div class="general-label">
                                                        <form class="form-horizontal auth-form" method="POST" action="{{url('admin/admin_user_create')}}" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Full Name</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Enter Full Name" />
                                                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address" />
                                                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Select User Type</label>
                                                                <div class="col-sm-10">
                                                                    <select class="select2 form-control custom-select" name="mobile_series_id" style="width: 100%; height:36px;" required="">
                                                                        <option value="1">Admin</option>
                                                                        <option value="0">User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-10 ms-auto">
                                                                    <button type="submit" class="btn btn-primary">Create</button>
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