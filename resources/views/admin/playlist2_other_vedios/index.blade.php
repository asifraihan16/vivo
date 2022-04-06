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
                            <h4 class="card-title float-left">Playlist 2 Other Vedio List</h4>
                            <a href="{{ url('admin/playlist2_other_vedios/create') }}"><button type="button"
                                    class="btn btn-outline-info float-right">Create</button></a>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-centered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Embeded Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->link }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon" onclick="confirmDelete('delete-form-{{ $value->id }}')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('playlist2_other_vedios.destroy', ['id' => $value->id]) }}"
                                                        method="POST" id="delete-form-{{ $value->id }}">
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
