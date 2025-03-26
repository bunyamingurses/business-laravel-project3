<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer"
         style="background-image: url({{ asset("imageAvif/setting/")."/".\App\Models\about::getAbout("bannerImageAvif") }});"></div>
    <div class="line-box">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            @php
                $routeNamePage=request()->route()->getName();
            @endphp
            @if($routeNamePage=="aboutTR" || $routeNamePage=="aboutHtmlTR")
                    <h1 >Hakkımda</h1>
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                        </li>
                        <li>
                            Hakkımda
                        </li>
                    </ul>

            @elseif($routeNamePage=="missionTR" || $routeNamePage=="missionHtmlTR")
                <h1 >Misyon</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Misyon</li>
                </ul>

            @elseif($routeNamePage=="visionTR" || $routeNamePage=="visionHtmlTR")
                <h1 class="">Vizyon</h1>

                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Vizyon</li>
                </ul>
            @elseif($routeNamePage=="kvkkTR" || $routeNamePage=="kvkkHtmlTR")
                <h1 >KVKK</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>KVKK</li>
                </ul>
            @elseif($routeNamePage=="referenceTR" || $routeNamePage=="referenceHtmlTR")
                <h1 >Referanslar</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Referanslar</li>
                </ul>
            @elseif($routeNamePage=="serviceTR" || $routeNamePage=="serviceHtmlTR")
                <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                    <h1 >Hizmetler</h1>
                </div>
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                        </li>
                        <li>
                            <span>Hizmetler</span>
                        </li>
                    </ul>
            @elseif($routeNamePage=="serviceDetailTR" || $routeNamePage=="serviceDetailHtmlTR")
                <h1 >Hizmet Detay</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Hizmet Detay</li>
                </ul>
            @elseif($routeNamePage=="productTR" || $routeNamePage=="productHtmlTR")
                <h1 >Ürünler</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Ürünler</li>
                </ul>
            @elseif($routeNamePage=="productDetailTR" || $routeNamePage=="productDetailHtmlTR")
                <h1 >Ürün Detay</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Ürün Detay</li>
                </ul>
            @elseif($routeNamePage=="qualityPolicyTR" || $routeNamePage=="qualityPolicyHtmlTR")
                <h1 >Kalite Politikası</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>Kalite Politikası</li>
                </ul>
            @elseif($routeNamePage=="contactTR" || $routeNamePage=="contactHtmlTR")
                <h1 >İletişim</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlTR") }}" title="Home">Anasayfa</a>
                    </li>
                    <li>İletişim</li>
                </ul>

            @endif


        </div>
    </div>
</section>
<!-- page-title end -->
