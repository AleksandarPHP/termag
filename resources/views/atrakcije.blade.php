@extends('layouts.app')
    @section('title', Helper::title(253))
    @section('description', Helper::description(253))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(254) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)<h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>@endisset
                @isset($text->text)
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {!!$text->text!!}
                </p>
                @endisset
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        @php $text =  Helper::text(255) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600"> 
                @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @isset($text->text)
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>
    <section class="villa-termag">
        @php $text =  Helper::text(256) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @isset($text->text)
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        @php $text =  Helper::text(257) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @isset($text->text)
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>
    <section class="villa-termag" >
        @php $text =  Helper::text(258) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @isset($text->text)
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        @php $text =  Helper::text(258) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @isset($text->text)
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>

</main>
@endsection