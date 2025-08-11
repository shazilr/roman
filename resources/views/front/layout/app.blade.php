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
                        <a class="navbar-brand" href="{{route('home.front')}}" style="display:flex; align-items:center;">
                            <img src="{{asset('assets/images/logos.png')}}"
                                 alt="Logo"
                                 style="max-height:60px; height:auto; width:auto; object-fit:contain; display:block;">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation"
                                style="border-color:white;">
                            <span class="navbar-toggler-icon" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255,255,255, 1)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home.front')}}">HOME<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('the-band.front')}}">ABOUT</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('music-store.front')}}">SHOP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('media.front')}}">GALLERY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('merch.front')}}">PRODUCT DETAIL</a>
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
                <img src="{{asset('assets/images/logos.png')}}"
                     alt="Logo"
                     style="max-height:80px; width:auto; height:auto; object-fit:contain; display:block; margin:0 auto;">

                <ul class="navftr" style="list-style:none; padding:0; margin-top:15px;">
                    <li style="display:inline-block; margin:0 10px;"><a href="">Home</a></li>
                    <li style="display:inline-block; margin:0 10px;"><a href="">About</a></li>
                    <li style="display:inline-block; margin:0 10px;"><a href="">Gallery</a></li>
                    <li style="display:inline-block; margin:0 10px;"><a href="">Cart</a></li>
                    <li style="display:inline-block; margin:0 10px;"><a href="">Shop</a></li>
                    <li style="display:inline-block; margin:0 10px;"><a href="">Product Detail</a></li>
                </ul>

                <ul class="navftr" style="list-style:none; padding:0; margin-top:10px;">
                    <li style="display:inline-block; margin:0 15px;"><a href="tel:(330) 548-6928">(330) 548-6928</a></li>
                    <li style="display:inline-block; margin:0 15px;"><a href="mailto:info@lordzofsteel.com">info@lordzofsteel.com</a></li>
                </ul>

                <ul class="ftrlinks" style="list-style:none; padding:0; margin-top:10px;">
                    <li style="display:inline-block; margin:0 8px;"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li style="display:inline-block; margin:0 8px;"><a href="#"><i class="far fa-cloud"></i></a></li>
                    <li style="display:inline-block; margin:0 8px;"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li style="display:inline-block; margin:0 8px;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li style="display:inline-block; margin:0 8px;"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>

            </div>
        </div>
        <div class="copyRight" style="margin-top:20px; text-align:center;">
            <p style="margin:0;">© 2024 lordzofsteel.com, All rights reserved</p>
            <ul style="list-style:none; padding:0; margin-top:5px;">
                <li style="display:inline-block;"><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>
    </div>

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
