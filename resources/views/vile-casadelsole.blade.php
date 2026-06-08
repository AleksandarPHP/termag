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
    <section class="special mb-5" style="padding:0 0 5rem 0;">
        <div class="bg mb-5" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container mb-5">
            @php $text =  Helper::text(242) @endphp
            @isset($text->title)
            <h2 class="massage-smaller">{{$text->title}}</h2>
            @endisset
            @isset($text->text)
            <p class="txt">
                {!!$text->text!!}
            </p>
            @endisset
            <br>
            <br>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-4 mt-4">
                    @php $text =  Helper::text(243) @endphp
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{Helper::image($text->image, 425,283, false)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body-ville">
                          <h5>{{$text->title}}</h5>
                          <p class="txt">
                            {!! $text->text !!}
                          </p>
                          <div>
                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 mt-4">
                    @php $text =  Helper::text(244) @endphp
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{Helper::image($text->image, 425,283, false)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body-ville">
                          <h5>{{$text->title}}</h5>
                          <p class="txt">
                            {!! $text->text !!}
                          </p>
                          <div>
                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 mt-4">
                    @php $text =  Helper::text(245) @endphp
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{Helper::image($text->image, 425,283, false)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body-ville">
                          <h5>{{$text->title}}</h5>
                          <p class="txt">
                            {!! $text->text !!}
                          </p>
                          <div>
                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 mt-4">
                    @php $text =  Helper::text(246) @endphp
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{Helper::image($text->image, 425,283, false)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body-ville">
                          <h5>{{$text->title}}</h5>
                          <p class="txt">
                            {!! $text->text !!}
                          </p>
                          <div>
                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 mt-4">
                    @php $text =  Helper::text(262) @endphp
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{Helper::image($text->image, 425,283, false)}}" class="card-img-top" alt="image">
                    </div>
                        <div class="card-body-ville">
                          <h5>{{$text->title}}</h5>
                          <p class="txt">
                            {!! $text->text !!}
                          </p>
                          <div>
                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
