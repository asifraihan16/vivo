@extends('user.layouts.app')

@section('content')
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title float-left">Photo History</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <th>SL</th>
                                        <th>Mobile Model</th>
                                        <th>Photo Caption</th>
                                        <th>Image</th>
                                        <th>Tags</th>
                                        <th>Status</th>
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
                                                        <img width="100px" alt="Exibition Image" src="{{ $value->img_thumbnail ? Storage::url($value->img_thumbnail) : Storage::url($value->img) }}">
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
                                                                                alt="Exibition Image" class="img-fluid">
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
                                                        <button type="button" class="btn btn-secondary">
                                                            {{ $tag->name }}
                                                        </button>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if ($value->status == 0)
                                                        <button type="button" class="btn btn-warning">Pending</button>
                                                    @else
                                                        <button type="button" class="btn btn-success">Approved</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $photo_galleries->links() }}
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
