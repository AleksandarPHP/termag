@extends('layouts.app')
    @section('title', Helper::title(179))
    @section('description', Helper::description(179))
    @section('content')
<main>
    <section class="career team-building">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/team-building.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
        @php $text =  Helper::text(180) @endphp
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
                @isset($text->subtitle)
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {{$text->subtitle}}
                </p>
                @endisset
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa">
        @php $text =  Helper::text(181) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
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
    </section>

    <section class="special tb-activities">
        @php $text =  Helper::text(182) @endphp
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            @isset($text->title)
            <h2 class="title">{{$text->title}}</h2>
            @endisset
            
            @isset($text->subtitle)
            <p class="txt">
                {{$text->subtitle}}
            </p>
            @endisset

            <div class="row">
                <div class="col-lg-6">
                @php $text =  Helper::text(183) @endphp
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                        <div class="card-body">
                            @isset($text->title)
                            <h5>{{$text->title}}</h5>
                            @endisset
                            @isset($text->subtitle)
                            <p class="txt">
                                {{$text->subtitle}}
                            </p>
                            @endisset
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    @php $text =  Helper::text(184) @endphp
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Romantični Paket">
                        <div class="card-body">
                            @isset($text->title)
                            <h5>{{$text->title}}</h5>
                            @endisset
                            @isset($text->subtitle)
                            <p class="txt">
                                {{$text->subtitle}}
                            </p>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    @php $text =  Helper::text(185) @endphp
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Relax Paket">
                        <div class="card-body">
                            @isset($text->title)
                            <h5>{{$text->title}}</h5>
                            @endisset
                            @isset($text->subtitle)
                            <p class="txt">
                                {{$text->subtitle}}
                            </p>
                            @endisset
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    @php $text =  Helper::text(186) @endphp
                    <div class="card" data-aos="fade-up" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Detox Paket">
                        <div class="card-body">
                            @isset($text->title)
                            <h5>{{$text->title}}</h5>
                            @endisset
                            @isset($text->text)
                            <p class="txt">
                                {!!$text->text!!}
                            </p>
                            @endisset
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    @php $text =  Helper::text(187) @endphp
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Back to Nature">
                        <div class="card-body">
                            @isset($text->title)
                            <h5>{{$text->title}}</h5>
                            @endisset
                            @isset($text->subtitle)
                            <p class="txt">
                                {{$text->subtitle}}
                            </p>
                            @endisset
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="villa-termag reference">
        @php $text =  Helper::text(188) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/reference-bg.jpg")}}');"></div>
        <div class="container">
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
                <img class="img-fluid" src="{{asset("storage/".$text->image)}}" alt="villa termag">
            </div>
        </div>
    </section>

    @include('partials/socials')
</main>

@endsection
