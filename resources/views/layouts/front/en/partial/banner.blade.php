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
            @if($routeNamePage=="aboutEN" || $routeNamePage=="aboutHtmlEN")
                    <h1>About</h1>
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                        </li>
                        <li>
                            About
                        </li>
                    </ul>

            @elseif($routeNamePage=="missionEN" || $routeNamePage=="missionHtmlEN")
                <h1 >Mission</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Mission</li>
                </ul>

            @elseif($routeNamePage=="visionEN" || $routeNamePage=="visionHtmlEN")
                <h1 class="">Vision</h1>

                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Vision</li>
                </ul>
            @elseif($routeNamePage=="kvkkEN" || $routeNamePage=="kvkkHtmlEN")
                <h1 >KVKK</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>KVKK</li>
                </ul>
            @elseif($routeNamePage=="referenceEN" || $routeNamePage=="referenceHtmlEN")
                <h1 >References</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>References</li>
                </ul>
            @elseif($routeNamePage=="serviceEN" || $routeNamePage=="serviceHtmlEN")
                <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                    <h1 >Services</h1>
                </div>
                    <ul class="bread-crumb clearfix">
                        <li>
                            <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                        </li>
                        <li>
                            <span>Services</span>
                        </li>
                    </ul>
            @elseif($routeNamePage=="serviceDetailEN" || $routeNamePage=="serviceDetailHtmlEN")
                <h1 >Service Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Service Detail</li>
                </ul>
            @elseif($routeNamePage=="productEN" || $routeNamePage=="productHtmlEN")
                <h1 >Products</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Products</li>
                </ul>
            @elseif($routeNamePage=="productDetailEN" || $routeNamePage=="productDetailHtmlEN")
                <h1 >Product Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Product Detail</li>
                </ul>
            @elseif($routeNamePage=="qualityPolicyEN" || $routeNamePage=="qualityPolicyHtmlEN")
                <h1 >Quality Policy</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Quality Policy</li>
                </ul>
            @elseif($routeNamePage=="contactEN" || $routeNamePage=="contactHtmlEN")
                <h1 >Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route("indexHtmlEN") }}" title="Home">Homepage</a>
                    </li>
                    <li>Contact</li>
                </ul>

            @endif


        </div>
    </div>
</section>
<!-- page-title end -->
