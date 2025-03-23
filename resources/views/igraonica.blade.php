@extends('layouts.app')
    @section('title', Helper::title(44))
    @section('description', Helper::description(44))
    @section('content')
<main>
    <section class="villa-termag">
        @php $text =  Helper::text(45) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->subtitle)                       
                    <p class="txt mb-4">
                        {{$text->subtitle}}
                    </p>
                    @endisset
                    @isset($text->title)
                        <h1>{{$text->title}}</h1>
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
        @php $text =  Helper::text(46) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                    @isset($text->text)
                    <p class="txt">
                    {!! $text->text !!}
                    </p>
                    @endisset           
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>
    <section class="race">
        <div class="container-fluid">
            @php $text =  Helper::text(236) @endphp
            <div class="row quad-safari-slider">
                @if ($text->image)<div class="col-md-3 col-6"><img src="{{Helper::image($text->image, 570,380, false)}}" alt="" class="img-fluid"></div>@endif
                @for ($i = 2; $i <= 8; $i++)
                @php
                 $img = 'image'.$i;   
                @endphp
                    @if ($text->$img)
                        <div class="col-md-3 col-6"><img src="{{Helper::image($text->$img, 570,380, false)}}" alt="slider" class="img-fluid"></div>
                    @endif
                @endfor
            </div>
        </div>
    </section>
</main>

@endsection