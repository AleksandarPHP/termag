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
</main>

@endsection