@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    <!-- chooseus-style-three -->
    <section class="chooseus-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">KVKK</span>
                            <h2>KVKK</h2>
                        </div>
                        <div class="text">
                            <p>{!! html_entity_decode(\App\Models\about::getAbout("kvkkEnglish")) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-style-three end -->

    @include("layouts.front.en.partial.faq")
@endsection
