@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")




    <!-- contact-info-section -->
    <section class="contact-info-section centred">
        <div class="auto-container">
            <div class="title-box">
                <div class="icon-box"><i class="flaticon-headphones"></i></div>
                <h2>Do you need support?</h2>
                <h3>Call: <a href="tel:+90 {{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></h3>
            </div>
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <h3>Out Address</h3>
                                <p>{{ \App\Models\setting::getSetting("address") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-mail"></i></div>
                                <h3>E-Mail Address</h3>
                                <p><a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-clock"></i></div>
                                <h3>Our Work Hours</h3>
                                <p>{{ \App\Models\setting::getSetting("workingHours") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->



    <!-- contact-style-two -->
    <section class="contact-style-two">
        <div class="pattern-layer"
             style="background-image: url({{ asset("asset/front/images/case/case-24.jpg") }}); background-size: cover;"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column align-content-center">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title text-white">Write to us</span>
                            <h2 class="text-white">Send your messages and questions.</h2>
                            <p class="text-white">Fill out the contact form and we will contact you as soon as possible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    @if(session("status"))
                        <div class="alert alert-info"> {{ session("status") }}</div>
                    @endif
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-danger font-weight-bold">*{{ $error }}</li>
                            @endforeach
                        </ul>

                    @endif
                    <div class="form-inner">
                        <form method="post" action="{{ route("contactPostEN") }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="input-field"
                                       placeholder="Enter your name and surname!" required>


                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="input-field"
                                       placeholder="Enter your email address!" required>

                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" class="input-field"
                                       placeholder="Specify the Subject!" required>

                            </div>
                            <div class="form-group">
                                            <textarea class="input-field" id="message" name="message"
                                                      placeholder="Specify Your Message!" required></textarea>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-two"><span>Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->
@endsection
