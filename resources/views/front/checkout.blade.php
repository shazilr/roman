@extends('front.layout.app')
@section('content')

    <section class="inner-banner">
        <img src="{{asset('assets/images/latest5.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>CHECKOUT</h2>
        </div>
    </section>

    <div class="checkOutStyle">
        <div class="container">
            <div class="row">
                <!-- Single form -->
                <form action="{{ route('payment.cart.form') }}" method="POST" class="row formStyle">

                @csrf

                <!-- Title -->
                    <div class="col-md-12">
                        <div class="title inner">
                            <h4>Fill the form below to complete your purchase</h4>
                            <p class="checkout-subheading">
                                <span>Already Registered?</span>
                                Click here to <a href="#">Login now</a>
                            </p>
                        </div>
                    </div>

                    <!-- Full Name -->
                    <div class="col-md-6">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="full_name"
                               value="{{ old('full_name') }}" required>
                        @error('full_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') }}" required>
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone"
                               value="{{ old('phone') }}" required>
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                        @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="col-md-12">
                        <label>Full Address</label>
                        <textarea rows="4" class="form-control" name="address" required>{{ old('address') }}</textarea>
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

{{--                    <!-- WhatsApp -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <label>WhatsApp Number</label>--}}
{{--                        <input type="text" class="form-control" name="whatsapp_number"--}}
{{--                               placeholder="+923492917821" value="{{ old('whatsapp_number') }}" required>--}}
{{--                    </div>--}}

                    <!-- Create Account -->
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input type="checkbox" id="box-1" name="create_account">
                            <label for="box-1">Create an account for later use</label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="col-md-12 mt-2">
                        <div class="checkbox">
                                <input type="checkbox" id="cod" name="payment_method" value="cod" checked>
                            <label for="cod">Cash on Delivery (COD)</label>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="col-md-12 title my-5 text-center">
                        <h2 class="section-heading">Order Summary</h2>
                    </div>

                    <div class="col-md-12 order-summery">
                        <div class="row no-gutters">
                            @php
                                use Illuminate\Support\Facades\Session;
                                $totalItem = 0;
                                $totalAmount = 0;

                                if(Session::has('cart')) {
                                    foreach (Session::get('cart') as $cart) {
                                        $totalItem += $cart['quantity'];
                                        $totalAmount += $cart['price'] * $cart['quantity'];
                                    }
                                }
                            @endphp

                            <div class="col-6">
                                <span>Subtotal ({{ $totalItem }}) items</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD {{ number_format($totalAmount, 2) }}</strong>
                            </div>

                            <hr class="w-100">

                            <div class="col-6">
                                <span>Shipping Fee</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD 0.00</strong>
                            </div>

                            <div class="col-6">
                                <span>Total</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD {{ number_format($totalAmount, 2) }}</strong>
                            </div>

                            <hr class="w-100">

                            <!-- Proceed Button -->
                            <div class="col-md-12 mt-4">



                                <button type="submit" class="themeBtn border-0 btn-block">
                                    Proceed to Payment
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
