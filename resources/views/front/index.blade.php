@extends('front.layout.app')
@section('content')
    <div class="preLoader black"
         style="display:flex;align-items:center;justify-content:center;height:100vh;width:100%;background:black;">
        <img src="{{ asset('assets/images/logos.png') }}"
             alt="img"
             style="max-width:100%;height:auto;">
    </div>


    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <section class="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('assets/images/videoslider2.webp')}}">
                        <div class="container-fluid">
                            <a href="#" class="listen-box">
                                <span><i class="far fa-arrow-up"></i></span>
                                <p>Buy Now – Your Essentials, Delivered</p>
                            </a>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="slideContent slideOne">
                                        <h1>INDUS INDUSTRIAL ACCESSORIES</h1>
                                        <p>Welcome to the IIA, Built for Strength, Designed for Precision</p>
                                        <a href="#" class="themeBtn">Read More<i class="far fa-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('assets/images/slidebg.webp')}}">
                        <div class="container-fluid">
                            <a href="#" class="listen-box">
                                <span><i class="far fa-arrow-up"></i></span>
                                <p>    Add this accessory to your cart now for fast delivery and secure checkout.</p>
                            </a>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="slideContent slideOne">
                                        <h1>INDUS INDUSTRIAL ACCESSORIES </h1>
                                        <p> Accessories You Can Depend On</p>
                                        <a href="#" class="themeBtn">Read More<i class="far fa-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('assets/images/latest5.webp')}}">
                        <div class="container-fluid">
                            <a href="#" class="listen-box">
                                <span><i class="far fa-arrow-up"></i></span>
                                <p>Buy Now – Premium Accessories at Your Doorstep</p>
                            </a>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="slideContent slideOne">
                                        <h1>INDUS INDUSTRIAL ACCESSORIES </h1>
                                        <p> Engineering Excellence for Every Industry</p>
                                        <a href="#" class="themeBtn">Read More<i class="far fa-arrow-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
            <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
        </div>
    </section>

    <section class="artist-main py-5" style="background-color: #000;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">

                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h2 class="fw-bold" style="font-size: 2.2rem; color: #fff;">Our Projects</h2>
                        <div style="width: 80px; height: 3px; background-color: #ffcc00; margin: 12px auto;"></div>
                        <p style="color: #ccc; font-size: 1rem; max-width: 700px; margin: auto;">
                            Precision-engineered solutions designed for unmatched accuracy and durability.
                        </p>
                    </div>

                    <!-- Project Grid -->
                    <div class="row g-4 justify-content-center">

                        <!-- Project Item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="card border-0 bg-dark h-100 text-center" style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                <div class="overflow-hidden">
                                    <img src="{{asset('assets/images/artist1.webp')}}" class="img-fluid w-100" alt="Progressive Dies" style="transition: transform 0.4s ease; height: 280px; object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <h4 class="fw-bold mb-2" style="color:#fff;">PROGRESSIVE DIES</h4>
                                    <p style="color:#bbb; font-size: 0.95rem;">
                                        Perform multiple operations in a single press cycle for maximum efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Project Item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="card border-0 bg-dark h-100 text-center" style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                <div class="overflow-hidden">
                                    <img src="{{asset('assets/images/artist2.webp')}}" class="img-fluid w-100" alt="Custom Tooling" style="transition: transform 0.4s ease; height: 280px; object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <h4 class="fw-bold mb-2" style="color:#fff;">CUSTOM TOOLING</h4>
                                    <p style="color:#bbb; font-size: 0.95rem;">
                                        Tailored die-making solutions to meet your specific production needs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Project Item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="card border-0 bg-dark h-100 text-center" style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                                <div class="overflow-hidden">
                                    <img src="{{asset('assets/images/artist3.webp')}}" class="img-fluid w-100" alt="Die Repair" style="transition: transform 0.4s ease; height: 280px; object-fit: cover;">
                                </div>
                                <div class="p-4">
                                    <h4 class="fw-bold mb-2" style="color:#fff;">DIE REPAIR</h4>
                                    <p style="color:#bbb; font-size: 0.95rem;">
                                        Fast repair services ensuring uninterrupted production & tool life extension.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Info Highlight -->
                    <div class="mt-5 p-4 rounded text-center" style="background-color: #111; border-left: 4px solid #ffcc00; max-width: 900px; margin: auto;">
                        <h3 style="line-height: 1.6; font-size: 1.35rem; font-weight: bold; color:#fff;">
                            FOCUSES ON DEVELOPING DIES FOR CUTTING MATERIALS INTO
                            <span style="color: #ffcc00;">FLAT SHAPES</span> OR
                            <span style="color: #ffcc00;">MAKING HOLES</span> WITH
                            <span style="color: #ffcc00;">HIGH ACCURACY</span>.
                        </h3>
                        <p style="font-weight: normal; color: #bbb; margin-top: 10px;">
                            Common in sheet metal production, demanding exact tolerances & exceptional hardness.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Hover Effect -->
    <style>
        .card:hover img {
            transform: scale(1.08);
        }
        .card:hover {
            box-shadow: 0px 6px 20px rgba(255,255,255,0.1);
        }
    </style>


    <section class="video-main">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="swiper videoSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-content">
                                    <figure>
                                        <img src="{{asset('assets/images/videoimg.webp')}}" class="img-fluid" alt="img">
                                        <a data-fancybox=""
                                           href="https://www.youtube.com/watch?v=cKjdTA91xPQ&amp;feature=youtu.be">
                                            <div><i class="fas fa-play"></i></div>
                                        </a>
                                    </figure>
                                    <h2>Rubber Mixing Mill </h2>
                                    <ul>
                                        <li>for mixing raw rubber </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-content">
                                    <figure>
                                        <img src="{{asset('assets/images/12.jpg')}}" class="img-fluid" alt="img">
                                    </figure>
                                    <h2>Rubber Vulcanizing Press </h2>
                                    <ul>
                                        <li>for curing rubber </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-content">
                                    <figure>
                                        <img src="{{asset('assets/images/www.jpg')}}" class="img-fluid" alt="img">
                                    </figure>
                                    <h2>CNC Milling Machine </h2>
                                    <ul>
                                        <li> for machining die cavities.</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="latest-main">
        <div class="container">
            <h2 class="latest-heading" data-aos="fade-up">Newest Rubber Die Technologies</h2>
            <div class="row">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest1.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Ultrafast Laser-Assisted Die Shaping</h2>


                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest2.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Guill Rotary Die with Enhanced Profile Control</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest3.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Advanced Polymer Blends with Smart Recovery</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Additive-Manufactured (3D-Printed) Die Inserts</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest5.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2> Self-Healing Rubber Die Coatings</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest6.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Embedded Sensors for Predictive Maintenance</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest6.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Embedded Sensors for Predictive Maintenance</h2>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest7.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Ultrafast Laser-Assisted Die Shaping</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="up-comming">
        <div class="container">
            <h2 class="latest-heading" data-aos="fade-up">Completed Rubber Die Orders <i class="far fa-arrow-up"></i></h2>
            <div class="row align-items-center">
                <div class="col-md-12" data-aos="fade-up">

                    <div class="upcommingwrap">
                        <h2>May 2021</h2>
                        <p>High-Precision Rubber Die</p>
                        <h4>Pakistan <span>Fasilabad</span></h4>

                    </div>

                    <div class="upcommingwrap">
                        <h2>Apr 2022</h2>
                        <p>Custom Polymer Die Set</p>
                        <h4>Pakistan  <span>Multan</span></h4>

                    </div>

                    <div class="upcommingwrap">
                        <h2>Mar 2020</h2>
                        <p>Die Engineering Project</p>
                        <h4>Pakistan  <span>Lahore</span></h4>

                    </div>

                    <div class="upcommingwrap">
                        <h2>Aug 2024</h2>
                        <p>Durable Rubber Die Coating</p>
                        <h4>Pakistan  <span>Karachi</span></h4>

                    </div>

                    <div class="upcommingwrap">
                        <h2> Jun 2023</h2>
                        <p>3D-Printed Die Inserts </p>
                        <h4>Pakistan  <span>Sheikh-u-pura</span></h4>

                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="videoimgSec">
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
    </section>


    <section class="merch-section py-5" style="background-color: #000;">
        <div class="container">
            <h2 class="latest-heading text-white mb-5" data-aos="fade-up">
                Premium Rubber Dies
            </h2>
            <div class="row g-4">
                @php
                    $dies = [
                        ['img' => 'merch1.webp', 'title' => 'Compression Molding Dies', 'tag' => '', 'price' => '$57.00'],
                        ['img' => 'merch2.webp', 'title' => 'Injection Molding Dies', 'tag' => 'New', 'price' => '$57.00'],
                         ['img' => 'merch7.webp', 'title' => 'Custom Rubber Dies', 'tag' => '', 'price' => '$57.00'],
                        ['img' => 'merch3.webp', 'title' => 'Extrusion Dies', 'tag' => '', 'price' => '$57.00'],
                        ['img' => 'merch4.webp', 'title' => 'Transfer Molding Dies', 'tag' => 'Sale', 'price' => '$57.00'],
                        ['img' => 'merch5.webp', 'title' => 'Hot Runner Rubber Dies', 'tag' => '', 'price' => '$57.00'],
                        ['img' => 'merch6.webp', 'title' => 'Cold Runner Rubber Dies', 'tag' => 'Sale', 'price' => '$57.00'],
                          ['img' => 'merch5.webp', 'title' => 'Hot Runner Rubber Dies', 'tag' => '', 'price' => '$57.00'],

                    ];
                @endphp

                @foreach($dies as $die)
                    <div class="col-md-3 col-sm-6" data-aos="fade-up">
                        <div class="merch-wrap p-3 text-center rounded shadow-lg" style="background-color: #111; transition: 0.3s;">
                            <figure class="mb-3">
                                <img src="{{asset('assets/images/' . $die['img'])}}" class="img-fluid rounded" alt="{{ $die['title'] }}">
                            </figure>
                            <div class="merch-cntnt text-white">
                                <h3 class="h5 fw-bold">{{ $die['title'] }}</h3>
                                <p class="text-warning fw-semibold mb-1">{{ $die['price'] }}</p>
                                @if($die['tag'])
                                    <span class="badge bg-danger">{{ $die['tag'] }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="image-display">
        <div style="position: relative; display: inline-block; width: 100%;">
            <figure style="margin: 0;">
                <img src="{{asset('assets/images/latest3.webp')}}"
                     class="img-fluid"
                     alt="Rubber Die Showcase"
                     style="width: 100%; height: 350px; object-fit: cover;">
            </figure>
            <div style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 15px 25px;
            border-radius: 8px;
        ">
                <h2 style="margin: 0; font-size: 28px; font-weight: bold;">
                    Premium Rubber Dies Showcase 2024
                </h2>
            </div>
        </div>
    </section>




@endsection
