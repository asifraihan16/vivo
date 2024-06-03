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
                                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Image title" required>
                                                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="    ">Image *</label>
                                                        <input type="file" name="upload_img" id="upload_img" class="form-control" required>
                                                        {!! $errors->first('upload_img', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image_order">Image Serial *</label>
                                                        <input type="number" min="1" name="image_order" id="image_order" class="form-control" value="{{ old('image_order') }}" placeholder="Ex: 1" required>
                                                        {!! $errors->first('image_order', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image_span_col">Image Column Span *</label>
                                                        <select name="image_span_col" id="image_span_col" class="form-control" required>
                                                            <option value="3">3 Column</option>
                                                            <option value="6">6 Column</option>
                                                        </select>
                                                        {{-- <input type="number" min="1" name="image_span_col" id="image_span_col" class="form-control" value="{{ old('image_span_col') }}" required> --}}
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

                                                    <div class="form-group">
                                                        <label for="image_for_page">Image For Page *</label>
                                                        <select name="image_for_page" id="image_for_page" class="form-control" required>
                                                            <option value="1">Home Page</option>
                                                            <option value="2">Gallery Page</option>
                                                        </select>
                                                        {!! $errors->first('image_for_page', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="author_name">Author Name *</label>
                                                        <input type="text"  name="author_name" id="author_name" class="form-control" value="{{ old('author_name') }}" placeholder="author name" required>
                                                        {!! $errors->first('author_name', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="phone_model">Phone Model *</label>
                                                        <input type="text"  name="phone_model" id="phone_model" class="form-control" value="{{ old('phone_model') }}" placeholder="model" required>
                                                        {!! $errors->first('phone_model', '<p class="help-block">:message</p>') !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tag">Tag *</label>
                                                        <input type="text"  name="tag" id="tag" class="form-control" value="{{ old('tag') }}" placeholder="tag" required>
                                                        {!! $errors->first('tag', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="story">Story *</label>
                                                        <input type="text"  name="tag" id="tag" class="form-control" value="{{ old('story') }}" placeholder="story" required>
                                                        {!! $errors->first('story', '<p class="help-block">:message</p>') !!}
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
