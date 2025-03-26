@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="category-widget">
                            <div class="widget-title">
                                <h3>Services</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">

                                    @php $popular=\App\Models\services::inRandomOrder()->limit(5)->get(); @endphp
                                    @foreach($popular as $popularWrite)
                                        <li>
                                            <a href="{{ route("serviceDetailHtmlEN",["id"=>$popularWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($popularWrite->titleEnglish)]) }}" class="sec-btn" title="All Maintenance">{{ $popularWrite->titleEnglish }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="contact-widget">
                            <div class="widget-title">
                                <h3>İletişim</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-box clearfix">
                                    <li>
                                        <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                        <h5>Phone</h5>
                                        <p><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                                        <h5>E-Mail</h5>
                                        <p><a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-one">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset("imageAvif/service/")."/".$service->imagesAvif }}" alt=""></figure>
                            </div>
                            <div class="text">
                                <h1>{{ $service->titleEnglish }}</h1>
                                {!! html_entity_decode($service->textEnglish) !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->
@endsection
