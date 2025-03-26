<!-- banner-section -->
<section class="banner-section">
    <div class="line-box">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
    <div class="banner-carousel owl-theme owl-carousel">
        @php $carousel=\App\Models\carousel::all(); @endphp
        @foreach($carousel as $carouselWrite)
            <div class="slide-item">
                <div class="image-layer"
                     style="background-image:url({{ asset("imageAvif/carousel/")."/".$carouselWrite->imageAvif }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span class="special-text animation_text_word"></span>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

</section>
<!-- banner-section end -->
