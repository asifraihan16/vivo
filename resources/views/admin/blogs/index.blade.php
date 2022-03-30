@extends('admin.layouts.app')

@section('content')

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-left">Blog List</h4>
                                    <a href="{{ url('admin/blogs/create') }}"><button type="button" class="btn btn-outline-info float-right">Create</button></a>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($data as $key=>$value) 
		                                            <tr>
		                                                <td>{{ $key+1 }}</td>
                                                        <td>{{ $value->title }}</td>
		                                                <td><img width="100px" src="{{ $value->img ? Storage::url($value->img) : '' }}"></td>                                                        
                                                        <td>{{ $value->desc }}</td>
		                                                <td class="text-right">
	                                                        <a href="{{ route('blogs.edit', $value->id) }}" class="btn btn-outline-warning">Edit</a>
		                                                </td>
		                                            </tr>
	                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div>
                </div><!-- container -->
            </div>
            <!-- end page content -->       

@endsection