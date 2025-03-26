@extends("layouts.front.tr.index")
@section("content")
    @include("layouts.front.tr.partial.banner")




    <!-- related-project -->
    <section class="related-project">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Referanslar</h2>
            </div>
            <div class="row">

                @php $reference=\App\Models\reference::all();@endphp
                @foreach($reference as $referenceWrite)
                    <div class="project-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset("imageAvif/reference/")."/".$referenceWrite->image }}" alt=""></figure>
                                <div class="view-btn"><a href="{{ asset("imageAvif/reference/")."/".$referenceWrite->image }}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                <div class="lower-content bg-light">
                                    <h3>{{ $referenceWrite->name }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- related-project end -->

@endsection
