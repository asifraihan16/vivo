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
                                                    <h4 class="card-title">Tag Name Edit</h4>                                                    
                                                </div><!--end card-header-->
                                                <div class="card-body">                                    
                                                    <div class="general-label">
                                                        <form class="form-horizontal auth-form" method="POST" action="{{ route('tags.update', $data[0]->id) }}" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            @method('PUT')
                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="horizontalInput1" placeholder="Enter Mobile Series Name" name="name" value="{{ $data[0]->name }}">
                                                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
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