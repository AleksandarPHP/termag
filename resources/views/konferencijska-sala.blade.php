@extends('layouts.app')
    @section('title', Helper::title(75))
    @section('description', Helper::description(75))
    @section('content')

<main>
    <section class="career">
        @php $text =  Helper::text(76) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->subtitle)
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->subtitle}}</h4>
                @endisset
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa konf-sala">
        @php $text =  Helper::text(77) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container-fluid">
            <div class="cardd">
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

    @include('partials/socials')

    <section class="villa-termag">
        @php $text =  Helper::text(78) @endphp
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

    <section class="wellness-spa konf-sala">
        @php $text =  Helper::text(79) @endphp
        <div class="bg center" style="background-image: url('assets/images/flexibility-bg.jpg');"></div>
        <div class="container-fluid">
            <div class="cardd">
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
