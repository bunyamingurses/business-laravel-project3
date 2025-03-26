@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")




    <!-- contact-info-section -->
    <section class="contact-info-section centred">
        <div class="auto-container">
            <div class="title-box">
                <div class="icon-box"><i class="flaticon-headphones"></i></div>
                <h2>Desteğe mi İhtiyacınız var?</h2>
                <h3>Arayın: <a href="tel:+90 {{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></h3>
            </div>
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <h3>Adresimiz</h3>
                                <p>{{ \App\Models\setting::getSetting("address") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-mail"></i></div>
                                <h3>E-Posta Adresi</h3>
                                <p><a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-clock"></i></div>
                                <h3>Çalışma Saatleri</h3>
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
                            <span class="sub-title text-white">Bize Yazın</span>
                            <h2 class="text-white">Mesajlarınızı ve sorularınızı İletin.</h2>
                            <p class="text-white">İletişim formunu doldurun, en kısa zamanda sizinle iletişime
                                geçelim.</p>
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
                        <form method="post" action="{{ route("contactPostTR") }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="input-field"
                                       placeholder="Adınızı ve Soyadınızı Girin!" required>


                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="input-field"
                                       placeholder="E-Posta Adresinizi Girin!" required>

                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" class="input-field"
                                       placeholder="Konuyu Belirtin!" required>

                            </div>
                            <div class="form-group">
                                            <textarea class="input-field" id="message" name="message"
                                                      placeholder="Mesajınızı Belirtin!" required></textarea>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-two"><span>Mesaj Gönder</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->
@endsection
