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
                                    <h4 class="card-title float-left">Moments List</h4>
                                    <a href="{{ url('admin/moment_of_the_months/create') }}"><button type="button" class="btn btn-outline-info float-right">Create</button></a>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title 1</th>
                                                <th>Image 1</th>
                                                <th>Link 1</th>

                                                <th>Title 2</th>
                                                <th>Image 2</th>
                                                <th>Link 2</th>

                                                <th>Title 3</th>
                                                <th>Image 3</th>
                                                <th>Link 3</th>

                                                <th>Title 4</th>
                                                <th>Image 4</th>
                                                <th>Link 4</th>

                                                <th>Title 5</th>
                                                <th>Image 5</th>
                                                <th>Link 5</th>

                                                <th>Title 6</th>
                                                <th>Image 6</th>
                                                <th>Link 6</th>

                                                <th>Title 7</th>
                                                <th>Image 7</th>
                                                <th>Link 7</th>

                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($data as $key=>$value) 
		                                            <tr>
		                                                <td>{{ $key+1 }}</td>
                                                        <td>{{ $value->title1 }}</td>
		                                                <td><img width="100px" src="{{ asset('/storage/'.$value->img1) }}"></td>
                                                        <td>{{ $value->link1 }}</td>

                                                        <td>{{ $value->title2 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img2) }}"></td>
                                                        <td>{{ $value->link2 }}</td>

                                                        <td>{{ $value->title3 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img3) }}"></td>
                                                        <td>{{ $value->link3 }}</td>

                                                        <td>{{ $value->title4 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img4) }}"></td>
                                                        <td>{{ $value->link4 }}</td>

                                                        <td>{{ $value->title5 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img5) }}"></td>
                                                        <td>{{ $value->link5 }}</td>

                                                        <td>{{ $value->title6 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img6) }}"></td>
                                                        <td>{{ $value->link6 }}</td>

                                                        <td>{{ $value->title7 }}</td>
                                                        <td><img width="100px" src="{{ asset('/storage/'.$value->img7) }}"></td>
                                                        <td>{{ $value->link7 }}</td>
		                                                <td class="text-right">
	                                                        <a href="{{ route('moment_of_the_months.edit', $value->id) }}" class="btn btn-outline-warning">Edit</a>
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