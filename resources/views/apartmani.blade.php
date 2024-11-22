@extends('layouts.app')
    @section('title', Helper::title(14))
    @section('description', Helper::description(14))
    @section('content')
<main>
    <section class="career apartmants">
        @php $text =  Helper::text(15) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/apartmani-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->subtitle)<h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->subtitle}}</h4>@endisset
                @isset($text->title)<h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>@endisset
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')

    <section class="experience">
        @php $text =  Helper::text(16) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag" class="img-fluid">
        <div class="container">
            <div class="text-center">
                @isset($text->title) <h2 data-aos="fade-down" data-aos-duration="600">{{$text->title}}</h2>@endisset

                <p class="txt"  data-aos="fade-down" data-aos-duration="600">
                    @isset($text->text)
                    {!! $text->text !!}
                @endisset                </p>

                <div class="row">
                    <div class="col-lg-4 col-sm-6"  data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-1.jpg')}}" alt="kuglana">
                            <figcaption>Kuglana</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-2.jpg')}}" alt="kuglana">
                            <figcaption>Igraonica za decu</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-3.jpg')}}" alt="kuglana">
                            <figcaption>Foaje</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="row">
                @php $text =  Helper::text(17) @endphp
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <img src="{{asset('assets/images/apartmani-img-left-1.jpg')}}" alt="apartman" class="img-fluid">
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="600">
                    <img src="{{asset('assets/images/apartmani-img-right-1.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        @isset($text->subtitle)
                        <h4>{{$text->subtitle}}</h4>                            
                        @endisset
                        @isset($text->title)
                        <h2>{!!$text->title!!}</h2>
                        @endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}} <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>@endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman apartman-2">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(18) @endphp
            <div class="row">
                <div class="col-lg-7" data-aos="fade-right" data-aos-duration="600">
                    <img src="{{asset('assets/images/apartmani-img-left-2.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        @isset($text->title)
                        <h2>{!!$text->title!!}</h2>
                        @endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}} <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>@endif
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="600">
                    <img src="{{asset('assets/images/apartmani-img-right-2.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="apartman">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/section-decor.png')}}" alt="dekoracija">
        <div class="container">
            @php $text =  Helper::text(19) @endphp
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <img src="{{asset('assets/images/basic-1.png')}}" alt="apartman" class="img-fluid">
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="600">
                    <img src="{{asset('assets/images/basic-2.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        @isset($text->subtitle)<h4>{{$text->subtitle}}</h4>@endisset
                        @isset($text->title)<h2>{!!$text->title !!}</h2>@endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}} <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>@endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman apartman-2">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-down" data-aos-duration="600">
                    <img src="{{asset('assets/images/eco-1.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
            @php $text =  Helper::text(19) @endphp
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper"> 
                        @isset($text->title)<h2>{!!$text->title !!}</h2>@endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}} <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>@endif
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="600">
                    <img src="{{asset('assets/images/eco-2.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
