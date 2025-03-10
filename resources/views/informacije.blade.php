@include('partials/header')
@php
    $album = App\Models\Album::findOrFail(1);
@endphp
<main>
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
            <div class="justify-content-center infogallery-slider">
                    @foreach ($album->infogallery as $gallery)
                    <a href="{{ asset('storage/' . $gallery->image) }}" data-fancybox="gallery">
                        <img class="img-thumbnail" src="{{Helper::image($gallery->image, 425,350, false)}}" />
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</main>
@include('partials/footer')
