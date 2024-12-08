@extends('layouts.app')
    @section('title', Helper::title(1))
    @section('description', Helper::description(1))
    @section('content')
    <main>
        @php $text =  Helper::text(4) @endphp
          <section class="hero">
            <video autoplay muted loop preload="none" id="hero-video" poster="{{asset('assets/images/hero-img.jpg')}}">
              <source data-src="https://termag.soft4tech.com/assets/videos/hero.webm" type="video/webm" />
          </video>
              <div class="overlay"></div>

              <div class="container">
                  <div class="content-wrapper">
                      @if($text->subtitle!='')<h4 data-aos="fade-down" data-aos-delay="250" data-aos-duration="1500">{{ $text->subtitle }}</h4> @endif
                      @if($text->title!='')<h1 data-aos="zoom-in" data-aos-delay="750" data-aos-duration="2000">{{ $text->title }}</h1> @endif 
                  </div>
              </div>
          </section>

          @include('partials/booking')

          <section class="accommodation">
            @php $text =  Helper::text(5) @endphp
              <div class="container">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="content-wrapper" data-aos="fade-right" data-aos-duration="600">
                          @if($text->subtitle!='')<h4 class="subtitle">{{ $text->subtitle }}</h4> @endif
                          @if($text->title!='')<h2 class="title">{{ $text->title }}</h2>@endif 
                          @isset($text->text)
                            {!! $text->text !!}
                          @endisset
                          @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                        </div>
                      </div>
                      <div class="col-lg-7"></div>
                  </div>
              </div>
          </section>

          <section class="villa-termag vt-1">
              <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
              <div class="container">
                @php $text =  Helper::text(6) @endphp
                  <div>
                      <div class="cardd " data-aos="fade-right" data-aos-duration="600">
                          @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                          @isset($text->text)
                              {!! $text->text !!}
                          @endisset
                          @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                      </div>
                      @isset($text->image)
                        <img  class="img-fluid" src="{{asset('storage/'.$text->image)}}" alt="{{$text->title}}" loading="lazy">
                      @endisset
                  </div>
              </div>
          </section>

          <section class="wellness-spa">
            @php $text =  Helper::text(7) @endphp
              <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div class="container">
                  <div class="cardd " data-aos="fade-left" data-aos-duration="800">
                    @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                    @isset($text->text)
                        {!!$text->text!!}                        
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                  </div>
              </div>
          </section>

          <section class="villa-termag ukus-jahorine">
            <video autoplay muted loop preload="none" id="ukus-jahorine" poster="{{asset('assets/images/ukus-jahorine.png')}}">
              <source data-src="https://termag.soft4tech.com/assets/videos/ukus-jahorine.webm" type="video/webm" />
          </video>           
              <div class="container">
                @php $text =  Helper::text(8) @endphp
                  <div>
                      <div class="cardd " data-aos="fade-right" data-aos-duration="600">
                        @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                        @isset($text->text)
                            {!! $text->text !!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                      </div>
                  </div>
              </div>
          </section>

          <section class="abonos">
              <div class="bg center" style="background-image: url('{{asset("assets/images/abonos-bg.jpg")}}');"></div>
          </section>

          <section class="wellness-spa konf-sala">
            @php $text =  Helper::text(9) @endphp
              <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div class="container-fluid">
                  <div class="cardd ">
                    @isset($text->title)<h2>{{$text->title}}</h2> @endisset
                    @isset($text->text)
                        {!! $text->text !!}                        
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
y          </section>

          
          <section class="wellness-spa skijanje">
            @php $text =  Helper::text(10) @endphp
              <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div>
                  <img class="img-fluid" src="{{asset('assets/images/ski-1.png')}}" alt="skijanje" loading="lazy" >
                  <img class="img-fluid" src="{{asset('assets/images/ski-2.png')}}" alt="skijanje" loading="lazy" >
                  <img class="img-fluid" src="{{asset('assets/images/ski-3.png')}}" alt="skijanje" loading="lazy">
              </div>
             
              <div class="container">
                  <div class="cardd " data-aos="fade-left" data-aos-duration="600">
                    @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                      @isset($text->text)
                          {!!$text->text!!}
                      @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                  </div>
              </div>
          </section>

          <section class="wellness-spa konf-sala aktivni-izazov">
            <video autoplay muted loop preload="none" id="planinarenje" poster="{{asset('assets/images/planinarenje.png')}}">
              <source data-src="https://termag.soft4tech.com/assets/videos/termag-izazovi.webm" type="video/webm" />
          </video>
              <div class="container-fluid">
                  <div class="cardd">
                    @php $text =  Helper::text(11) @endphp
                        @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                  </div>
              </div>
          </section>

          <section class="special">
              <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
              <div class="container">
                @php $text =  Helper::text(12) @endphp
                @isset($text->title)
                <h2 class="title-smaller" data-aos="fade-right" data-aos-duration="800">{{$text->title}}</h2>                    
                @endisset
                @isset($text->text)
                    {!!$text->text!!}
                @endisset

                @php
                    $packages = App\Models\Package::where('is_active', 1)->orderBy('id', 'DESC')->take(2)->get();
                @endphp
                  <div class="row">
                    @if ($packages)
                    @foreach ($packages as $package)
                      <div class="col-lg-6">
                        <div class="card" data-aos="fade-right" data-aos-duration="800">
                            <img src="{{asset("storage/".$package->image)}}" class="card-img-top" alt="porodicni paket" loading="lazy">
                            <div class="card-body">
                              <h5>{{$package->title}}</h5>
                              <p class="txt">
                                {!!$package->text!!}
                              </p>
                              <div>
                                @if($package->urlTitle!='' && $package->url)<a href="{{Helper::url($package->url)}}" class="btnn btn_gold">{{$package->urlTitle}}</a>@endif
                              </div>
                            </div>
                          </div>
                      </div>
                    @endforeach
                    @endif
                  </div>

                  <div class="row">
                    @php
                      $packages = App\Models\Package::where('is_active', 1)->orderBy('id', 'DESC')->get()->skip(2);
                    @endphp
                        @if ($packages)
                        @foreach ($packages as $package)
                      <div class="col-lg-4">
                          <div class="card" data-aos="fade-right" data-aos-duration="800">
                              <img src="{{asset("storage/".$package->image)}}" class="card-img-top" alt="Relax Paket" loading="lazy">
                              <div class="card-body">
                                <h5>{{$package->title}}</h5>
                                <p class="txt">
                                  {!!$package->text!!}
                                </p>
                                <div>
                                  @if($package->urlTitle!='' && $package->url)<a href="{{Helper::url($package->url)}}" class="btnn btn_gold">{{$package->urlTitle}}</a>@endif
                                </div>
                              </div>
                            </div>
                      </div>
                      @endforeach
                      @endif
                  </div>

                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card" data-aos="zoom-in" data-aos-duration="800">
                              <div class="row">
                                  <div class="col-lg-5">
                                       @php $text =  Helper::text(13) @endphp
                                       @isset($text->title)
                                       <h5>{{$text->title}}</h5>                                           
                                       @endisset
                                      @isset($text->text)
                                          {!! $text->text !!}
                                      @endisset
                                      <div>
                                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                      </div>
                                  </div>
                                  <div class="col-lg-7">
                                      <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </main>
      @include('partials/socials') 
      <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Select all video elements
            const videos = document.querySelectorAll("video");
            
            videos.forEach((video) => {
                const source = video.querySelector("source");
                const dataSrc = source.getAttribute("data-src");
                
                // Apply lazy loading if data-src exists
                if (dataSrc) {
                    source.src = dataSrc;
                    video.load();
                }
            });
        });
    </script>           
    @endsection