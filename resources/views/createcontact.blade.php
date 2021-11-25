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
    </section><!-- Breadcrumbs Section -->


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-6 d-flex" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box ">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                </div>

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="{{ route('syriatrust.store') }}" method="post" role="form" class="php-email-form"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                <small id="name_error" class="form-text text-danger"></small>
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="text"  name="mobile" class="form-control " id="mobile" placeholder="mobile" required>
                                <small id="mobile_error" class="form-text text-danger"></small>



                            </div>
{{--                            <div class="col-lg-6 form-group">--}}
{{--                                <input type="text" name="governorates" class="form-control" id="governorates" placeholder="Your Governorate" required>--}}
{{--                            </div>--}}



                            <div class="col-lg-6 form-group">
                            <select  name="governorates" id="governorates" class="form-control-plaintext"  >
                                @foreach($governorate as $g)



                                    <option  value="{{$g->id}}" >{{$g->name}}</option>



                                @endforeach
                            </select>
                            <br>
                            </div>













{{--                            <select  name="governorates" >--}}
{{--                                @foreach($cat as $cats)--}}



{{--                                    <option   id="{{$cats->id}}">{{$cats->name}}</option>--}}



{{--                                @endforeach--}}
{{--                            </select>--}}


                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="e-mail" id="e-mail" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>







                        <div class="form-group mt-4 mb-4">
                            <div class="captcha">
                                <span>{!! captcha_img('math') !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                    &#x21bb;
                                </button>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>













                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

    </main><!-- End #main -->










@endsection
@section('script')

    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '{{ url("reload-captcha") }}',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

    </script>
    @endsection