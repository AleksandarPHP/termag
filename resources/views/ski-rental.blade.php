@extends('layouts.app')
    @section('title', Helper::title(144))
    @section('description', Helper::description(144))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(145) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        @php $text =  Helper::text(146) @endphp
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
    <section class="wellness-spa">
        @php $text =  Helper::text(147) @endphp
        <div class="bg centar" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
