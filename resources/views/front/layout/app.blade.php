<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/custom.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>


    <!-- Begin: Header -->
    <style>
        .search-icon {
            position: relative;
            display: inline-block;
        }

        .badge {
            position: absolute;
            top: 0px;
            right: -7px;
            width: 14px;
            height: 13px;
            background-color: red;
            border-radius: 45%;
        }

    </style>
    <header class="">
        <div class="main-navigate">
            <div class="an-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="navbar-brand" href="{{route('home.front')}}">
                            <img src="{{asset('assets/images/logo.webp')}}" alt="img">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home.front')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('the-band.front')}}">THE BAND</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">MUSIC</a>
                                    <ul>
                                        <li><a href="{{route('music-store.front')}}">MUSIC STORE</a></li>
                                        <li><a href="{{route('discography.front')}}">DISCOGRAPHY</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('media.front')}}">MEDIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('merch.front')}}">MERCH</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('fan-club.front')}}">FAN CLUB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link search-icon" href="{{ route('cart.front') }}">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span
                                            class="badge">@if(isset(\Illuminate\Support\Facades\Session::all()['cart']) && count(\Illuminate\Support\Facades\Session::all()['cart']) > 0){{ count(session('cart')) }}@endif</span>

                                    </a>
                                </li>

                            </ul>
                            <div class="form-inline">
                                <a href="#search"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</head>
<body>
<!-- END: Header -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
@yield('content')

<!-- Begin: Footer -->
<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 text-center">
                <img src="{{asset('assets/images/ftrlogo.webp')}}" class="img-fluid" alt="">
                <ul class="navftr">
                    <li><a href="">Home </a></li>
                    <li><a href=""> About </a></li>
                    <li><a href=""> Music </a></li>
                    <li><a href=""> Merch</a></li>
                    <li><a href=""> Tour Dates</a></li>
                    <li><a href=""> Fan club </a></li>
                    <li><a href=""> Blog </a></li>
                    <li><a href=""> Contact</a></li>
                </ul>
                <ul class="navftr">
                    <li><a href="tel:(330) 548-6928">(330) 548-6928</a></li>
                    <li><a href="mailto:info@lordzofsteel.com">info@lordzofsteel.com</a></li>
                </ul>
                <ul class="ftrlinks">

                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="far fa-cloud"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>

            </div>
        </div>
        <div class="copyRight">
            <div class="container">
                <div class="cartWraps">
                    <p>© 2024 lordzofsteel.com, All rights reserved</p>
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END: Footer -->

<div id="search">
    <button class="close" type="button">×</button>
    <form>
        <input placeholder="SEARCH" type="search" value="">
        <div class="srch-btn">
            <a href="#" class="themeBtn">Search</a>
        </div>
    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
@stack('script')

</body>

</html>
