@extends('layouts.app')
    @section('title', Helper::title(193))
    @section('description', Helper::description(193))
    @section('content')
<main>
    <section class="weather gallery-intro">
        @php $text =  Helper::text(194) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="wrapper">
                @isset($text->title)
                <h1 class="title-larger">{{$text->title}}</h1>
                @endisset
                @isset($text->text)
                    {!!$text->text!!}
                @endisset
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        @php $text =  Helper::text(195) @endphp
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

    <section class="weather gallery-intro interactive-walk">
        @php $text =  Helper::text(196) @endphp
        <div class="container">
            <div class="wrapper">
                @isset($text->title)
                <h2 class="title-smaller">{{$text->title}}</h2>
                @endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
            </div>
            <div class="wrapper">
                <iframe src="https://termag.soft4tech.com/VR/ALL/zima/bh/index.html" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>

@endsection