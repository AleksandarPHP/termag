@extends('layouts.app')
    @section('title', Helper::title(84))
    @section('description', Helper::description(84))
    @section('content')
<main>
    <section class="career">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/la.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
        @php $text =  Helper::text(76) @endphp
            <div class="content-wrapper">
                @isset($text->subtitle)
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->subtitle}}</h4>
                @endisset
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')
    <section class="experience unforgetable-experience">
        @php $text =  Helper::text(86) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                @isset($text->title)
                <h2 data-aos="fade-down" data-aos-duration="600">{{$text->title}}</h2>
                @endisset
                @isset($text->text)
                <p class="txt" data-aos="fade-down" data-aos-duration="600">
                    {!!$text->text!!}
                </p>
                @endisset
                <div class="row">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-1.png')}}" alt="porodicna 8km">
                            <figcaption>{{__('Mountaineering')}}</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-2.png')}}" alt="plava 24km">
                            <figcaption>{{__('Alpinism')}}</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-3.png')}}" alt="crvena 34km">
                            <figcaption>Karting</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="accommodation hiking">
        <div class="container">
            <div class="row">
                @php $text =  Helper::text(87) @endphp
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h2>{{$text->title}}</h2>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
                <div class="col-lg-7">
                    <video autoplay muted loop src="{{asset('assets/videos/planinarenje.mp4')}}"></video>
                </div>
            </div>
    </section>
    <section class="villa-termag alpinizam">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/alpinizam.mp4') }}"
                type="video/mp4"
            />
        </video>
        <div class="container">
            @php $text =  Helper::text(88) @endphp
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h2>{{$text->title}}</h2>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </div>
    </section>
</main>

@endsection