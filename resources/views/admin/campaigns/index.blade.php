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
                                    <h4 class="card-title float-left">Campaign List</h4>
                                    <a href="{{ url('admin/campaigns/create') }}"><button type="button" class="btn btn-outline-info float-right">Create</button></a>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Title Detail</th>
                                                <th>Slider Image 1</th>
                                                <th>Slider Image 2</th>
                                                <th>Slider Image 3</th>
                                                <th>Description</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($data as $key=>$value) 
		                                            <tr>
		                                                <td>{{ $key+1 }}</td>
                                                        <td>{{ $value->title }}</td>
                                                        <td>{{ $value->title_detail }}</td>
		                                                <td><img width="100px" src="{{ $value->img1 ? Storage::url($value->img1) : '' }}"></td>
                                                        <td><img width="100px" src="{{ $value->img2 ? Storage::url($value->img2) : '' }}"></td>
                                                        <td><img width="100px" src="{{ $value->img3 ? Storage::url($value->img3) : '' }}"></td>                                                       
                                                        <td>{{ $value->desc }}</td>
		                                                <td class="text-right">
	                                                        <a href="{{ route('campaigns.edit', $value->id) }}" class="btn btn-outline-warning">Edit</a>
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