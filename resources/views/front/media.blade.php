@extends('front.layout.app')
@section('content')





    <section class="inner-banner">
        <img src="{{asset('assets/images/innerbg4.jpg')}}" class="w-100" alt="img">
        <div class="container">
            <h2>Media</h2>
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
