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
                            <a href="{{ url('admin/campaigns/create') }}"><button type="button"
                                    class="btn btn-outline-info float-right">Create</button></a>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Title Detail</th>
                                            <th>Slider Image 1</th>
                                            {{-- <th>Slider Image 2</th>
                                            <th>Slider Image 3</th> --}}
                                            {{-- <th>Description</th> --}}
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->title_detail }}</td>
                                                <td><img width="100px"
                                                        src="{{ $value->img1 ? Storage::url($value->img1) : '' }}"></td>
                                                {{-- <td><img width="100px"
                                                        src="{{ $value->img2 ? Storage::url($value->img2) : '' }}"></td>
                                                <td><img width="100px"
                                                        src="{{ $value->img3 ? Storage::url($value->img3) : '' }}"></td> --}}
                                                {{-- <td>{{ Str::limit($value->desc, 100) }}</td> --}}
                                                <td>{{ $value->start_date ? date('d-M, Y', strtotime($value->start_date)) : '-' }}</td>
                                                <td>
                                                    {!! $value->status !!}
                                                    {{-- @if ($value->campaign_status === 1)
                                                        <span style="color: #999">Draft</span>
                                                    @elseif ($value->campaign_status === 2)
                                                        <span class="text-success">On-going</span>
                                                    @elseif ($value->campaign_status === 3)
                                                        <span class="text-danger">Closed</span>
                                                    @endif --}}
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('campaigns.edit', $value->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>

                                                    @if($value->campaign_status === 1)
                                                        <a href="{{ route('campaigns.update-status', ['campaign'=> $value->id, 'status'=>2]) }}"
                                                            onclick="return confirm_update_status(2)"
                                                            class="btn btn-outline-success btn-sm">Start</a>
                                                    @elseif($value->campaign_status === 2)
                                                        <a href="{{ route('campaigns.update-status', ['campaign'=> $value->id, 'status'=>3]) }}"
                                                            onclick="return confirm_update_status(3)"
                                                            class="btn btn-outline-danger btn-sm">End</a>
                                                        <a href="{{ route('campaigns.update-status', ['campaign'=> $value->id, 'status'=>1]) }}"
                                                            onclick="return confirm_update_status(1)"
                                                            class="btn btn-outline-info btn-sm">Draft</a>
                                                    @endif
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
    $(document).ready(function() {
        //
    });

    function confirm_update_status(status) {
        var label = status == 1 ? 'Draft' : (status == 2 ? 'On-going' : 'End');
        return confirm("Are you sure want to update status to " + label + "?" )
    }
</script>
@endsection
