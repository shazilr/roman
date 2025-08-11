@extends('front.layout.app')
@section('content')





    <section class="inner-banner">
        <img src="{{asset('assets/images/artist3.webp')}}"
             class="w-100"
             alt="img"
             style="height:300px; object-fit:cover; width:100%;">
        <div class="container">
            <h2>GALLERY</h2>
        </div>
    </section>




    <section class="videoimgSec media-page">
        <div class="swiper-container videoimgSlider" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider1.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider2.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider3.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider4.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-container videoimgSlider" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider4.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider3.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider2.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="instaWrap">
                        <img src="{{asset('assets/images/videoslider1.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
