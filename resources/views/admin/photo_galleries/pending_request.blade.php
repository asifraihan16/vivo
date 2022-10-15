@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title float-left">Pending Request</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Mobile Series Version</th>
                                            <th>Photo Caption</th>
                                            <th>Image</th>
                                            <th>Tags</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($photo_galleries as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->mobile_series_version->name ?? 'N/A' }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalLarge{{ $value->id }}">
                                                        <img width="100px"
                                                            src="{{ $value->img_thumbnail ? Storage::url($value->img_thumbnail) : Storage::url($value->img) }}">
                                                    </button>
                                                    <div class="modal fade bd-example-modal-lg"
                                                        id="exampleModalLarge{{ $value->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                                            <img src="{{ $value->img_thumbnail ? Storage::url($value->img_thumbnail) : Storage::url($value->img) }}"
                                                                                alt="" class="img-fluid">
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
                                                <td>
                                                    @foreach ($value->tags as $tag)
                                                        <button type="button" class="btn btn-secondary btn-sm">
                                                            {{ $tag->name }}
                                                        </button>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/pending_request_approved', $value->id) }}"
                                                        onclick="return confirm('Are you sure want to approve?')"
                                                        class="btn btn-info btn-sm">Approve</a>

                                                    <a href="{{ route('photo-gallery.update-tags', ['photo_gallery_id' => $value->id]) }}"
                                                        title="Update tags" class="btn btn-primary btn-sm btn-icon"><i
                                                            class="fa fa-pen"></i>
                                                    </a>

                                                    <button type="button" onclick="confirmDelete('delete-form-{{ $value->id }}')"
                                                        title="Delete" class="btn btn-danger btn-sm btn-icon"><i
                                                            class="fa fa-trash"></i>
                                                    </button>

                                                    <form action="{{ route('photo-gallery.delete-photo', ['photo_gallery_id' => $value->id]) }}"
                                                        method="POST" id="delete-form-{{ $value->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $photo_galleries->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ URL::asset('admin/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet"> --}}
@endsection

@section('scripts')
    <script src="{{ asset('admin/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/pages/jquery.forms-advanced.js') }}"></script>
    {{-- <script src="{{ URL::asset('admin/assets/plugins/dropify/js/dropify.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('admin/assets/pages/jquery.form-upload.init.js') }}"></script> --}}

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
