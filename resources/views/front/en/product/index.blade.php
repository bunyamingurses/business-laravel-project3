@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    @php $product=\App\Models\product::all(); @endphp
    @if(isset($product[0]["id"]))
        <!-- service-style-two -->
        <section class="service-style-two service-page-3 sec-pad border-bottom">
            <div class="line-box">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>
            <div class="auto-container">
                <div class="title-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                            <div class="sec-title">
                                <span class="sub-title">Products</span>
                                <h2>Products</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">

                    @foreach($product as $productWrite)

                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                 data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img
                                                src="{{ asset("imageAvif/product/")."/".$productWrite->imagesAvif }}"
                                                alt="">
                                        </figure>
                                        <h3>
                                            <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}">{{ $productWrite->titleEnglish }}</a>
                                        </h3>
                                    </div>
                                    <div class="lower-content">
                                        <div class="btn-box">
                                            <a href="{{ route("productDetailHtmlEN",["id"=>$productWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($productWrite->titleEnglish)]) }}"><span>See Product</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!-- service-style-two end -->

    @endif

@endsection
