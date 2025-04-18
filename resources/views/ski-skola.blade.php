@extends('layouts.app')
    @section('title', Helper::title(148))
    @section('description', Helper::description(148))
    @section('content')

<main>
    <section class="villa-termag ski-skola">
        @php $text =  Helper::text(149) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
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
        @php $text =  Helper::text(150) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
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
    
    <!-- <div class="marquee"> -->
        <!-- <div class="marquee__group">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
        </div>
        <div class="marquee__group">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m1-4.png')}}" alt="ski skola">
        </div>
      </div> -->

      <!-- <div class="marquee">
        <div class="marquee__group marquee__group2">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
        </div>
        <div class="marquee__group marquee__group2">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-1.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-2.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-3.png')}}" alt="ski skola">
         <img src="{{asset('assets/images/m2-4.png')}}" alt="ski skola">
        </div>
    </div> -->

    <!-- <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m1-1.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m1-2.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m1-3.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m1-4.png')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m2-1.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m2-2.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m2-4.png')}}" alt="" class="img-fluid"></div>
                <div style="max-height: 260px" class="col-md-3 col-6"><img src="{{asset('assets/images/m1-1.png')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section> -->

    <section class="race">
        <div class="container-fluid">
            @php $text =  Helper::text(230) @endphp
            <div class="row">
                <div class="col-md-3 col-6"><img src="{{Helper::image($text->image, 640, 400, false)}}" alt="ski skola" class="img-fluid"></div>
                @for ($i = 2; $i <= 8; $i++)
                @php
                    $img = 'image'.$i;   
                @endphp
                @if ($text->$img)
                    <div class="col-md-3 col-6"><img src="{{Helper::image($text->$img, 640, 400, false)}}" alt="ski skola {{$i}}" class="img-fluid"></div>
                @endif
                @endfor
            </div>
        </div>
    </section>
</main>

@endsection