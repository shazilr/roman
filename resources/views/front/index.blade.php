@extends('front.layout.app')
@section('content')

    <div class="preLoader black">
        <img src="{{asset('assets/images/logos.png')}}" alt="img">
    </div>
    <div class="preLoader white"></div>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <section class="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('assets/images/slidebg.webp')}}">
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
                    <div class="slide-inner bg-image" data-background="{{asset('assets/images/slidebg.webp')}}">
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
                                    <h2>After Dark Set</h2>
                                    <ul>
                                        <li>#festival</li>
                                        <li>August 12, 2022</li>
                                        <li>August 24, 2022</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-content">
                                    <figure>
                                        <img src="{{asset('assets/images/videoimg.webp')}}" class="img-fluid" alt="img">
                                    </figure>
                                    <h2>After Dark Set</h2>
                                    <ul>
                                        <li>#festival</li>
                                        <li>August 12, 2022</li>
                                        <li>August 24, 2022</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-content">
                                    <figure>
                                        <img src="{{asset('assets/images/videoimg1.webp')}}" class="img-fluid" alt="img">
                                    </figure>
                                    <h2>Night Train Mix</h2>
                                    <ul>
                                        <li>#festival</li>
                                        <li>August 26, 2024</li>
                                        <li>August 28, 2024</li>
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
            <h2 class="latest-heading" data-aos="fade-up">Latest Releases</h2>
            <div class="row">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest1.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Nella feat. Tommy</h2>
                        <h3>Mattea Dega</h3>
                        <ul>
                            <li>#techno</li>
                            <li>driving / peak time</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest2.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Sunday Mix</h2>
                        <h3>Mattea Dega</h3>
                        <ul>
                            <li>#techno</li>
                            <li>driving / peak time</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest3.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Hypnotic Society</h2>
                        <h3>Mattea Dega</h3>
                        <ul>
                            <li>#techno</li>
                            <li>driving / peak time</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Looking Beyond</h2>
                        <h3>Oden & Fatzo & Baccus</h3>
                        <ul>
                            <li>#drum & bass</li>
                            <li>clubing / warmup</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest5.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Psychedelic Mix</h2>
                        <h3>Oden & Fatzo & Baccus</h3>
                        <ul>
                            <li>#drum & bass</li>
                            <li>clubing / warmup</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest6.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>Rare Footage Mix</h2>
                        <h3>Mattea Dega</h3>
                        <ul>
                            <li>#techno</li>
                            <li>driving / peak time</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="latest-card">
                        <figure><img src="{{asset('assets/images/latest7.webp')}}" class="img-fluid" alt="img"></figure>
                        <h2>The Outer Space Mix</h2>
                        <h3>Oden & Fatzo & Baccus</h3>
                        <ul>
                            <li>#drum & bass</li>
                            <li>clubing / warmup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="festival-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="festival-card">
                        <video id="scrollVideo" muted autoplay loop poster="{{asset('assets/poster-image.webp')}}">
                            <source src="https://rawtracks.qodeinteractive.com/wp-content/uploads/label-home-video.mp4"
                                    type="video/mp4">
                        </video>
                        <a href="#" class="listen-box">
                            <span><i class="far fa-arrow-up"></i></span>
                            <p>Dynamic Festival
                                2024 Official</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="up-comming">
        <div class="container">
            <h2 class="latest-heading" data-aos="fade-up">Explore Upcoming Tour <i class="far fa-arrow-up"></i></h2>
            <div class="row align-items-center">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="upcommingwrap">
                        <h2>20 <span>May</span></h2>
                        <p>Wonderland Beats Festival <br>Graham Donovan</p>
                        <h4>Miami <span>Florida</span></h4>
                        <a href="">Buy Tickets <i class="far fa-arrow-up"></i> </a>
                        <img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid comngimg" alt="">
                    </div>
                    <div class="upcommingwrap">
                        <h2>23<span>apr</span></h2>
                        <p>Dreamland Kingdom Fest<br>Mattea Dega</p>
                        <h4>Paris <span>France</span></h4>
                        <a href="">Sold Out <i class="far fa-arrow-up"></i> </a>
                        <img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid comngimg" alt="">
                    </div>
                    <div class="upcommingwrap">
                        <h2>09 <span>mar</span></h2>
                        <p>Turbosounds Festival 2022 <br>Graham Donovan</p>
                        <h4>Bern <span>Switzerland</span></h4>
                        <a href="">Buy Tickets <i class="far fa-arrow-up"></i> </a>
                        <img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid comngimg" alt="">
                    </div>
                    <div class="upcommingwrap">
                        <h2>28 <span>aug</span></h2>
                        <p>Cherry Blossom Fest 2022 <br>Mattea Dega</p>
                        <h4>Okayama<span>Japan</span></h4>
                        <a href="">Buy Tickets <i class="far fa-arrow-up"></i> </a>
                        <img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid comngimg" alt="">
                    </div>
                    <div class="upcommingwrap">
                        <h2>30 <span>jun</span></h2>
                        <p>Music Heritage Festival ‘22 <br>Markus Weigelt</p>
                        <h4>Brussels<span>Belgium</span></h4>
                        <a href="">Free Entrance <i class="far fa-arrow-up"></i> </a>
                        <img src="{{asset('assets/images/latest4.webp')}}" class="img-fluid comngimg" alt="">
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


    <section class="merch-section">
        <div class="container">
            <h2 class="latest-heading">Exclusive Merch</h2>
            <div class="row align-items-center">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch1.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch2.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                            <h5>New</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch3.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch4.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                            <h5>sale</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch5.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch6.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt marblk">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                            <h5>sale</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="merch-wrap">
                        <figure>
                            <img src="{{asset('assets/images/merch7.webp')}}" class="img-fluid" alt="">
                        </figure>
                        <div class="merch-cntnt">
                            <h3>Hypnotic Album</h3>
                            <p>$57.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="videoplay">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="videoplaybtn">
                        <figure>
                            <img src="{{asset('assets/images/videoplay.webp')}}" class="img-fluid" alt="">
                            <a href="https://youtu.be/D0UnqGm_miA?si=b9Sy8xQDY5yvAyvM" data-fancybox=""><i
                                    class="fas fa-play"></i></a>
                        </figure>
                        <a href="#" class="listen-box">
                            <span><i class="far fa-arrow-up"></i></span>
                            <p>West Palm Beach
                                Offcial<br>
                                Aftermovie 2024</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sign-up-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8" data-aos="fade-up">
                    <div class="sign-cntnt">
                        <h2>JOIN THE METAL MOVEMENT</h2>
                        <form class="newsletterform">
                            <input type="text" class="form-control" placeholder="Your email">

                        </form>
                        <a href="#" class="themeBtn">Sign Up<i class="far fa-arrow-up"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
