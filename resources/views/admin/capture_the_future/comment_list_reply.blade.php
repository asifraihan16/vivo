@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title float-left">Capture the Future Comments Reply</h4>

                            <div class="float-right">
                                {{-- <a href="{{ route('capture_the_future.create') }}" class="btn btn-success">Create</a> --}}

                                <div class="btn-group" role="group" aria-label="Filter">
                                    {{-- <a href="{{ route('capture_the_future.index') }}" class="btn btn-outline-info {{ request()->has('image_for_page') ? '' : 'active' }}">All Images</a> --}}
                                    {{-- <a href="{{ route('capture_the_future.index', ['image_for_page'=> 1]) }}" class="btn btn-outline-info {{ request()->image_for_page == 1 ? 'active' : '' }}">Home Page Images</a> --}}
                                    {{-- <a href="{{ route('capture_the_future.index', ['image_for_page'=> 2]) }}" class="btn btn-outline-info {{ request()->image_for_page == 2 ? 'active' : '' }}">Gallery Page Images</a> --}}
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>Reply</th>
                                            <th>Reply By</th>
                                            <th>Reply At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($moments as $key => $moment)
                                            <tr>
                                                <td>{{ $moment->comment_body }}</td>
                                                <td>{{ $moment->comment_by->name }}</td>
                                                <td>{{ $moment->capture_future->title }}</td>

                                                <td>
                                                

                                                    <a href="#" class="btn btn-danger btn-sm btn-icon"
                                                        onclick="confirmDelete('delete-form-{{ $moment->id }}')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('capture_the_future_comment_delete.destroy', ['comment_id' => $moment->id]) }}"
                                                        method="POST" id="delete-form-{{ $moment->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
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


@section('scripts')
    <script type="text/javascript">
        function confirmDelete(formId) {
            if (confirm('Are you sure want to delete?')) {
                $('#' + formId).submit();
            } else {
                return;
            }
        }
    </script>
@endsection
