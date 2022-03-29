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
                            <h4 class="card-title float-left">Exibition List</h4>
                            <a href="{{ url('admin/exibition_upload/create') }}"><button type="button"
                                    class="btn btn-outline-info float-right">Create</button></a>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Image 4</th>
                                            <th>Image 5</th>
                                            <th>Image 6</th>
                                            <th>Image 7</th>
                                            <th>Image 8</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img width="100px" src="{{ Storage::url($value->img1) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img2) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img3) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img4) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img5) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img6) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img7) }}"></td>
                                                <td><img width="100px" src="{{ Storage::url($value->img8) }}"></td>
                                                <td class="text-right">
                                                    <a href="{{ route('exibition_upload.edit', $value->id) }}"
                                                        class="btn btn-outline-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end /table-->
                            </div>
                            <!--end /tableresponsive-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div> <!-- end col -->
            </div>
        </div><!-- container -->
    </div>
    <!-- end page content -->
@endsection
