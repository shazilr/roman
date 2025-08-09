@extends('admin.layout.app')
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products</h3>

                        <a href="{{route('admin.create.product')}}"
                           class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                                class="icofont-plus-circle me-2 fs-6"></i> Add Products</a>

                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="sticky-lg-top">
                        <div class="card mb-3">
                            <div class="reset-block">
                                <div class="filter-title">
                                    <h4 class="title">Filter</h4>
                                </div>
                                <div class="filter-btn">
                                    <a class="btn btn-primary" href="{{route('admin.product')}}">Reset</a>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="categories">
                                <div class="filter-title">
                                    <a class="title" data-bs-toggle="collapse" href="#category" role="button"
                                       aria-expanded="true">Categories</a>
                                </div>
                                <div class="collapse show" id="category">
                                    <div class="filter-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search" class="form-control">
                                            <button><i class="lni lni-search-alt"></i></button>
                                        </form>
                                    </div>
                                    <div class="filter-category">
                                        <ul class="category-list">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="{{ route('admin.product', $category->id) }}" class="collapsed">
                                                        {{ $category->name ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                    <div class="card mb-3 bg-transparent p-2">
                        @foreach($products as $product)
                            <div class="card border-0 mb-1">

                                <div
                                    class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block">
                                    <input class="form-check-input product-status-checkbox" type="checkbox"
                                           @if($product->status == 'hidden') checked @endif id="Eaten-switch1"
                                           data-product-id="{{$product->id}}">
                                    <label class="form-check-label" for="Eaten-switch1">Hidden</label>
                                    <button type="button" class="btn btn-outline-danger deleterow" data-id="{{ $product->id }}"><i class="fa fa-trash-o text-danger"></i></button>

                                </div>


                                <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                    <a href="{{route('admin.edit.product',$product->id)}}">
                                        <img class="w120 rounded img-fluid"
                                             src="{{asset('data/product_images/'.($product->image ?? ''))}}" alt="">
                                    </a>
                                    <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                        <a href="{{route('admin.edit.product',$product->id)}}"><h6
                                                class="mb-3 fw-bold">{{$product->name ?? ''}}
                                                <span
                                                    class="text-muted small fw-light d-block">{{$product->sku ?? ''}}</span>
                                            </h6></a>
                                        <div
                                            class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Category</div>
                                                <strong>{{$product->category->name ?? ''}}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Price</div>
                                                <strong>${{$product->price ?? ''}}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Stock</div>
                                                <strong>{{$product->stock ?? ''}}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Ratings</div>
                                                <strong><i class="icofont-star text-warning"></i>4.5 <span
                                                        class="text-muted">(145)</span></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <nav class="justify-content-end d-flex">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1">Previous</a>
                                    </li>

                                    <!-- Pagination Elements -->
                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                @endforeach

                                <!-- Next Page Link -->
                                    <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div> <!-- Row end  -->
        </div>
    </div>
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

        document.querySelectorAll('.product-status-checkbox').forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                let productId = this.getAttribute('data-product-id');
                let status = this.checked ? 'hidden' : 'published';

                console.log(productId, status);

                // AJAX request to update product status
                $.ajax({
                    url: `{{ route('admin.update.status', '') }}/${productId}`,
                    type: 'POST',  // Use POST, PUT, or PATCH for updates
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status
                    },

                    error: function (xhr) {
                        // Handle errors
                        alert('Error updating product status: ' + xhr.responseText);
                    }
                });
            });
        });

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
                    url: `{{ route('admin.product.destroy', '') }}/${deleteId}`, // Correct dynamic URL with category ID
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
        var stepsSlider2 = document.getElementById('slider-range2');
        var input3 = document.getElementById('minAmount2');
        var input4 = document.getElementById('maxAmount2');
        var inputs2 = [input3, input4];
        noUiSlider.create(stepsSlider2, {
            start: [149, 399],
            connect: true,
            step: 1,
            range: {
                'min': [0],
                'max': 2000
            },

        });

        stepsSlider2.noUiSlider.on('update', function (values, handle) {
            inputs2[handle].value = values[handle];
        });


    </script>
@endpush
