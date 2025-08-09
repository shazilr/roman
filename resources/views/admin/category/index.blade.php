@extends('admin.layout.app')
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Categorie List</h3>
                        <a href="{{route('admin.create.category')}}" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                                class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td><strong>#{{$category->id ?? ''}}</strong></td>
                                    <td>{{$category->name ?? ''}}</td>
                                    @if($category->status == 'published')
                                    <td><span class="badge bg-success">Published</span></td>
                                    @elseif($category->status == 'scheduled')
                                    <td><span class="badge bg-secondary">Scheduled</span></td>
                                    @else
                                    <td><span class="badge bg-danger">Hidden</span></td>
                                    @endif
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-outline-primary">
                                                <i class="fa fa-edit text-success"></i></a>
                                            <button type="button" class="btn btn-outline-danger deleterow" data-id="{{ $category->id }}"><i class="fa fa-trash-o text-danger"></i></button>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('script')
    <script>
        $(document).ready(function () {
            let deleteId; // Variable to hold the dynamic ID

            // Event listener for delete buttons
            $('.deleterow').on('click', function () {
                deleteId = $(this).data('id'); // Get the dynamic ID from data attribute
                $('#confirmDeleteModal').modal('show'); // Show the confirmation modal
            });

            // Event listener for the confirm delete button
            $('#confirmDelete').on('click', function () {
                // Perform the delete action here, e.g., make an AJAX call
                $.ajax({
                    url: `{{ route('admin.category.destroy', '') }}/${deleteId}`, // Correct dynamic URL with category ID
                    type: 'GET', // Change to DELETE
                    data: {
                        _token: '{{ csrf_token() }}', // Include CSRF token for security
                    },
                    success: function (result) {
                        location.reload(); // Reload the page to reflect changes
                    },
                    error: function (xhr) {
                        // Handle errors
                        alert('Error deleting item: ' + xhr.responseText);
                    }
                });

                $('#confirmDeleteModal').modal('hide'); // Hide the modal
            });
        });


    </script>
    @endpush
