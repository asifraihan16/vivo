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
                                            <h4 class="card-title">Create Moment</h4>
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="general-label">
                                                <form class="form-horizontal auth-form" method="POST" action="{{ route('moments.store') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="title">Title *</label>
                                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                                                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="    ">Image *</label>
                                                        <input type="file" name="upload_img" id="upload_img" class="form-control" required>
                                                        {!! $errors->first('upload_img', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image_order">Image Serial *</label>
                                                        <input type="number" min="1" name="image_order" id="image_order" class="form-control" value="{{ old('image_order') }}" required>
                                                        {!! $errors->first('image_order', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image_span_col">Image Column Span *</label>
                                                        <input type="number" min="1" name="image_span_col" id="image_span_col" class="form-control" value="{{ old('image_span_col') }}" required>
                                                        {!! $errors->first('image_span_col', '<p class="help-block">:message</p>') !!}
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
