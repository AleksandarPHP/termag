@include('partials/header')
@php
    $albums = App\Models\Album::where('is_active', 1)->get();
@endphp
<main>
    @foreach ($albums as $album)
    <section class="weather gallery-intro">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
                <h1 class="title-larger">{{$album->title}}</h1>
                <p class="txt">
                    Pogledajte našu galeriju fotografija i zavirite u svaki kutak hotela. Doživite raskoš i eleganciju koju vam nudimo i uvjerite se u luksuz i udobnost Termaga.
                </p>
            </div>
        </div>
    </section>
    <section class="special" style="padding:0 0 5rem 0;">
        <div class="container">
            <div class="row mb-3 justify-content-center">
                <div id="test">
                    <div class="gallery-wrapper">
                        @foreach ($album->infogallery as $gallery)
                            <a href="{{ asset('storage/' . $gallery->image) }}" data-fancybox="gallery">
                                <img class="img-thumbnail" src="{{ asset('storage/' . $gallery->image) }}" />
                            </a>
                        @endforeach
                    </div>
                    {{-- @foreach ($album->infogallery as $item)
                        <div class="col-lg-4 mr-4">
                            <div class="card">
                                <img src="{{Helper::image($item->image, 645,430, false)}}" alt="">

                            </div>
                            {{-- <div class="card" >
                            <div class="npk-slider-1"> 
                                </div>
                                <div class="card-download-masage">
                                <h5>{{$document->original_name}}</h5>
                                <div class="mt-5">
                                    <a href="{{asset('storage/'.$document->file)}}" class="btnn btn_gold" target="_blank">{{__('Download')}}  <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                </div>
                                </div>
                            </div> --}
                        </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </section>
    @endforeach



    <section class="weather gallery-intro">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
                <h1 class="title-larger">Meni</h1>
                <p class="txt">
                    Pogledajte našu galeriju fotografija i zavirite u svaki kutak hotela. Doživite raskoš i eleganciju koju vam nudimo i uvjerite se u luksuz i udobnost Termaga.
                </p>
            </div>
        </div>
    </section>

    <section class="special" style="padding:0 0 5rem 0;">
        <div class="container">
            <div class="row mb-3 justify-content-center">
                <div id="test">

                {{-- @foreach ($documents as $document)
                    <div class="col-lg-4 mt-4">
                        <div class="card" >
                        <div class="npk-slider-1"> 
                            </div>
                            <div class="card-download-masage">
                            <h5>{{$document->original_name}}</h5>
                            <div class="mt-5">
                                <a href="{{asset('storage/'.$document->file)}}" class="btnn btn_gold" target="_blank">{{__('Download')}}  <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                <div class="card-download-masage">
                    <h5>Aleksandar Jovanović</h5>
                    <div class="mt-5">
                        <a href="/storage/Documents/02-02-2025/1738518195_aleksandar-jovanovic.pdf" class="btnn btn_gold" target="_blank" tabindex="0">Preuzmi  <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                    </div>
                    </div>
                    <div class="card-download-masage">
                        <h5>Aleksandar Jovanović</h5>
                        <div class="mt-5">
                            <a href="/storage/Documents/02-02-2025/1738518195_aleksandar-jovanovic.pdf" class="btnn btn_gold" target="_blank" tabindex="0">Preuzmi  <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                        </div>
                        </div>
            </div>
            </div>
        </div>
    </section>
</main>
@include('partials/footer')
