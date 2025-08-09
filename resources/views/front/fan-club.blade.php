@extends('front.layout.app')
@section('content')





    <section class="inner-banner">
        <img src="{{asset('assets/images/innerbg6.jpg')}}" class="w-100" alt="img">
        <div class="container">
            <h2>FAN CLUB</h2>
        </div>
    </section>



    <section class="band-page fan-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <figure class="bandpg-img">
                        <img src="{{asset('assets/images/fanimg.jpg')}}" class="img-fluid" alt="img">
                    </figure>
                </div>
                <div class="col-md-5">
                    <div class="bandpg-content pl-5">
                        <h2>Join the Steel Vanguard</h2>
                        <p>Become a Lordz Of Steel Vanguard member to unlock exclusive content, limited edition
                            recordings, and one-of-a-kind merchandise. Enjoy presale tickets for shows, exclusive
                            downloads, and discounts on merch. Access exclusive contests for unique prizes, including
                            meet and greets with the band. Your support fuels our passion, and we can’t wait to give
                            back to our cherished fans!</p>
                        <ul class="soical-band">
                            <li><a href="#"><i class="fab fa-spotify"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-soundcloud"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        </ul>
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
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
