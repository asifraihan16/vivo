@extends('admin.layouts.app')

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
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Create Chronicle Magazine</h4>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="general-label">
                                                <form class="form-horizontal auth-form" method="POST" action="{{ route('chronicle_magazine.store') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="title">Title *</label>
                                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Image title" required>
                                                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="link">File Link *</label>
                                                        <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}" placeholder="Image title" required>
                                                        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="    ">Cover Image *</label>
                                                        <input type="file" name="upload_img" id="upload_img" class="form-control" required>
                                                        {!! $errors->first('upload_img', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="    "> Magazine File *</label>
                                                        <input type="file" name="doc" id="doc" class="form-control" required>
                                                        {!! $errors->first('doc', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                                   

                                                    <div class="form-group">
                                                        <label for="is_active">Status *</label>
                                                        <select name="is_active" id="is_active" class="form-control" required>
                                                            <option value="1">Active</option>
                                                            <option value="2">Inactive</option>
                                                        </select>
                                                        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                  

                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                            <a href="{{ route('moments.index') }}" class="btn btn-warning">Cancel</a>
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
