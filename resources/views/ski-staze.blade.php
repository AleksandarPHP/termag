@extends('layouts.app')
    @section('title', Helper::title(151))
    @section('description', Helper::description(151))
    @section('content')
<main>
    <section class="career">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/ski.mp4') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
        @php $text =  Helper::text(152) @endphp
            <div class="content-wrapper">
              @isset($text->title)
              <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
              @endisset
            </div>
        </div>
    </section>
    @include('partials/booking') 
    @include('partials/socials')

    <section class="special get-to-know">
      @php $text =  Helper::text(153) @endphp
        <div class="bg center" style="background-image: url('{{asset("assets/images/ski-staze.jpg")}}');"></div>
        <div class="container">
            @isset($text->title)
            <h2 class="title-smaller">{{$text->title}}</h2>
            @endisset
            
            @isset($text->text)
            <p class="txt">
                {!!$text->text!!}
            </p>
            @endisset

            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="600">
                  @php $text =  Helper::text(154) @endphp
                    <div class="cardd" >
                        @isset($text->title)
                        <h3>{{$text->title}}</h3>
                        @endisset
                        @isset($text->text)
                        <p class="txt">
                            {!!$text->text!!}
                        </p>
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="600">
                  @php $text =  Helper::text(155) @endphp
                    <div class="cardd" >
                      @isset($text->title)
                      <h3>{{$text->title}}</h3>
                      @endisset
                      @isset($text->text)
                      <p class="txt">
                          {!!$text->text!!}
                      </p>
                      @endisset
                      @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                  </div>
                </div>
                  <div class="col-md-6" data-aos="fade-right" data-aos-duration="600">
                    @php $text =  Helper::text(156) @endphp
                    <div class="cardd" >
                      @isset($text->title)
                      <h3>{{$text->title}}</h3>
                      @endisset
                      @isset($text->text)
                      <p class="txt">
                          {!!$text->text!!}
                      </p>
                      @endisset
                      @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="600">
                  @php $text =  Helper::text(157) @endphp
                  <div class="cardd" >
                      @isset($text->title)
                      <h3>{{$text->title}}</h3>
                      @endisset
                      @isset($text->text)
                      <p class="txt">
                          {!!$text->text!!}
                      </p>
                      @endisset
                      @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="600">
                  @php $text =  Helper::text(158) @endphp
                      <div class="cardd" >
                        @isset($text->title)
                        <h3>{{$text->title}}</h3>
                        @endisset
                        @isset($text->text)
                        <p class="txt">
                            {!!$text->text!!}
                        </p>
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="600">
                  @php $text =  Helper::text(159) @endphp
                    <div class="cardd" >
                        @isset($text->title)
                        <h3>{{$text->title}}</h3>
                        @endisset
                        @isset($text->text)
                        <p class="txt">
                            {!!$text->text!!}
                        </p>
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                    </div>
                </div>
            </div>
            </div>
    </section>

    <section class="accommodation accommodation2">
        <div class="container">
            <div class="row">
              @php $text =  Helper::text(160) @endphp
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                      @isset($text->subtitle)
                      <h4 class="subtitle">{{$text->subtitle}}</h4>
                      @endisset
                      @isset($text->title)
                      <h2 class="title">{{$text->title}}</h2>
                      @endisset
                      @isset($text->text)
                      <p class="txt">
                          {!!$text->text!!}
                      </p>
                      @endisset
                      @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>

    <section class="wellness-spa ">
      @php $text =  Helper::text(161) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/saveti-bg.jpg")}}');"></div>
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

    <section class="special ski-offers">
      @php $text =  Helper::text(162) @endphp
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            @isset($text->title)
            <h2 class="title-smaller">{{$text->title}}</h2>
            @endisset
            
            @isset($text->subtitle)
            <p class="txt">
                {!!$text->subtitle!!}
            </p>
            @endisset

            <div class="row">
                <div class="col-md-6">
                  @php $text =  Helper::text(163) @endphp
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="porodicni paket">
                        <div class="card-body">
                          @isset($text->title)
                          <h5>{{$text->title}}</h5>
                          @endisset
                          @isset($text->text)
                          <p class="txt">
                              {!!$text->text!!}
                          </p>
                          @endisset
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                  @php $text =  Helper::text(164) @endphp
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Romantični Paket">
                        <div class="card-body">
                          @isset($text->title)
                          <h5>{{$text->title}}</h5>
                          @endisset
                          @isset($text->text)
                          <p class="txt">
                              {!!$text->text!!}
                          </p>
                          @endisset
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                  @php $text =  Helper::text(165) @endphp
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Relax Paket">
                        <div class="card-body">
                          @isset($text->title)
                          <h5>{{$text->title}}</h5>
                          @endisset
                          @isset($text->text)
                          <p class="txt">
                              {!!$text->text!!}
                          </p>
                          @endisset
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  @php $text =  Helper::text(166) @endphp
                    <div class="card" data-aos="fade-up" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Detox Paket">
                        <div class="card-body">
                          @isset($text->title)
                          <h5>{{$text->title}}</h5>
                          @endisset
                          @isset($text->text)
                          <p class="txt">
                              {!!$text->text!!}
                          </p>
                          @endisset
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  @php $text =  Helper::text(167) @endphp
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset("storage/".$text->image)}}" class="card-img-top" alt="Back to Nature">
                        <div class="card-body">
                          @isset($text->title)
                          <h5>{{$text->title}}</h5>
                          @endisset
                          @isset($text->text)
                          <p class="txt">
                              {!!$text->text!!}
                          </p>
                          @endisset
                        </div>
                      </div>
                </div>
            </div>
            </div>
            </section>
</main>

@endsection
