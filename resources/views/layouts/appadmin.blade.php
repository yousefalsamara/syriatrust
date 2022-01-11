<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mamba Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

<!-- =======================================================
    * Template Name: Mamba - v4.7.0
    * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>



<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            @guest
                <i class="bi bi-person"></i><a href="{{ route('login') }}">login</a>
                <i class="bi bi-house-door"></i><a href="{{ route('register') }}"> register</a>
            @else
                @if(Auth::user()->isAdmin())
                    {{--                <i class="bi bi-person"></i>{{ Auth::user()->name  }}--}}

                    <a href="{{url('adminpermissions')}}" style="background: #428bca;  border: 0; padding: 10px 30px; color: #fff; transition: 0.4s;" role="button" aria-pressed="true"> admin</a>

                @endif
                {{--                <i class="bi bi-phone-fill phone-icon"></i>--}}

                {{--                <a href="{{ route('logout') }}"--}}
                {{--                   onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                    {{ __('Logout') }}--}}
                {{--                </a>--}}

                {{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                {{--                    @csrf--}}
                {{--                </form>--}}


                <i class="bi bi-person"></i>{{ Auth::user()->name }}
                <i class="bi bi-phone-fill phone-icon"></i>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest

        </div>


    {{--            <i ></i><a href="{{ route('login') }}">Login</a>--}}
    {{--            <i ></i> <a href="{{ route('register') }}">Register</a>--}}








    {{--            <i></i>  @if (Route::has('login'))--}}
    {{--                <div class="top-right links">--}}
    {{--                    @auth--}}
    {{--                        <a href="{{ url('/home') }}">Home</a>--}}
    {{--                    @else--}}
    {{--                        <a href="{{ route('login') }}">Login</a>--}}

    {{--                        @if (Route::has('register'))--}}
    {{--                            <a href="{{ route('register') }}">Register</a>--}}
    {{--                        @endif--}}
    {{--                    @endauth--}}
    {{--                </div>--}}
    {{--            @endif--}}




    <!-- Right Side Of Navbar -->
        {{--            <ul class="navbar-nav ml-auto">--}}
        {{--                <!-- Authentication Links -->--}}
        {{--                @guest--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
        {{--                    </li>--}}
        {{--                    @if (Route::has('register'))--}}
        {{--                        <li class="nav-item">--}}
        {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
        {{--                        </li>--}}
        {{--                    @endif--}}
        {{--                @else--}}
        {{--                    <li class="nav-item dropdown">--}}
        {{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
        {{--                            {{ Auth::user()->name }}--}}
        {{--                        </a>--}}

        {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
        {{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
        {{--                               onclick="event.preventDefault();--}}
        {{--                                                     document.getElementById('logout-form').submit();">--}}
        {{--                                {{ __('Logout') }}--}}
        {{--                            </a>--}}

        {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
        {{--                                @csrf--}}
        {{--                            </form>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}


        {{--                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>--}}
        {{--                        <ul>--}}
        {{--                            <li> <a class="dropdown-item" href="{{ route('logout') }}"--}}
        {{--                                    onclick="event.preventDefault();--}}
        {{--                                                     document.getElementById('logout-form').submit();">--}}
        {{--                                    {{ __('Logout') }}--}}
        {{--                                </a>--}}

        {{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
        {{--                                    @csrf--}}
        {{--                                </form>--}}
        {{--                            </li>--}}
        {{--                            <li><a href="#">Drop Down 1</a></li>--}}
        {{--                        </ul>--}}
        {{--                    </li>--}}
        {{--                @endguest--}}
        {{--            </ul>--}}
        {{--        </div>--}}


        <div class="social-links d-none d-md-block">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" >Admin</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('news')}}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                {{--                <li class="nav-item dropdown">--}}
                {{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                {{--                        Dropdown--}}
                {{--                    </a>--}}
                {{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
                {{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
                {{--                        <li><hr class="dropdown-divider"></li>--}}
                {{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
                {{--                </li>--}}
            </ul>
            {{--            <form class="d-flex">--}}
            {{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
            {{--            </form>--}}
        </div>
    </div>
</nav>



<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

</body>
</html>
<br>
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Admin</h2>
            <ol>
                <li><a href="{{ route('home')}}" >Home</a></li>

            </ol>
        </div>
    </div>
</section>


</div>





<br>
@yield('content')
{{--<div class="row">--}}

{{--    <div class="col-md-12 text-center">--}}
{{--        <a href="{{url('news')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">NEWS</a>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <a href="{{url('contact')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONTACT</a>--}}
{{--    </div>--}}
{{--</div>--}}
