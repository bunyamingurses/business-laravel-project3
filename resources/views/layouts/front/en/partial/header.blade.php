<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("icon") }}" rel="icon">
    <title>{{ \App\Models\setting::getSetting("title") }}</title>
    <meta name="format-detection" content="telephone={{ \App\Models\setting::getSetting("phoneNumber") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta http-equiv="cache-control" content="public"/>
    <meta name="copyright" content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta name="author" content="{{ \App\Models\setting::getSetting("author") }}"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="INDEX,FOLLOW"/>


    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ \App\Models\setting::getSetting("siteUrl") }}"/>
    <meta property="og:image"
          content="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("logoHeader") }}"/>
    <meta property="og:site_name" content="{{ \App\Models\setting::getSetting("title") }}"/>
    <meta property="og:description" content="{{ \App\Models\setting::getSetting("description") }}"/>
    <meta property="og:locale" content="tr_TR"/>
    <meta property="og:title" content="{{ \App\Models\setting::getSetting("title") }}"/>

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ \App\Models\setting::getSetting("siteUrl") }}">
    <meta property="twitter:title" content="{{ \App\Models\setting::getSetting("title") }}">
    <meta property="twitter:description" content="{{ \App\Models\setting::getSetting("description") }}">
    <meta property="twitter:image"
          content="{{ asset("image/setting/")."/".\App\Models\setting::getSetting("logoHeader") }}">


    <!-- FavIcon Link -->
    <link rel="icon" href="{{ asset("asset/front/images/favicon.png") }}" sizes="32x32" type="image/png">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset("asset/front/css/font-awesome-all.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/flaticon.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/owl.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/bootstrap.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/jquery.fancybox.min.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/animate.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/nice-select.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/color.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("asset/front/css/responsive.css") }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper home_3">

    <!-- main header -->
    <header class="main-header header-style-three">
        <!-- header-top-two -->
        <div class="header-top-two">
            <div class="outer-container">
                <div class="top-inner">
                    <div class="top-left">

                    </div>
                    <div class="top-right">
                        <ul class="info-list clearfix">
                            <li>Adres: <span>{{ \App\Models\setting::getSetting("address") }}</span></li>
                        </ul>
                        <ul class="social-links clearfix">
                            <li><a href="{{ \App\Models\setting::getSetting("facebook") }}"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="{{ \App\Models\setting::getSetting("twitter") }}"><i class="fa-brands fa-square-twitter"></i></a></li>
                            <li><a href="{{ \App\Models\setting::getSetting("instagram") }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ \App\Models\setting::getSetting("linkedin") }}"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ route("indexHtmlEN") }}"><img
                                    src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoHeaderAvif") }}" style="max-height: 50px;" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route("indexHtmlEN") }}">Homepage</a></li>
                                    <li class="dropdown"><a href="">Business</a>
                                        <ul>
                                            <li><a href="{{ route("aboutHtmlEN") }}">About</a></li>
                                            <li><a href="{{ route("missionHtmlEN") }}">Mission</a></li>
                                            <li><a href="{{ route("visionHtmlEN") }}">Vision</a></li>
                                            <li><a href="{{ route("kvkkHtmlEN") }}">KVKK</a></li>
                                            <li><a href="{{route("qualityPolicyHtmlEN")}}">Quality Policy</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{ route("serviceHtmlEN") }}">Services</a></li>
                                    <li><a href="{{ route("productHtmlEN") }}">Products</a></li>
                                    <li><a href="{{ route("referenceHtmlEN") }}">References</a></li>
                                    <li><a href="{{ route("contactHtmlEN") }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="user-box"><a href="{{ route("indexHtmlTR") }}"><img src="{{ asset("asset/front/turkey.svg") }}" width="50" alt=""></a></div>
                        <div class="support-box">
                            <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                            <span>Reach US</span>
                            <h5><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ route("indexHtmlEN") }}"><img
                                    src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoHeaderAvif") }}" style="max-height: 50px;" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="user-box"><a href="{{ route("indexHtmlTR") }}"><img src="{{ asset("asset/front/turkey.svg") }}" width="50" alt=""></a></div>
                        <div class="support-box">
                            <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                            <span>Reach Us</span>
                            <h5><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">0{{ \App\Models\setting::getSetting("phoneNumber") }}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop">
        </div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route("indexHtmlEN") }}"><img src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoHeaderAvif") }}" alt="" title=""></a></div>
            <div class="menu-outer">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                <li><a href="{{ route("indexHtmlTR") }}" class="flagMobile"  ><img src="{{ asset("asset/front/turkey.svg") }}" width="30" alt=""> Turkish</a></li>
                    </ul>
                </div>
            </div>

            <div class="contact-info">
                <h4>Contact Information</h4>
                <ul>
                    <li>{{ \App\Models\setting::getSetting("address") }}</li>
                    <li><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></li>
                    <li><a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="{{ \App\Models\setting::getSetting("facebook") }}"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="{{ \App\Models\setting::getSetting("twitter") }}"><i class="fab fa-square-twitter"></i></a></li>
                    <li><a href="{{ \App\Models\setting::getSetting("instagram") }}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ \App\Models\setting::getSetting("linkedin") }}"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

