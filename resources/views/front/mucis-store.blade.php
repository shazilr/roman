@extends('front.layout.app')
@section('content')



    <section class="inner-banner">
        <img src="{{asset('assets/images/videoslider3.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>SHOP</h2>
        </div>
    </section>


    <div class="success-notification" style="display:none;">
        <p id="showMessage" style="color: green">Product added to cart successfully</p>
    </div>
    <div class="error-notification" style="display:none;">
        <p id="errorMessage" style="color: red">Something went wrong!</p>
    </div>


    <section class="music-page">
        <div class="container">
            <div class="row">
                @foreach($products as $music)
                    <div class="col-md-4">
                        <div class="musicpg-card">
                            <figure>
                                <img src="{{asset('data/product_images/'.($music->image ?? ''))}}" class="img-fluid" alt="img">
                                <a href="#"><i class="far fa-play"></i></a>
                            </figure>
                            <div class="musicpg-content">
                                <h2>{{$music->category->name ?? ''}}</h2>
                                <h3>{{$music->name ?? ''}}</h3>
                                <p>{!! $music->description ?? '' !!}</p>
                                <div class="d-flex">
                                    <a href="javascript:void(0);"
                                       class="addToCartBtn"
                                       data-id="{{$music->id}}"
                                       data-name="{{$music->name}}"
                                       data-price="{{$music->price}}">
                                        <i class="far fa-cart-arrow-down"></i> Add to cart
                                    </a>
                                    <span>${{$music->price ?? ''}}.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-md-12 text-center">
                    <a href="#" class="themeBtn">View More<i class="far fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>





@endsection
@push('script')
    <script>


        $('.addToCartBtn').click(function () {
            let productId = $(this).data('id');
            let productName = $(this).data('name');
            let productPrice = $(this).data('price');

            $.ajax({
                url: '{{ route("cart.add") }}', // Your route for adding to cart
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId,
                    quantity: 1,
                    name: productName,
                    price: productPrice
                },
                success: function (response) {
                    updateCartCount();
                    showSuccessMessage();
                },
                error: function (xhr) {
                    showErrorMessage();
                }
            });
        });

        function showSuccessMessage() {
            toastr.success('Product added to cart successfully');
        }

        function showErrorMessage() {
            toastr.error('Something went wrong!');
        }

        function updateCartCount() {
            $.ajax({
                url: '{{ route("cart.count") }}', // Your route for getting cart count
                method: 'GET',
                success: function (count) {
                    // Update the badge with the new count
                    $('.badge').text(count);
                }
            });
        }
    </script>
@endpush
