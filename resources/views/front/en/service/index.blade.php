@extends("layouts.front.en.index")
@section("content")
    @include("layouts.front.en.partial.banner")
    @php $service=\App\Models\services::all(); @endphp
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
                                    <a href="{{ route("serviceDetailHtmlEN",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->titleEnglish)]) }}"
                                       class="theme-btn btn-one"><span>See Service</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- service-style-three end -->
    @endif
@endsection
