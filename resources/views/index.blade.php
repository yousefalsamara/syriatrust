@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    @php($i=0)
                    @foreach($News  as $n)
                        <div class="carousel-item @if($i==0) active @endif"
                             style="background-image:url('/storage/{{$n->image}}');">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">{{Str::limit($n->title, 60, $end='.......')}} </h2>
                                <p class="animate__animated animate__fadeInUp">{{Str::limit($n->describtion, 50, $end='.......')}}


                                    </p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                    More</a>
                            </div>
                        </div>
                        @php($i++)
                    @endforeach
                </div>

                <!-- Slide 2 -->


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
        </div>
    </section><!-- End Hero -->



    {{--    <section id="services" class="services">--}}
    {{--        <div class="container" data-aos="fade-up">--}}

    {{--            <div class="section-title">--}}
    {{--                <h2>NEWS</h2>--}}
    {{--            </div>--}}

    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">--}}
    {{--                    <div class="icon"><i class="bi bi-chat-left-dots"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>--}}
    {{--                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">--}}
    {{--                    <div class="icon"><i class="bi bi-bounding-box"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Dolor Sitema</a></h4>--}}
    {{--                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">--}}
    {{--                    <div class="icon"><i class="bi bi-globe"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>--}}
    {{--                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">--}}
    {{--                    <div class="icon"><i class="bi bi-broadcast"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Magni Dolores</a></h4>--}}
    {{--                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">--}}
    {{--                    <div class="icon"><i class="bi bi-brightness-high"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Nemo Enim</a></h4>--}}
    {{--                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">--}}
    {{--                    <div class="icon"><i class="bi bi-calendar2-week"></i></div>--}}
    {{--                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>--}}
    {{--                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </section><!-- End Services Section -->--}}
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>News</h2>
                <p></p>
            </div>



            <div class="row portfolio-container">

                @foreach( $News_1 as $n )

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('/storage/'.$n->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$n->title}}</h4>
                            <p>{{Str::limit($n->describtion, 50, $end='.......')}}</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 2</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 2</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 2</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 3</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 1</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 3</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"--}}
{{--                                   class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
    </section>


    <section class="counts section-bg">
        <div class="container">


            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Staff</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="8000000" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Hours of volum</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="+18" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Years</p>
                    </div>
                </div>


            </div>
        </div>


    </section><!-- End Services Section -->

@endsection
