

<!-- footer-style-three -->
<footer class="footer-style-three"
        style="background-image: url({{ asset("asset/front/images/background/footer-bg.jpg") }});">
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo"><a href="{{ route("indexHtmlTR") }}"><img
                                    src="{{ asset("imageAvif/setting/")."/".\App\Models\setting::getSetting("logoFooterAvif") }}" alt=""></a></figure>
                        <ul class="info-list clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <h5>Adres</h5>
                                <p>{{ \App\Models\setting::getSetting("address") }}</p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <h5>İletişim</h5>
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
                            <h3>Şirket</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{route("aboutHtmlTR")}}">Hakkımda</a></li>
                                <li><a href="{{route("missionHtmlTR")}}">Misyon</a></li>
                                <li><a href="{{route("visionHtmlTR")}}">Vizyon</a></li>
                                <li><a href="{{route("kvkkHtmlTR")}}">KVKK</a></li>
                                <li><a href="{{route("qualityPolicyHtmlTR")}}">Kalite Politikası</a></li>
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
                                <li><a href="{{ route("indexHtmlTR") }}">Anasayfa</a></li>
                                <li><a href="{{ route("serviceHtmlTR") }}">Hizmetler</a></li>
                                <li><a href="{{ route("productHtmlTR") }}">Ürünler</a></li>
                                <li><a href="{{route("referenceHtmlTR")}}">Referanslar</a></li>
                                <li><a href="{{ route("contactHtmlTR") }}">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="download-widget footer-widget">
                        <div class="widget-content">
                            <div class="copyright">
                                <p>Copyrights © 2025 <br/><a href="{{ \App\Models\setting::getSetting("siteUrl") }}">BORMETSAN,</a> Tüm Hakları Saklıdır.<br></p>
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
                    <li><a href="{{ route("qualityPolicyHtmlTR") }}">Kalite Politikası</a></li>
                    <li><a target="_blank" href="{{ \App\Models\setting::getSetting("siteUrl") }}/sitemap">Sitemap</a></li>
                    <li>Designed By: <a href="Https://www.gursesyazilim.com">Gürses Yazılım</a></li>
                </ul>
                <button class="scroll-top-two scroll-to-target" data-target="html">Yukarı Dön <img
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
