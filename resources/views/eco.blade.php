@extends('layouts.app')
    @section('title', Helper::title(69))
    @section('description', Helper::description(69))
    @section('content')<main>
    <section class="villa-termag eco">
        @php $text =  Helper::text(70) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h2 class="title">{{$text->title}}</h2>
                    @endisset
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        @php $text =  Helper::text(71) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)
                <h2 class="title">{{$text->title}}</h2>
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
    <section class="abonos">
        <div class="bg center" style="background-image: url('{{asset("assets/images/abonos-bg.jpg")}}');"></div>
    </section>
</main>
@endsection
