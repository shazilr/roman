@extends('front.layout.app')
@section('content')





    <section class="inner-banner">
        <img src="{{asset('assets/images/videoslider2.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>PRODUCT DETAIL</h2>
        </div>
    </section>


    <section class="merch-section merch-page">
        <div class="container">
            <div class="row align-items-center">
                @foreach($products as $product)
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <a href="{{route('merch.detail.front',$product->id)}}"><img src="{{asset('data/product_images/'.($product->image ?? ''))}}" class="img-fluid" alt=""></a>
                        </figure>
                        <div class="merch-cntnt">
                            <h3>{{$product->name ?? ''}}</h3>
                            <p>${{$product->price ?? ''}}.00</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
