@extends('admin.layout.app')
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Categories Add</h3>

                    </div>
                </div>
            </div> <!-- Row end  -->
            <form action="{{route('admin.store.category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-3">
                    <div class="col-lg-4">
                        <div class="sticky-lg-top">
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
                            <div class="card mb-3 publish" style="display: none;"> <!-- Initially hidden -->
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Publish Schedule</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Publish Date</label>
                                            <input type="date" name="schedule_date" class="form-control w-100">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Publish Time</label>
                                            <input type="time" name="schedule_time" class="form-control w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Categories Image Upload</h6>
                                    <small>With event and default file try to remove the image</small>
                                </div>
                                <div class="card-body">
                                    <input type="file" id="dropify-event" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">

                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- Row end  -->
                <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save
                </button>
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

    </script>
@endpush
