@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title float-left">Playlist 1 Other Vedio List</h4>
                            <a href="{{ route('moments.create') }}"><button type="button"
                                    class="btn btn-outline-info float-right">Create</button></a>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Thumbnail Image</th>
                                            <th>Image order</th>
                                            <th>Span Column</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($moments as $key => $moment)
                                            <tr>
                                                <td>{{ $moment->title }}</td>
                                                <td>
                                                    @if ($moment->image_path)
                                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalLarge{{ $moment->id }}">
                                                            <img width="100px" src="{{ Storage::url($moment->image_path) }}">
                                                        </button>
                                                    @else
                                                        <p>N/A</p>
                                                    @endif
                                                    <div class="modal fade bd-example-modal-lg"
                                                        id="exampleModalLarge{{ $moment->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                                            @if ($moment->image_path)
                                                                                <img src="{{ Storage::url($moment->image_path) }}"
                                                                                    alt="Thumbnail image"
                                                                                    class="img-fluid">
                                                                            @endif
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->

                                                                </div>
                                                                <!--end modal-body-->
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-soft-secondary btn-sm"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                <!--end modal-footer-->
                                                            </div>
                                                            <!--end modal-content-->
                                                        </div>
                                                        <!--end modal-dialog-->
                                                    </div>
                                                </td>
                                                <td>{{ $moment->image_order }}</td>
                                                <td>{{ $moment->image_span_col }}</td>
                                                <td>
                                                    @if($moment->is_active == 1)
                                                    <span class="text-success">Active</span>
                                                    @else
                                                    <span class="text-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($moment->is_active == 1)
                                                    <a href="{{ route('moments.update-status', ['moment'=>$moment->id, 'status'=>2]) }}"
                                                        onclick="return confirm('Are you sure want to deactivate?')"
                                                        class="btn btn-warning btn-sm btn-icon" title="Deactivate">
                                                        <i class="fa fa-thumbs-down"></i>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('moments.update-status', ['moment'=>$moment->id, 'status'=>1]) }}"
                                                        onclick="return confirm('Are you sure want to activate?')"
                                                        class="btn btn-success btn-sm btn-icon" title="Activate">
                                                        <i class="fa fa-thumbs-up"></i>
                                                    </a>
                                                    @endif

                                                    <a href="#" class="btn btn-danger btn-sm btn-icon" onclick="confirmDelete('delete-form-{{ $moment->id }}')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('moments.destroy', ['moment' => $moment->id]) }}"
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
