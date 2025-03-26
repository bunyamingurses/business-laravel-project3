@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")
    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="category-widget">
                            <div class="widget-title">
                                <h3>Ürünler</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">

                                    @php $popular=\App\Models\product::inRandomOrder()->limit(5)->get(); @endphp
                                    @foreach($popular as $popularWrite)
                                        <li>
                                            <a href="{{ route("productDetailHtmlTR",["id"=>$popularWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($popularWrite->title)]) }}" class="sec-btn" title="{{ $popularWrite->title }}">{{ $popularWrite->title }}</a>
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
                                        <h5>Telefon</h5>
                                        <p><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                                        <h5>E-Posta</h5>
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
                                    <figure class="image"><img src="{{ asset("imageAvif/product/")."/".$product->imagesAvif }}" alt=""></figure>
                            </div>
                            <div class="text">
                                <h1>{{ $product->title }}</h1>
                                {!! html_entity_decode($product->text) !!}
                            </div>

                            <!-- related-project -->
                            <section class="related-project">
                                <div class="auto-container">
                                    <div class="sec-title centred">
                                        <h2>Ürünler</h2>
                                    </div>
                                    <div class="row">

                                        @foreach($gallery as $galleryWrite)

                                        <div class="project-block-two col-lg-4 card pt-2">
                                            <div class="inner-box">
                                                <div class="image-box mb-0">
                                                    <figure class="image"><img src="{{ asset("imageAvif/product/gallery/")."/".$galleryWrite->imageAvif }}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset("imageAvif/product/gallery/")."/".$galleryWrite->imageAvif }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="lower-content bg-light">
                                                        <h3>{{ $galleryWrite->name }}</h3>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </section>
                            <!-- related-project end -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->
@endsection
