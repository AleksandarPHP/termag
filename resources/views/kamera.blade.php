@extends('layouts.app')
    @section('title', Helper::title(197))
    @section('description', Helper::description(197))
    @section('content')
<main>
    <section class="weather snow-height">
        <div class="bg center" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
            @php $text =  Helper::text(198) @endphp
                @isset($text->title)
                <h1 class="title-larger">{{$text->title}}</h1>
                @endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset

            </div>
        </div>
    </section>
    <section class="full-width-iframe">
        <a href="http://webcam.jahorina.org">
            <iframe src="https://webcam.jahorina.org/" style="border:0px #ffffff none;" name="myiFrame" frameborder="1" marginheight="0px" marginwidth="0px" height="50%" width="100%" allowfullscreen></iframe>
        </a>
    </section>
    <section class="villa-termag">
        @php $text =  Helper::text(199) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
            </div>
        </div>
    </section>
    <section class="wellness-spa ">
        @php $text =  Helper::text(200) @endphp
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
</main>

@endsection
