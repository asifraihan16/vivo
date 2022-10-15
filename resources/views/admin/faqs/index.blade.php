@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-lg-10 col-md-10 offset-md-1">
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title float-left">Frequently Asked Questions</h4>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info float-right" data-bs-toggle="modal"
                                    data-bs-target="#createModal">
                                    Create New FAQ
                                </button>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-centered">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Question Order</th>
                                                <th>Is Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($faqs as $faq)
                                                <tr>
                                                    <td>{{ $faq->question }}</td>
                                                    <td>{{ $faq->answer }}</td>
                                                    <td>{{ $faq->question_order }}</td>
                                                    <td>{!! $faq->is_active == 1 ? '<span class="text text-success">Active</span>' : '<span class="text text-danger">Inactive</span>' !!}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-bs-toggle="modal" data-bs-target="#updateModal-{{ $faq->id }}">
                                                            Edit
                                                        </button>

                                                        <a href="#" class="btn btn-danger btn-sm btn-icon" onclick="confirmDelete('delete-form-{{ $faq->id }}')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                        <form
                                                            action="{{ route('faqs.destroy', ['faq' => $faq->id]) }}"
                                                            method="POST" id="delete-form-{{ $faq->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>



                                                <!-- Modal -->
                                                <div class="modal fade" id="updateModal-{{ $faq->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update FAQ</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('faqs.update', ['faq'=> $faq->id]) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="question-{{ $faq->id }}">Question *</label>
                                                                        <input type="text" name="question" id="question-{{ $faq->id }}"
                                                                            class="form-control"
                                                                            value="{{ $faq->question }}" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="answer-{{ $faq->id }}">Answer *</label>
                                                                        <textarea name="answer" id="answer-{{ $faq->id }}" cols="30" rows="3" class="form-control" required>{{ $faq->answer }}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="question_order-{{ $faq->id }}">Order *</label>
                                                                        <input type="number" name="question_order"
                                                                            id="question_order-{{ $faq->id }}" class="form-control"
                                                                            value="{{ $faq->question_order }}" min="1"
                                                                            required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="is_active-{{ $faq->id }}">Is Active? *</label>
                                                                        <select name="is_active" id="is_active-{{ $faq->id }}"
                                                                            class="form-control" required>
                                                                            <option value="1" {{ $faq->id == 1 ? 'selected' : '' }}>Active</option>
                                                                            <option value="2" {{ $faq->id == 2 ? 'selected' : '' }}>Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update FAQ</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- container -->

    </div>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('faqs.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="question">Question *</label>
                            <input type="text" name="question" id="question" class="form-control"
                                value="{{ old('question') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="answer">Answer *</label>
                            <textarea name="answer" id="answer" cols="30" rows="3" class="form-control" required>{{ old('answer') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="question_order">Order *</label>
                            <input type="number" name="question_order" id="question_order" class="form-control"
                                value="{{ old('question_order') }}" min="1" required>
                        </div>

                        <div class="form-group">
                            <label for="is_active">Is Active? *</label>
                            <select name="is_active" id="is_active" class="form-control" required>
                                <option value="1" {{ old('question_order') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ old('question_order') == 2 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save FAQ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
