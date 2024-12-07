@extends('layouts.app')
    @section('title', Helper::title(197))
    @section('description', Helper::description(197))
    @section('content')
<main>
    <section class="weather snow-height">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
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

                {{-- <h4>API</h4> --}}
            </div>
        </div>
    </section>
    <section class="villa-termag">
        @php $text =  Helper::text(199) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
        @php $text =  Helper::text(199) @endphp
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
</main>

@endsection
