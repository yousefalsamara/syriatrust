@extends('layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{__('navbar.news')}}</h2>
                <ol>
                    <li><a href="{{ route('home')}}" >{{__('navbar.home')}}</a></li>

                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{asset('/storage/'.$News->image)}}" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>news information</h3>
                        <ul>
                            <li><strong>data</strong>:{{ date('Y-m-d', strtotime($News->updated_at)) }}</li>
                            <li><strong>governorates</strong> :</li>
                            @foreach($News->governorates as $n)
                                <li  class="bi bi-geo-alt-fill"> {{$n->name}} </li>


                        @endforeach
                        </ul>
                    </div>

                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{$News->title}}</h2>
                        <p>
                           {{$News->describtion}}
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


@endsection
