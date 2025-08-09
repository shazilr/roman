@extends('front.layout.app')
@section('content')




    <section class="inner-banner dtlpg-baner">
        <img src="{{asset('assets/images/innerbg2.jpg')}}" class="w-100" alt="img">
        <div class="container">
            <h2>Checkout</h2>
        </div>
    </section>


    <!-- Begin: Step 1 -->
    <div class="checkOutStyle">
        <div class="container">
            <div class="row">
                <form action="{{route('payment.cart.form')}}" method="post" class="row formStyle">
                    @csrf
                    <div class="col-md-12">
                        <div class="title inner">
                            <h4>Fill the form below to complete your purchase</h4>
                            <p class="checkout-subheading"><span>Already Registered?</span> Click here to <a
                                    href="#">Login now</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>first Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>email address</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <label class="btn btn-danger">{{$message}}</label>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>password</label>
                        <input type="password" class="form-control" name="password" required>
                        @error('password')
                        <label class="btn btn-danger">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="col-md-12">
                        <label>address</label>
                        <textarea rows="4" class="form-control" name="address" required>{{ old('address') }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" value="{{ old('country') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>city</label>
                        <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label>ZIP/POSTAL CODE</label>
                        <input type="text" class="form-control" value="{{ old('zip_code') }}" name="zip_code">
                    </div>
                    <div class="col-md-6">
                        <label>sTATE/pROVINCE</label>
                        <input type="text" class="form-control" name="state" value="{{ old('state') }}" required>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input type="checkbox" id="box-1" name="create_account">
                            <label for="box-1">Create an account for later use</label>
                        </div>
                    </div>
                    {{--                    <div class="col-md-12">--}}
                    {{--                        <div class="checkbox">--}}
                    {{--                            <input type="checkbox" id="box-2">--}}
                    {{--                            <label for="box-2">Ship to the same address mentioned above </label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="col-md-12 title my-5 text-center">
                        <h2 class="section-heading">Order Summary</h2>
                    </div>
                    <div class="col-md-12 order-summery">
                        <div class="row no-gutters">
                            <div class="col-6">
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

                                <span>Subtotal ({{$totalItem ?? ''}} items)</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD {{$totalAmount ?? ''}}.00</strong>
                            </div>
                            <hr class="w-100">
                            <div class="col-6">
                                <span>Shipping fee</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD 0.00</strong>
                            </div>
                            <hr class="w-100">
                            <div class="col-md-12">
                                <div class="applyCoupon d-sm-flex">
                                    <input type="text" class="form-control" placeholder="Enter Voucher Code">
                                    <button class="themeBtn btnStyle border-0 btn-block">Apply</button>
                                </div>
                            </div>
                            <hr class="w-100">
                            <div class="col-6">
                                <span>Total</span>
                            </div>
                            <div class="col-6 text-right">
                                <strong>USD {{$totalAmount ?? ''}}.00</strong>
                            </div>
                            <hr class="w-100">
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="themeBtn border-0 btn-block">proceed to
                                    payment
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END: Step 1 -->
@endsection
