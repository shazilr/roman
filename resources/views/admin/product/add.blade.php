@extends('admin.layout.app')
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products Add</h3>
                        <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">
                            Save
                        </button>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <form action="{{route('admin.store.product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-3">
                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Pricing Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control" name="price" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Product Price Old<p style="color: red">(if
                                                    Any)</p></label>
                                            <input type="text" class="form-control" name="old_price">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Product Coupon</label>
                                            <input type="text" class="form-control" name="coupon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Visibility Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="published"
                                               value="published" checked>
                                        <label class="form-check-label" for="published">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="scheduled"
                                               value="scheduled">
                                        <label class="form-check-label" for="scheduled">
                                            Scheduled
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="hidden"
                                               value="hidden">
                                        <label class="form-check-label" for="hidden">
                                            Hidden
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="card mb-3 publish">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Publish Schedule</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Publish Date</label>
                                            <input type="date" class="form-control w-100" name="schedule_date">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Publish Time</label>
                                            <input type="time" class="form-control w-100" name="schedule_time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Size</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="XS" id="sizechek1" name="sizes[]">
                                        <label class="form-check-label" for="sizechek1">
                                            XS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="S" id="sizechek2" name="sizes[]">
                                        <label class="form-check-label" for="sizechek2">
                                            S
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="M" id="sizechek3" name="sizes[]">
                                        <label class="form-check-label" for="sizechek3">
                                            M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="L" id="sizechek4" name="sizes[]">
                                        <label class="form-check-label" for="sizechek4">
                                            L
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="XL" id="sizechek5" name="sizes[]">
                                        <label class="form-check-label" for="sizechek5">
                                            XL
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Tags</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group demo-tagsinput-area">
                                        <div class="form-line">
                                            <input type="text" class="form-control" data-role="tagsinput" name="tags">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Categories</h6>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Categories Select</label>
                                    <select class="form-select" size="3" name="category_id" aria-label="size 3 select example" required>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id ?? ''}}">{{$category->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Inventory Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">SKU</label>
                                            <input type="text" class="form-control" name="sku">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Total Stock Quantity</label>
                                            <input type="text" class="form-control" name="stock" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">

                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Product Identifier URL</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">https://eBazar.com/</span>
                                            <input type="text" class="form-control" name="url">color
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Product Description</label>
                                        <div class="container">
                                            <textarea id="editor" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Images</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Product Images Upload</label>
                                            <small class="d-block text-muted mb-2">Only portrait or square images, 2M
                                                max
                                                and 2000px max-height.</small>
                                            <input type="file" id="input-file-to-destroy" class="dropify" name="image"
                                                   data-allowed-formats="portrait square" data-max-file-size="2M"
                                                   data-max-height="2000" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label w-100">Select Product Color</label>
{{--                                            <input type="color" id="color" name="color">--}}
                                        </div>
                                        <div class="col-md-12">
                                            <div class="product-cart">
                                                <div class="checkout-table table-responsive">
                                                    <div class="container">
                                                        <button id="addRow" type="button" class="btn btn-primary">Add Row</button>

                                                        <table id="productTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                                            <thead>
                                                            <tr>
                                                                <th class="quantity">Color</th>
                                                                <th class="quantity">Quantity</th>
                                                                <th class="quantity">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <!-- Initial Row -->
                                                            <tr>
                                                                <td><input type="text" class="form-control color-input" name="color[]" placeholder="Enter color"></td>
                                                                <td><input type="number" class="form-control quantity-input" name="quantity[]" placeholder="Enter quantity"></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-outline-secondary deleterow">
                                                                        <i class="fa fa-trash text-danger"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>


                                                    </div>

                                                    <!-- Result container -->
{{--                                                    <div id="result"></div>--}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="saveData" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!-- Row end  -->
            </form>
        </div>
    </div>


@endsection
@push('script')
    <script>
        $(document).ready(function () {
            const radios = document.querySelectorAll('input[name="status"]');
            const publishDiv = document.querySelector('.publish'); // Use querySelector for single element
            const scheduleDate = document.querySelector('input[name="schedule_date"]');
            const scheduleTime = document.querySelector('input[name="schedule_time"]');

            // Function to update display based on the radio button's state
            function updatePublishDiv() {
                if (document.getElementById('scheduled').checked) {
                    publishDiv.style.display = 'block'; // Show when 'scheduled' is selected
                    scheduleDate.setAttribute('required','required');
                    scheduleTime.setAttribute('required','required');
                } else {
                    publishDiv.style.display = 'none'; // Hide otherwise
                    scheduleDate.removeAttribute('required');
                    scheduleTime.removeAttribute('required');
                }
            }

            // Initial check when the document is ready
            updatePublishDiv();

            // Add an event listener for the radio button
            radios.forEach(radio => {
                radio.addEventListener('change', updatePublishDiv);
            });
        });

        $(document).ready(function () {
            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });

            // Datatable
            $('#myCartTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [
                        {targets: [-1, -3], className: 'dt-body-right'}
                    ]
                });

            // Delete row functionality
            $('.deleterow').on('click', function () {
                var tablename = $(this).closest('table').DataTable();
                tablename
                    .row($(this).parents('tr'))
                    .remove()
                    .draw();
            });

            // Multiselect
            $('#optgroup').multiSelect({selectableOptgroup: true});
        });

        // Dropify initialization
        $(function () {
            $('.dropify').dropify();

            var drEvent = $('#dropify-event').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                    replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'DÃ©solÃ©, le fichier trop volumineux'
                }
            });
        });
        $(document).ready(function () {
            // Function to add a new row
            $('#addRow').click(function () {
                $('#productTable tbody').append(`
            <tr>
                <td><input type="text" class="form-control color-input" name="color[]" placeholder="Enter color"></td>
                <td><input type="number" class="form-control quantity-input" name="quantity[]" placeholder="Enter quantity"></td>
                <td>
                    <button type="button" class="btn btn-outline-secondary deleterow">
                        <i class="fa fa-trash text-danger"></i>
                    </button>
                </td>
            </tr>
        `);
            });

            // Function to delete a row
            $(document).on('click', '.deleterow', function () {
                $(this).closest('tr').remove();
            });

            // Function to save data in JSON format
            // $('#saveData').click(function () {
            //     let data = [];
            //     $('#productTable tbody tr').each(function () {
            //         let color = $(this).find('.color-input').val();
            //         let quantity = $(this).find('.quantity-input').val();
            //
            //         if (color && quantity) {
            //             data.push({
            //                 color: color,
            //                 quantity: quantity
            //             });
            //         }
            //     });
            //
            //     // Convert the data to JSON format
            //     let jsonData = JSON.stringify(data);

                // For demonstration, show the JSON in the result div
                // $('#result').html('<pre>' + jsonData + '</pre>');

                // Optionally, you can send the jsonData to your server with AJAX here
                /*
                $.ajax({
                    url: '/save-product-colors',
                    method: 'POST',
                    data: {
                        product_data: jsonData
                    },
                    success: function(response) {
                        // handle success
                    }
                });
                */
            // });
        });

    </script>
@endpush
