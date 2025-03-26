<!-- faq-section -->
<section class="faq-section">
    <div class="pattern-layer"
         style="background-image: url({{ asset("asset/front/images/shape/shape-9.png") }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                    <img style="width: 100%;" src="{{ asset("asset/front/images/resource/about-1.jpg") }}" alt="">
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <span class="sub-title">frequently asked questions</span>
                        <h2>Do You Have Any Questions?</h2>
                    </div>
                    <ul class="accordion-box">
                        @php $faq=\App\Models\faq::all(); $count=0; @endphp
                        @foreach($faq as $faqWrite)
                            @if($count==0)
                                @php $count++; @endphp
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                        <h3>{{ $faqWrite->nameEnglish }}?</h3>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p>{!! html_entity_decode($faqWrite->textEnglish) !!}</p>
                                        </div>
                                    </div>
                                </li>

                            @else


                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="flaticon-right-chevron"></i></div>
                                        <h3>{{ $faqWrite->nameEnglish }}?</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>{!! html_entity_decode($faqWrite->textEnglish) !!}</p>
                                        </div>
                                    </div>
                                </li>


                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->
