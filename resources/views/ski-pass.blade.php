@extends('layouts.app')
    @section('title', Helper::title(140))
    @section('description', Helper::description(140))
    @section('content')
<main>
    <section class="accommodation ski-pass-hero">
        <div class="container">
            <div class="row">
        @php $text =  Helper::text(141) @endphp
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                        @isset($text->title)
                        <h1 class="title">{{$text->title}}</h1>
                        @endisset
                        @isset($text->text)
                        <p class="txt">
                            {!!$text->text!!}
                        </p>
                        @endisset
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>
    <section class="wellness-spa how-to-buy-ski-pass">
        @php $text =  Helper::text(142) @endphp
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
            </div>
        </div>
    </section>
    <section class="wellness-spa reversed ski-info">
        @php $text =  Helper::text(143) @endphp
        <div class="bg" style="opacity: 0.2;z-index:1;background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div>
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
                <img class="img-fluid" src="{{asset("storage/".$text->image)}}" alt="skije">
            </div>
        </div>
    </section>
</main>

@endsection
