@extends('layouts.app')
    @section('title', Helper::title(240))
    @section('description', Helper::description(240))
    @section('content')
<main>
    <section class="villa-termag organic-facts">
        @php $text =  Helper::text(241) @endphp
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
    <section class="special" style="padding:0 0 5rem 0;">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(242) @endphp
            @isset($text->title)
            <h2 class="massage-smaller">{{$text->title}}</h2>
            @endisset
            @isset($text->text)
            <p class="txt">
                {!!$text->text!!}
            </p>
            @endisset
        </div>
    </section>

</main>

@endsection
