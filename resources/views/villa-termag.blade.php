@extends('layouts.app')
    @section('title', Helper::title(21))
    @section('description', Helper::description(21))
    @section('content')
<main>
    <section class="career vt">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/villa-termag.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>
        @php $text =  Helper::text(22) @endphp
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
                @isset($text->subtitle)
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750"> {{$text->subtitle}}</p>
                @endisset
            </div>
        </div>
    </section>
    @include('partials/booking')

    <section class="accommodation">
        <div class="container">
            <div class="row">
        @php $text =  Helper::text(23) @endphp
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                        @isset($text->title)
                        <h2 class="title">{{$text->title}}</h2>                            
                        @endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        @php $text =  Helper::text(24) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)<h2 class="title">{{$text->title}}</h2>@endisset
                @isset($text->text)
                {!!$text->text!!}
                @endisset
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>

    <section class="wellness-spa reversed">
        <div class="bg" style="opacity: 0.2;z-index:1;background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(25) @endphp
            <div>
                <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                    @isset($text->title)<h2 class="title">{{$text->title}}</h2>@endisset
                    @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                    @isset($text->text)
                    {!!$text->text!!}
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
                <img class="img-fluid" src="{{asset('storage/'.$text->image)}}" alt="villa termag">
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="villa-termag villa-termag-b">
        <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(26) @endphp
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)<h2 class="title">{{$text->title}}</h2>@endisset
                    @isset($text->text)
                    {!!$text->text!!}
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
                <img class="img-fluid" src="{{asset('storage/'.$text->image)}}" alt="villa termag">
            </div>
        </div>
    </section>
</main>

@endsection
