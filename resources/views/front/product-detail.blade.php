@extends('front.layout.app')
@section('content')


    <section class="inner-banner">
        <img src="{{asset('assets/images/detail.jpg')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>DETAIL</h2>
        </div>
    </section>




    <section class="Proreview">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="productNav">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="{{asset('data/product_images/'.($product->image ?? ''))}} " class="img-fluid"
                                             alt="Image 1">
                                    </figure>
                                </div>
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg2.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 2">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg3.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 3">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg4.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 4">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
                            </div>
                        </div>
{{--                        <div thumbsSlider="" class="swiper mySwiper">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg1.jpg')}} " class="img-fluid"--}}
{{--                                             alt="Image 1 Thumbnail">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg2.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 2 Thumbnail">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg3.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 3 Thumbnail">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-slide">--}}
{{--                                    <figure>--}}
{{--                                        <img src="{{asset('assets/images/musicpg4.jpg')}}" class="img-fluid"--}}
{{--                                             alt="Image 4 Thumbnail">--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-6 productSIDE">
                    <div class="prodtl-txt">
                        <h2>{{$product->name ?? ''}}</h2>
                        <div class="rating-box">

                            <h5>Customer Reviews:<span>(62)</span></h5>
                            <div class="rating-container">
                                <input type="radio" name="rating" value="5" id="star-5"> <label for="star-5">★</label>
                                <input type="radio" name="rating" value="4" id="star-4"> <label for="star-4">★</label>
                                <input type="radio" name="rating" value="3" id="star-3"> <label for="star-3">★</label>
                                <input type="radio" name="rating" value="2" id="star-2"> <label for="star-2">★</label>
                                <input type="radio" name="rating" value="1" id="star-1"> <label for="star-1">★</label>
                            </div>
                        </div>
                        <ul class="stckst">
                            <li><span>Price:</span>${{$product->price ?? ''}}.00
                            </li>
                        </ul>
                        <p>{!! $product->description ?? '' !!}
                        </p>
                        <ul class="stckst flex-column justify-content-start align-items-start">
                            <li><span>Status:</span>@if($product->stock > 0) In Stock @else <p style="color: red">Out Of
                                    Stock</p> @endif</li>
                        </ul>
                        <div class="quantitySec">
                            <h4>Quantity</h4>
                            <input type="hidden" value="{{$product->id}}" id="productId">
                            <input type="hidden" value="{{$product->name}}" id="productName">
                            <input type="hidden" value="{{$product->price}}" id="productPrice">
                            <ul>
                                <li>
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" id="quantity" value="1" readonly>
                                        <span class="plus">+</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="cardbutton">
                                <a href="javascript:void(0);" id="addToCartBtn" class="themeBtn">Add To Cart</a>
                            </div>

                        </div>



                    </div>

                </div>
            </div>
            <div class="row reviewSec">
                <h2 class="sectionHeading">Product Reviews</h2>
                <div class="col-12">
                    <div class="reviewImg">
                        <figure>
                            <img src="images/quote11.webp" alt="">
                        </figure>
                        <div class="content-wraper">
                            <div class="d-flex align-items-center">
                                <h3>Tahir Rasheed</h3>
                                <span><i class="fas fa-calendar-alt"></i> 04-08-2022</span>
                            </div>
                            <div class="star-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>I’ve worked with many die makers in the past, but none have been as reliable as this team.
                                My custom dies were completed on time, and the fit and finish were perfect. I’ll definitely be returning for future projects.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="reviewImg">
                        <figure>
                            <img src="images/quote11.webp" alt="">
                        </figure>
                        <div class="content-wraper">
                            <div class="d-flex align-items-center">
                                <h3>Mian Zulfiqar</h3>
                                <span><i class="fas fa-calendar-alt"></i> 04-08-2022</span>
                            </div>
                            <div class="star-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"What I appreciated most was their clear communication and willingness to answer my questions. They walked me through every
                                step of the die-making process and ensured the final product met my needs. Fantastic experience!.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="reviewImg">
                        <figure>
                            <img src="images/quote11.webp" alt="">
                        </figure>
                        <div class="content-wraper">
                            <div class="d-flex align-items-center">
                                <h3>Zaheer Ahmed</h3>
                                <span><i class="fas fa-calendar-alt"></i> 04-08-2022</span>
                            </div>
                            <div class="star-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>I ordered a custom rubber die and was blown away by the result. Not only was it delivered
                                earlier than promised, but the durability and accuracy exceeded my expectations. Exceptional work</p>
                        </div>
                    </div>
                    <hr>
                    <h2 class="sectionHeading">Comment</h2>
                    <textarea placeholder="Comment"></textarea>
                    <a href="#" class="themeBtn mt-3">comment</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')
    <script>
        $(document).ready(function () {
            // Increase or decrease quantity
            $('.plus').click(function () {
                let quantity = parseInt($('#quantity').val());
                $('#quantity').val(quantity ++);
            });

            $('.minus').click(function () {
                let quantity = parseInt($('#quantity').val());
                if (quantity > 1) {
                    $('#quantity').val(quantity --);
                }
            });

            let getProductId = parseInt($('#productId').val());
            let getProductName = $('#productName').val().toString();
            let getProductPrice = parseInt($('#productPrice').val());
            // AJAX request for Add to Cart
            $('#addToCartBtn').click(function () {
                let quantity = $('#quantity').val();

                $.ajax({
                    url: '{{ route("cart.add") }}', // Your route for adding to cart
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: getProductId,
                        quantity: quantity,
                        name: getProductName,
                        price: getProductPrice
                    },
                    success: function (response) {
                        showSuccessMessage();
                        updateCartCount();

                    },
                    error: function (xhr) {
                        showErrorMessage();
                    }
                });
            });

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
            function showSuccessMessage() {
                toastr.success('Product added to cart successfully');
            }

            function showErrorMessage() {
                toastr.error('Something went wrong!');
            }

        });

    </script>
@endpush
