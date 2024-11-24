@extends('layouts.app')
    @section('title', Helper::title(56))
    @section('description', Helper::description(56))
    @section('content')
<main>
    <section class="career bicklizam">
        <div class="bg center" style="background-image: url('{{asset("assets/images/biciklizam-hero.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Biciklizam</h1>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag" >
        @php $text =  Helper::text(57) @endphp
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
        @php $text =  Helper::text(58) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-1.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-2.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-3.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-4.jpg')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
</main>

@endsection