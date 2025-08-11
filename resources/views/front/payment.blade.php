@extends('front.layout.app')
@section('content')






    <section class="inner-banner">
        <img src="{{asset('assets/images/latest1.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>CHECKOUT</h2>
        </div>
    </section>



    <!-- Begin: Step 2 -->
    <div class="checkOutStyle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="row formStyle" action="{{route('payment.cart.form')}}" method="post">
                        @csrf
                        <div class="col-md-12 mb-4 text-center">
                            <figure class="paymnt-img"><img src="{{asset('assets/images/card-img.png')}}" alt=""></figure>
                        </div>
                        <div class="col-md-6">
                            <label>card number</label>
                            <input type="number" class="form-control" placeholder="card number" name="card_number" required>
                        </div>
                        <div class="col-md-6">
                            <label>name on card</label>
                            <input type="text" class="form-control" placeholder="card title" name="name_on_card" required>
                        </div>
                        <div class="col-md-4">
                            <label>expiration date</label>
                            <input type="date" class="form-control" placeholder="mm/yy" name="expiration_date" required>
                        </div>
                        <div class="col-md-2">
                            <label>cvv</label>
                            <input type="number" class="form-control" name="cvv" required>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox mt-4">
                                <input type="checkbox" id="box-2" name="save_card_data" >
                                <label for="box-2">
                                    <h5>save card</h5>information is encrypted and securely stored.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="themeBtn border-0 btn-block">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- END: Step 2 -->

@endsection
