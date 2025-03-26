<!-- chooseus-style-three -->
<section class="chooseus-style-three">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img src="{{ asset("imageAvif/setting/")."/".\App\Models\about::getAbout("aboutImageAvif") }}"
                                               alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">About</span>
                        <h2>About</h2>
                    </div>
                    <div class="text">
                        <p>{!! html_entity_decode(\App\Models\about::getAbout("aboutEnglish")) !!}</p>
                    </div>
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-check"></i></div>
                                    <h3>competent production</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-check"></i></div>
                                    <h3>high technology</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-style-three end -->
