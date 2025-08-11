@extends('front.layout.app')
@section('content')


    <style>
        .alert-message {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: green;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 1000;
            text-align: center;
        }


    </style>



    <section class="inner-banner">
        <img src="{{asset('assets/images/latest2.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>CART</h2>
        </div>
    </section>


    <!-- Begin: Step 2 -->
    <div class="checkOutStyle">
        <div id="alert-message" class="alert-message" style="display: none;">Update successful!</div>


        <div class="container">
            <div class="checkOutStyle">
                <!-- Alert Message -->
                <strong id="alert-message" style="display: none; color: green; text-align: center;"></strong>

                <div class="container">
                    @if(isset(\Illuminate\Support\Facades\Session::all()['cart']) && count(\Illuminate\Support\Facades\Session::all()['cart']) > 0)
                        @foreach(\Illuminate\Support\Facades\Session::all()['cart'] as $cart)
                            @php
                                $product = \App\Models\Product::find($cart['product_id']);
                            @endphp
                            <div class="row cartItemCard" id="cart-item-{{ $cart['product_id'] }}">
                                <div class="col-sm-2">
                                    <img src="{{ asset('data/product_images/'.($product->image ?? '')) }}" alt="">
                                </div>
                                <div class="col-md-5 col-sm-4">
                                    <h4>{{ $cart['name'] ?? '' }}</h4>
                                </div>
                                <div class="col-sm-2">
                                    <strong class="price">
                                        <span
                                            id="quantityShown-{{ $cart['product_id'] }}">{{ $cart['quantity'] ?? '' }}</span>
                                        × ${{ $cart['price'] ?? '' }}.00
                                    </strong>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="proCounter">
                                        <span class="minus" data-id="{{ $cart['product_id'] }}">-</span>
                                        <input type="text" id="quantity-{{ $cart['product_id'] }}"
                                               value="{{ $cart['quantity'] }}" readonly/>
                                        <span class="plus" data-id="{{ $cart['product_id'] }}">+</span>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <a href="#" class="delete" data-id="{{ $cart['product_id'] }}"><i
                                            class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row emptyCartMessage">
                            <div class="col-sm-12">
                                <p>Your cart is currently empty.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @if(isset(\Illuminate\Support\Facades\Session::all()['cart']) && count(\Illuminate\Support\Facades\Session::all()['cart']) > 0)
                        <a href="{{ route('checkout.front') }}" class="themeBtn border-0 btn-block">Proceed to
                            Checkout</a>
                    @endif

                    <ul class="shipping-billing-col">
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> Lorem Lipsum <a href="" class="edit">edit</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone"></i> <a href="tel:1234567">1234567</a> <a href="#"
                                                                                                 class="edit">edit</a>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i><a
                                    href="mailto:demo@gmail.com">demo@gmail.com</a><a href="#"
                                                                                      class="edit">edit</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Step 2 -->

@endsection
@push('script')

    <script>
        $(document).ready(function () {
            // Increment quantity

            // Remove any previously attached event listeners before adding new ones
            $('.plus').off('click').on('click', function () {
                let productId = $(this).data('id');
                let quantityInput = $('#quantity-' + productId);
                let currentQuantity = parseInt(quantityInput.val());

                // Send AJAX to update the cart without manually incrementing in the frontend
                updateCart(productId, currentQuantity + 1);  // Pass the incremented value to the backend
            });

            // Decrement quantity
            $('.minus').off('click').on('click', function () {
                let productId = $(this).data('id');
                let quantityInput = $('#quantity-' + productId);
                let quantityElement = $('#quantityShown-' + productId);
                let currentQuantity = parseInt(quantityInput.val());

                // Ensure the quantity does not go below 1
                if (currentQuantity > 1) {
                    currentQuantity -= 1;
                    quantityInput.val(currentQuantity);
                    quantityElement.text(currentQuantity);

                    // Send AJAX to update the cart
                    updateCart(productId, currentQuantity);
                }
            });

            // AJAX request to update the cart
            function updateCart(productId, quantity) {
                $.ajax({
                    url: '{{ route("cart.update") }}', // Adjust to your route
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                        quantity: quantity
                    },
                    success: function (response) {
                        console.log(response);
                        let quantityElement = $('#quantityShown-' + productId);
                        let quantityInput = $('#quantity-' + productId);
                        quantityElement.text(response.updatedQuantity);  // Update displayed quantity
                        quantityInput.val(response.updatedQuantity);  // Update input value
                        toastr.success('Updated Successfully');
                    },
                    error: function (xhr) {
                        toastr.error('Something went wrong!');
                    }
                });
            }
            $('.delete').click(function () {
                let productId = $(this).data('id');
                deleteCart(productId);
            });


            function deleteCart(productId) {
                $.ajax({
                    url: '{{ route("cart.delete") }}', // Adjust to your route
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,

                    },
                    success: function (response) {
                        if (response.isCartEmpty) {
                            // If the cart is empty, hide all items and show an empty cart message
                            $('.cartItemCard').remove();
                            $('.proceed').remove();
                            location.reload();

                        } else {
                            // Remove only the deleted product from the UI
                            $('#cart-item-' + productId).remove();
                            updateCartCount();
                            toastr.success(response.message);
                        }
                    },
                    error: function (xhr) {
                        toastr.error('Something went wrong!');
                    }
                });
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

            function showSuccessMessage() {
                toastr.success('Product added to cart successfully');
            }

            function showErrorMessage() {
                toastr.error('Something went wrong!');
            }
        });

    </script>
@endpush
