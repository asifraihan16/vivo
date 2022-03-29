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
                                    <h4 class="card-title float-left">Playlist1 Main Vedio List</h4>
                                    <a href="{{ url('admin/playlist1_main_vedios/create') }}"><button type="button" class="btn btn-outline-info float-right">Create</button></a>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Thumbnail Image</th>
                                                <th>Description</th>
                                                <th>Embeded Link</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($data as $key=>$value) 
		                                            <tr>
		                                                <td>{{ $key+1 }}</td>
		                                                <td>{{ $value->title }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLarge{{$value->id}}">
                                                                <img width="100px" src="{{ asset('/storage/'.$value->img) }}">
                                                            </button>
                                                            <div class="modal fade bd-example-modal-lg" id="exampleModalLarge{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                                                    <img src="{{ asset('/storage/'.$value->img) }}" alt="" class="img-fluid">
                                                                                </div><!--end col-->                                                          
                                                                            </div><!--end row-->
                                                                            
                                                                        </div><!--end modal-body-->
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                                        </div><!--end modal-footer-->
                                                                    </div><!--end modal-content-->
                                                                </div><!--end modal-dialog-->
                                                            </div>
                                                        </td>
                                                        <td>{{ $value->desc }}</td>
		                                                <td>{{ $value->link }}</td>
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