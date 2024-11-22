@extends('layouts.app')
    @section('title', Helper::title(39))
    @section('description', Helper::description(39))
    @section('content')
    <main>
        <section class="career">
        @php $text =  Helper::text(40) @endphp
            <div class="bg center" style="background-image: url('{{asset("assets/images/koliba-bg.jpg")}}');"></div>
            <div class="container">
                <div class="content-wrapper">
                    @isset($text->title)
                        <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                    @endisset
                </div>
            </div>
        </section>
        @include('partials/booking')
        <section class="villa-termag">
        @php $text =  Helper::text(41) @endphp
            <div class="bg center" style="background-image: url('{{asset("storage/". $text->image)}}');"></div>
            <div class="container">
                <div>
                    <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                        @if($text->title!='')<h2>{{ $text->title }}</h2>@endif 
                        <p class="txt">
                            {!! $text->text !!}
                        </p>
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
            </div>
        </section>
        <section class="wellness-spa">
            @php $text =  Helper::text(42) @endphp
            <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
            <div class="container">
                <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                    @if($text->title!='')<h2>{{ $text->title }}</h2>@endif 
                    <p class="txt">
                        {!! $text->text !!}
                    </p>
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </section>
        @include('partials/socials')
        <section class="villa-termag">
            @php $text =  Helper::text(43) @endphp
            <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
            <div class="container">
                <div>
                    <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                        @if($text->title!='')<h2>{{ $text->title }}</h2>@endif 
                        <p class="txt">
                            {!! $text->text !!}
                        </p>
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
