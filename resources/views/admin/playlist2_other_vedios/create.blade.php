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
                                                    <h4 class="card-title">Play 2 Other Vedios</h4>                                                    
                                                </div><!--end card-header-->
                                                <div class="card-body">                                    
                                                    <div class="general-label">
                                                        <form class="form-horizontal auth-form" method="POST" action="{{url('admin/playlist2_other_vedios')}}" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Playlist Image(Dimension : 602px * 602px, Size : 150kb)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" id="input-file-now" class="form-control" name="img" />
                                                                    {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="horizontalInput1" class="col-sm-2 form-label align-self-center mb-lg-0">Embeded Link</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="horizontalInput1" name="link" value="{{ old('link') }}">
                                                                    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
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