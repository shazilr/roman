{{--@extends('front.layout.app')--}}
{{--@section('content')--}}







@extends('front.layout.app')

@section('content')
    <section class="inner-banner">
        <img src="{{asset('assets/images/latest1.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>PAYMENT</h2>
        </div>
    </section>
    <div class="checkOutStyle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Main Payment Form -->
                    <form class="row formStyle" action="{{ route('payment.cart.form') }}" method="POST">
                    @csrf

                    <!-- Card Image -->
                        <div class="col-md-12 mb-4 text-center">
                            <figure class="paymnt-img">
                                <img src="{{ asset('assets/images/card-img.png') }}" alt="Card Payment">
                            </figure>
                        </div>

                        <!-- Card Number -->
                        <div class="col-md-6">
                            <label>Card Number</label>
                            <input type="number" class="form-control" placeholder="Enter card number" name="card_number" required>
                        </div>

                        <!-- Name on Card -->
                        <div class="col-md-6">
                            <label>Name on Card</label>
                            <input type="text" class="form-control" placeholder="Enter name on card" name="name_on_card" required>
                        </div>

                        <!-- Expiration Date -->
                        <div class="col-md-4">
                            <label>Expiration Date</label>
                            <input type="month" class="form-control" name="expiration_date" required>
                        </div>

                        <!-- CVV -->
                        <div class="col-md-2">
                            <label>CVV</label>
                            <input type="number" class="form-control" name="cvv" required>
                        </div>

                        <!-- Save Card Checkbox -->
                        <div class="col-md-6">
                            <div class="checkbox mt-4">
                                <input type="checkbox" id="box-2" name="save_card_data">
                                <label for="box-2">
                                    <h5>Save Card</h5>
                                    Information is encrypted and securely stored.
                                </label>
                            </div>
                        </div>

                        <!-- Order Info -->
                        <div class="col-md-12 mt-4">
                            <h4>Complete Your Payment</h4>
                            <p>Order ID: {{ session('order_id') }}</p>
                            <button type="submit" class="btn btn-primary">Pay Now</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection





{{--    <form id="payment-form">--}}
{{--    @csrf--}}
{{--    <!-- Your form fields for first_name, last_name, email, etc. -->--}}

{{--        <div id="card-element"><!--Stripe.js injects the Card Element--></div>--}}
{{--        <button id="submit">Pay Now</button>--}}
{{--    </form>--}}

{{--    <script src="https://js.stripe.com/v3/"></script>--}}
{{--    <script>--}}
{{--        const stripe = Stripe("{{ env('STRIPE_KEY') }}");--}}
{{--        const elements = stripe.elements();--}}
{{--        const card = elements.create('card');--}}
{{--        card.mount('#card-element');--}}

{{--        const form = document.getElementById('payment-form');--}}

{{--        form.addEventListener('submit', async (event) => {--}}
{{--            event.preventDefault();--}}

{{--            // First, create PaymentIntent from backend--}}
{{--            let formData = new FormData(form);--}}
{{--            let createIntent = await fetch("{{ route('payment.intent') }}", {--}}
{{--                method: "POST",--}}
{{--                body: formData--}}
{{--            });--}}
{{--            let intentResponse = await createIntent.json();--}}

{{--            const { paymentIntent, error } = await stripe.confirmCardPayment(intentResponse.clientSecret, {--}}
{{--                payment_method: {--}}
{{--                    card: card,--}}
{{--                    billing_details: {--}}
{{--                        name: formData.get('first_name') + " " + formData.get('last_name'),--}}
{{--                        email: formData.get('email')--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}

{{--            if (error) {--}}
{{--                alert(error.message);--}}
{{--            } else if (paymentIntent.status === 'succeeded') {--}}
{{--                // Store order in backend--}}
{{--                let orderResponse = await fetch("{{ route('payment.storeOrder') }}", {--}}
{{--                    method: "POST",--}}
{{--                    headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}", "Content-Type": "application/json" },--}}
{{--                    body: JSON.stringify({ payment_status: 'success' })--}}
{{--                });--}}
{{--                let result = await orderResponse.json();--}}
{{--                if (result.success) {--}}
{{--                    window.location.href = "{{ route('thankyou') }}";--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}









{{--    <!-- Begin: Step 2 -->--}}

    <!-- END: Step 2 -->

{{--@endsection--}}
