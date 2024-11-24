@extends('layouts.app')
    @section('title', Helper::title(64))
    @section('description', Helper::description(64))
    @section('content')
<main>
    <section class="career detox">
        @php $text =  Helper::text(65) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
                @isset($text->subtitle)
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {{$text->subtitle}}
                </p>
                @endisset
                <div class="btn-wrapper">
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary" data-aos-delay="750">{{$text->urlTitle}}</a>@endif
                    @if($text->urlTitle2!='' && $text->url2)<a href="{{Helper::url($text->url2)}}" class="btnn btn_gold" data-aos-delay="950">{{$text->urlTitle2}}</a>@endif
                </div>
            </div>
        </div>
    </section>

    <section class="experience detox-services">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="text-center">
                <div class="row">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-1.png')}}" alt="kuglana">
                            <figcaption>Nutricionističko <br/> savjetovanje</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-2.jpg')}}" alt="kuglana">
                            <figcaption>Wellness Aktivnosti</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-3.png')}}" alt="kuglana">
                            <figcaption>Prirodna Ishrana</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        @php $text =  Helper::text(66) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd cardd-2" data-aos="fade-right" data-aos-duration="600">
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
   
    <section class="wellness-spa">
        @php $text =  Helper::text(67) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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

    <section class="accommodation nutrition" >
        <div class="container">
        @php $text =  Helper::text(68) @endphp
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                        @isset($text->title)
                        <h2 class="title">{{$text->title}}</h2>
                        @endisset
                        @isset($text->text)
                        <p class="txt">
                            {!!$text->text!!}
                        </p>
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>
</main>

@endsection