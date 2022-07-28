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
                            <h4 class="card-title float-left">Participants List</h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Filter</div>
                        <div class="card-body">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="participant_type">Participant Type:</label>
                                            <select name="participant_type" id="participant_type"
                                                class="form-control custom-select">
                                                <option value="1"
                                                    {{ request()->participant_type == 1 ? 'selected' : '' }}>All</option>
                                                <option value="2"
                                                    {{ request()->participant_type == 2 ? 'selected' : '' }}>vivographers
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <input type="submit" name="" id="" class="btn btn-success"
                                    value="Filter Data">
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>Participant</th>
                                            <th>Email</th>
                                            <th>Is Vivographer?</th>
                                            <th>Joining Date</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participants as $participant)
                                            <tr>
                                                <td>{!! $participant->name . '<br>' . ($participant->contact ?? 'N/A') !!}</td>
                                                <td>{{ $participant->email }}</td>
                                                <td>{!! $participant->is_vivographer
                                                    ? '<span class="bg-success text-white p-1">Yes</span>'
                                                    : '<span class="bg-secondary text-white p-1">No</span>' !!}</td>
                                                <td>{{ $participant->created_at->diffForHumans() }}</td>
                                                <td>
                                                    @if ($participant->is_vivographer)
                                                        <a href="{{ route('participants.update-vivographer-status', ['user' => $participant->id, 'status' => 0]) }}"
                                                            onclick="return update_status(0)" class="btn btn-secondary btn-sm">Remove vivographer</a>
                                                    @else
                                                        <a href="{{ route('participants.update-vivographer-status', ['user' => $participant->id, 'status' => 1]) }}"
                                                            onclick="return update_status(1)" class="btn btn-success btn-sm">Make vivographer</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $participants->links() }}
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
    function update_status(status)
    {
        return confirm('Are you sure want to update vivographer status?');
    }
</script>
@endsection
