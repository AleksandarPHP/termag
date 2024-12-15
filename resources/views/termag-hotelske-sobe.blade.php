@extends('layouts.app')
    @section('title', Helper::title(201))
    @section('description', Helper::description(201))
    @section('content')

<main>
<section class="career hotel-rooms">
    @php $text =  Helper::text(202) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')

    <section class="special hsnpk">
                <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
                <div class="container">
                   @php $text =  Helper::text(203) @endphp
                  @isset($text->subtitle)
                  <h4 class="subtitle">{{$text->subtitle}}</h4>
                  @endisset
                  @isset($text->title)
                  <h2 class="title-smaller">{{$text->title}}</h2>
                  @endisset
                  @isset($text->text)
                  <p class="txt">
                      {!!$text->text!!}
                  </p>
                  @endisset
                <div class="row">
                        <div class="col-lg-6">
                        @php $text =  Helper::text(204) @endphp
                            <div class="card" >
                                <div class="npk-slider-1"> 
                                    <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                    <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                    <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                    <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                                </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                              @php $text =  Helper::text(205) @endphp
                              <div class="npk-slider-1"> 
                                  <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                  <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                  <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                  <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                              </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                              @php $text =  Helper::text(206) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                              @php $text =  Helper::text(207) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                      @php $text =  Helper::text(208) @endphp
                    @isset($text->title)
                    <h4 class="subtitle">{{$text->title}}</h4>
                    @endisset
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" >
                              @php $text =  Helper::text(209) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                              @php $text =  Helper::text(210) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card" >
                              @php $text =  Helper::text(211) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" >
                              @php $text =  Helper::text(212) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
                                  <div>
                                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" >
                              @php $text =  Helper::text(213) @endphp
                              <div class="npk-slider-1"> 
                                <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image2)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image3)}}" class="card-img-top" alt="porodicni paket">
                                <img src="{{asset("storage/".$text->image4)}}" class="card-img-top" alt="porodicni paket">
                            </div>
                                <div class="card-body">
                                  @isset($text->title)
                                  <h5>{{$text->title}}</h5>
                                  @endisset
                                  @isset($text->text)
                                  <p class="txt">
                                      {!!$text->text!!}
                                  </p>
                                  @endisset
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