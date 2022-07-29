@extends('admin.layouts.app')

@section('content')

<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title float-left">Approved Request</h4>
                    </div><!--end card-header-->
                </div>

                <div class="card">
                    <div class="card-header">Filter</div>
                    <div class="card-body">
                        <form action="{{ route('admin.approved_request') }}" method="get">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="campaign">Campaign</label>
                                    <select name="campaign" id="campaign" class="form-control">
                                        <option value="">-All-</option>
                                        @foreach ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}" {{ request()->campaign == $campaign->id ? 'selected' : '' }}>{{ $campaign->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="photo_status">Photo Status</label>
                                    <select name="photo_status" id="photo_status" class="form-control">
                                        <option value="">All Photos</option>
                                        <option value="1" {{ request()->photo_status == 1 ? 'selected' : '' }}>Only Winner Photos</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" name="" id="" class="btn btn-success" value="Filter">
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-centered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Mobile Series Version</th>
                                    <th style="width: 280px;">Photo Caption</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Total Likes</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($photo_galleries as $key=>$value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value->mobile_series_version->name }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLarge{{$value->id}}">
                                                    <img width="100px" src="{{ $value->img_thumbnail ? Storage::url($value->img_thumbnail) : Storage::url($value->img) }}">
                                                </button>
                                                <div class="modal fade bd-example-modal-lg" id="exampleModalLarge{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                                        <img src="{{ $value->img_thumbnail ? Storage::url($value->img_thumbnail) : Storage::url($value->img) }}" alt="" class="img-fluid">
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
                                            <td>
                                                @foreach ($value->tags as $tag)
                                                <button type="button" class="btn btn-secondary btn-sm">
                                                    {{ $tag->name }}
                                                </button>
                                                @endforeach
                                            </td>
                                            <td>{{ $value->likes_count }}</td>
                                            <td>
                                                <a href="{{ route('photo-gallery.update-tags', ['photo_gallery_id'=> $value->id]) }}" class="btn btn-sm btn-primary btn-icon">
                                                    <i class="fa fa-pen"></i>
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

                                                <button type="button" onclick="makeWinner('make-winner-form-{{ $value->id }}')"
                                                    title="Make Winner" class="btn btn-{{ $value->is_winner ? 'warning' : 'success' }} btn-sm btn-icon">
                                                    {{ $value->is_winner ? 'Remove Winner' : 'Make Winner' }}
                                                </button>

                                                <form action="{{ route('photo-gallery.update-winner-status', ['photo_gallery_id' => $value->id]) }}"
                                                    method="POST" id="make-winner-form-{{ $value->id }}">
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table><!--end /table-->

                            {{ $photo_galleries->withQueryString()->links() }}
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
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

        function makeWinner(formId) {
            if (confirm('Are you sure want to update photo winner?')) {
                $('#' + formId).submit();
            } else {
                return;
            }
        }
    </script>
@endsection
