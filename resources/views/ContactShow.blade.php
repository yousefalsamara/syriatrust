@extends('layouts.app')

@section('content')


    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>CONTACT US</h2>
                <ol>
                    <li><a href="{{ route('home')}}" >Home</a></li>

                </ol>
            </div>




        </div>

        <div class="container"data-aos="fade-up">












            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input type="id" name="id" class="form-control" id="id" value="{{$contact->id}}" >
                        <small id="name_error" class="form-text text-danger"></small>
                    </div>


                    <div class="col-lg-6 form-group">
                        <input type="name" name="name" class="form-control" id="name" value="{{$contact->name}}" >

                    </div>

                    <div class="col-lg-6 form-group">
                        <br>
                        <input type="mobile" name="mobile" class="form-control" id="mobile" value="{{$contact->mobile}}" >
                        <small id="name_error" class="form-text text-danger"></small>
                    </div>

                    <div class="col-lg-6 form-group">
                        <br>
                        <input type="email" name="email" class="form-control" id="email" value="{{$contact->e_mail}}" >

                    </div>
                </div>
                <div class="form-group">
                    <br>

                    <input type="text" class="form-control" name="subject" id="subject" value="{{$contact->subject}}">
                </div>

                <div class="form-group">
                    <br>
                    <textarea class="form-control" name="message" rows="5" >{{$contact->message}}</textarea>
                </div>

                <div class="col-lg-6 form-group">
                    <br>

                    <text type="text" class="form-control" name="governorates" id="governorates" >


                        @foreach($governorate as $s)
                            @if($s->id==$contact->governorates)
                                {{$s->name}}


                            @endif
                            @endforeach

                        </text>
                </div>

















                </div>


            </div>
    </section><!-- Breadcrumbs Section -->








@endsection
