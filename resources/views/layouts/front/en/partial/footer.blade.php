

<!-- footer-style-three -->
<footer class="footer-style-three"
        style="background-image: url({{ asset("asset/front/images/background/footer-bg.jpg") }});">
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo"><a href="{{ route("indexHtmlEN") }}"><img
                                    src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoFooterAvif") }}" alt=""></a></figure>
                        <ul class="info-list clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <h5>Address</h5>
                                <p>{{ \App\Models\setting::getSetting("address") }}</p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <h5>Contact</h5>
                                <p><a href="tel:+90{{ \App\Models\setting::getSetting("phoneNumber") }}">+90 {{ \App\Models\setting::getSetting("phoneNumber") }}</a></p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-mail"></i></div>
                                <h5>Email</h5>
                                <p><a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget">
                        <div class="widget-title">
                            <h3>Company</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{route("aboutHtmlEN")}}">About</a></li>
                                <li><a href="{{route("missionHtmlEN")}}">Mission</a></li>
                                <li><a href="{{route("visionHtmlEN")}}">Vision</a></li>
                                <li><a href="{{route("kvkkHtmlEN")}}">KVKK</a></li>
                                <li><a href="{{route("qualityPolicyHtmlEN")}}">Quality Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget">
                        <div class="widget-title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route("indexHtmlEN") }}">Homapage</a></li>
                                <li><a href="{{ route("serviceHtmlEN") }}">Services</a></li>
                                <li><a href="{{ route("productHtmlEN") }}">Products</a></li>
                                <li><a href="{{route("referenceHtmlEN")}}">References</a></li>
                                <li><a href="{{ route("contactHtmlEN") }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="download-widget footer-widget">
                        <div class="widget-content">
                            <div class="copyright">
                                <p>Copyrights © 2025 <br/><a href="{{ \App\Models\setting::getSetting("siteUrl") }}">BORMETSAN,</a> All Rights Reserved..<br></p>
                            </div>
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
        </div>
        <div class="footer-bottom">
            <div class="bottom-inner">
                <ul class="footer-nav clearfix">
                    <li><a href="{{ route("qualityPolicyHtmlEN") }}">Qualit Policy</a></li>
                    <li><a target="_blank" href="{{ \App\Models\setting::getSetting("siteUrl") }}/sitemap">Sitemap</a></li>
                    <li>Designed By: <a href="Https://www.gursesyazilim.com">Gürses Yazılım</a></li>
                </ul>
                <button class="scroll-top-two scroll-to-target" data-target="html">Back To Top <img
                        src="{{ asset("asset/front/images/icons/icon-9.png") }}" alt=""></button>
            </div>
        </div>
    </div>
</footer>
<!-- footer-style-three end -->

<!-- scroll to top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="flaticon-down-chevron"></i>
</button>
</div>


<!-- jequery plugins -->
<script src="{{ asset("asset/front/js/jquery.js") }}"></script>
<script src="{{ asset("asset/front/js/popper.min.js") }}"></script>
<script src="{{ asset("asset/front/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("asset/front/js/owl.js") }}"></script>
<script src="{{ asset("asset/front/js/wow.js") }}"></script>
<script src="{{ asset("asset/front/js/validation.js") }}"></script>
<script src="{{ asset("asset/front/js/jquery.fancybox.js") }}"></script>
<script src="{{ asset("asset/front/js/appear.js") }}"></script>
<script src="{{ asset("asset/front/js/scrollbar.js") }}"></script>
<script src="{{ asset("asset/front/js/isotope.js") }}"></script>
<script src="{{ asset("asset/front/js/jquery.nice-select.min.js") }}"></script>
<script src="{{ asset("asset/front/js/jquery.lettering.min.js") }}"></script>
<script src="{{ asset("asset/front/js/jquery.circleType.js") }}"></script>
<script src="{{ asset("asset/front/js/text_animation.js") }}"></script>
<script src="{{ asset("asset/front/js/text_plugins.js") }}"></script>
<script src="{{ asset("asset/front/js/bxslider.js") }}"></script>

<!-- main-js -->
<script src="{{ asset("asset/front/js/script.js") }}"></script>

</body><!-- End of .page_wrapper -->

</html>
