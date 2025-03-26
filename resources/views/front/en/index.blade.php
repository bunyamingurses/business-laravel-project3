@extends("layouts.front.en.index")
@section("content")

    @include("layouts.front.en.partial.carousel")

    @include("layouts.front.en.partial.about")

    @php $service=\App\Models\services::inRandomOrder()->limit(4)->get(); @endphp
    @if(isset($service[0]["id"]))
        <!-- service-style-three -->
        <section class="service-style-three bg-color-2 border-bottom sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Services</span>
                    <h2>Production at its Best</h2>
                </div>
                <div class="row clearfix justify-content-center">
                    @foreach($service as $serviceWrite)
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-three wow fadeInUp animated">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <img src="{{ asset("imageAvif/service/")."/".$serviceWrite->imagesAvif }}"
                                             style="min-height: 250px;" alt="">
                                    </div>
                                    <h3>
                                        <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}">{{ $serviceWrite->titleEnglish }}</a>
                                    </h3>
                                    <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}"
                                       class="theme-btn btn-one"><span>See Service</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-3">
                    <a href="{{ route("serviceHtmlEN") }}" class="theme-btn btn-one col-lg-6"><span>All Services</span></a>
                </div>
            </div>
        </section>
        <!-- service-style-three end -->
    @endif

    @php $reference=\App\Models\reference::all(); $text="";@endphp
    @if($reference[0]["id"])

        <!-- clients-style-two -->
        <section class="clients-style-two"
                 style="background-image: url({{ asset("asset/front/images/background/clients-bg.jpg") }});">
            <div class="auto-container">
                <div class="upper-box">
                    <span class="big-text">BORMETSAN</span>
                    <h2>Our business partners</h2>
                    <h3>Our Aim is to Provide Reliable Solutions</h3>
                    <a href="{{ route("referenceHtmlEN") }}" class="theme-btn btn-one"><span>All References</span></a>
                </div>
                <div class="clients-box">
                    <h6>We Offer Worldwide Reliability</h6>
                    <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

                        @foreach($reference as $referenceWrite)
                            <figure class="clients-logo"><img
                                    src="{{ asset("imageAvif/reference/")."/".$referenceWrite->image }}" alt="">
                            </figure>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- clients-style-two end -->
    @endif

    @php $product=\App\Models\product::inRandomOrder()->limit(4)->get(); @endphp
    @if(isset($product[0]["id"]))
        <!-- case-style-three -->
        <section class="case-style-three sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Products</span>
                    <h2>Discover Our Products</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">

                    @foreach($product as $productWrite)
                        <div class="case-block-three">
                            <div class="inner-box">
                                <figure class="image-box"><img
                                        src="{{ asset("imageAvif/product/")."/".$productWrite->imagesAvif }}" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="link-box"><a
                                            href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}"><i
                                                class="flaticon-diagonal-arrow"></i></a>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}">ÜRÜNÜ
                                            GÖR<i
                                                class="flaticon-diagonal-arrow"></i></a>
                                    </div>
                                    <div class="view-btn"><a href="{{ asset("imageAvif/product/")."/".$productWrite->imagesAvif }}"
                                                             class="lightbox-image" data-fancybox="gallery"><i
                                                class="flaticon-zoom-in"></i></a></div>
                                    <h3>
                                        <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}">{{ $productWrite->titleEnglish }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <a href="{{ route("productHtmlEN") }}" class="theme-btn btn-two col-lg-6"><span>All Products</span></a>
            </div>
        </section>
        <!-- case-style-three end -->

    @endif

    @include("layouts.front.en.partial.faq")

@endsection
