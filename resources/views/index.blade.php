@extends('layouts.app')
    @section('title', Helper::title(1))
    @section('description', Helper::description(1))
    @section('content')
    <main>
        @php $text =  Helper::text(4) @endphp
          <section class="hero">
            <video autoplay muted loop preload="none" id="hero-video" poster="{{asset('assets/images/hero-img.jpg')}}">
              <source data-src="assets/videos/hero.mp4" type="video/webm" />
          </video> 

          {{-- <iframe
            src="https://www.youtube.com/embed/vojf_H2lLK4?autoplay=1&mute=1&controls=0&loop=1&playlist=vojf_H2lLK4&modestbranding=1&rel=0&v={{ time() }}"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
          </iframe> --}}
              <div class="overlay"></div>

              <div class="container">
                  <div class="content-wrapper">
                      @if($text->subtitle!='')<h4 data-aos="fade-down" data-aos-delay="250" data-aos-duration="1500">{{ $text->subtitle }}</h4> @endif
                      @if($text->title!='')<h1 data-aos="zoom-in" data-aos-delay="750" data-aos-duration="2000">{{ $text->title }}</h1> @endif 
                  </div>
              </div>
          </section>

          @include('partials/booking')

          @php
              $sliderPackages = App\Models\Package::where('is_active', 1)
                  ->whereNotNull('image')
                  ->where('image', '!=', '')
                  ->whereNotNull('link')
                  ->where('link', '!=', '')
                  ->orderBy('id', 'DESC')
                  ->get();
          @endphp
          @if($sliderPackages->isNotEmpty())
          <section class="packages-slider-section">
              <div class="container">
                @php $text =  Helper::text(12) @endphp
                @isset($text->title)
                <h2 class="title-smaller mb-5" data-aos="fade-right" data-aos-duration="800">{{$text->title}}</h2>                    
                @endisset
              </div>
              <div class="container-fluid packages-slider-container">
                  <div class="packages-slider">
                      @foreach($sliderPackages as $package)
                      <div class="packages-slide">
                          <a href="{{ str_starts_with($package->link, 'http') ? $package->link : Helper::url($package->link) }}" class="packages-slide-link">
                              <div class="packages-slide-image">
                                  <img src="{{ Helper::image($package->image, 1920, 810, false) }}" alt="{{ $package->title }}" loading="lazy">
                              </div>
                              <h3 class="packages-slide-title">{{ $package->title }}</h3>
                          </a>
                      </div>
                      @endforeach
                  </div>
              </div>
          </section>
          @endif

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
          @php $text =  Helper::text(6) @endphp
          <section class="villa-termag vt-1">
              <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div class="container">
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

          <section class="wellness-spa">
            @php $text =  Helper::text(7) @endphp
              <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
            <!-- <video autoplay muted loop preload="none" id="ukus-jahorine" poster="{{asset('assets/images/ukus-jahorine.png')}}">
              <source data-src="https://termag.soft4tech.com/assets/videos/ukus-jahorine.webm" type="video/webm" />
          </video>-->
          {{-- <iframe
            src="https://www.youtube.com/embed/y2NBVIgTY5g?autoplay=1&mute=1&controls=0&loop=1&playlist=y2NBVIgTY5g&modestbranding=1&rel=0&v={{ time() }}"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
          </iframe> --}}
          @php $text =  Helper::text(8) @endphp
          <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div class="container">
                  <div>
                      <div class="cardd " data-aos="fade-right" data-aos-duration="600">
                        @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                        @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
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
              <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div class="container-fluid">
                  <div class="cardd ">
                    @isset($text->title)<h2>{{$text->title}}</h2> @endisset
                    @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                    @isset($text->text)
                        {!! $text->text !!}                        
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
y          </section>

          
          <section class="wellness-spa skijanje">
            @php $text =  Helper::text(10) @endphp
              <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
              <div>
                  <img class="img-fluid" src="{{asset('assets/images/ski-1.png')}}" alt="skijanje" loading="lazy" >
                  <img class="img-fluid" src="{{asset('assets/images/ski-2.png')}}" alt="skijanje" loading="lazy" >
                  <img class="img-fluid" src="{{asset('assets/images/ski-3.png')}}" alt="skijanje" loading="lazy">
              </div>
             
              <div class="container">
                  <div class="cardd " data-aos="fade-left" data-aos-duration="600">
                    @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                    @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                      @isset($text->text)
                          {!!$text->text!!}
                      @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                  </div>
              </div>
          </section>

          <section class="wellness-spa konf-sala aktivni-izazov">
            <!-- <video autoplay muted loop preload="none" id="planinarenje" poster="{{asset('assets/images/planinarenje.png')}}">
              <source data-src="https://termag.soft4tech.com/assets/videos/termag-izazovi.webm" type="video/webm" />
          </video> -->
          {{-- <iframe
            src="https://www.youtube.com/embed/sfGiP9BPm_M?autoplay=1&mute=1&controls=0&loop=1&playlist=sfGiP9BPm_M&modestbranding=1&rel=0&v={{ time() }}"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
          </iframe> --}}
          @php $text =  Helper::text(11) @endphp
          <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>

              <div class="container-fluid">
                  <div class="cardd">
                        @isset($text->title)<h2>{{$text->title}}</h2>@endisset
                        @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                        @isset($text->text)
                            {!!$text->text!!}
                        @endisset
                        @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                  </div>
              </div>
          </section>

          <section class="special">
              <div class="bg center" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
              <div class="container">
                @php $text =  Helper::text(12) @endphp
                @isset($text->title)
                <h2 class="title-smaller" data-aos="fade-right" data-aos-duration="800">{{$text->title}}</h2>                    
                @endisset
                @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                @isset($text->text)
                    {!!$text->text!!}
                @endisset

                @php
                    $specialOfferSlides = App\Models\SpecialOfferSlider::where('is_active', 1)
                        ->whereNotNull('link')
                        ->where('link', '!=', '')
                        ->orderBy('priority', 'asc')
                        ->orderBy('id', 'asc')
                        ->get();
                @endphp
                @if($specialOfferSlides->isNotEmpty())
                <div class="special-offers-slider-wrap">
                    <div class="container-fluid special-offers-slider-container">
                        <div class="special-offers-slider">
                            @foreach($specialOfferSlides as $slide)
                            <div class="special-offers-slide">
                                <a href="{{ str_starts_with($slide->link, 'http') ? $slide->link : Helper::url($slide->link) }}" class="special-offers-slide-link">
                                    <div class="special-offers-slide-career">
                                        <div class="bg center" style="background-image: url('{{ Helper::image($slide->image, 1920, 810, false) }}');"></div>
                                        <div class="container">
                                            <div class="content-wrapper">
                                                @if($slide->title)
                                                <h1>{{ $slide->title }}</h1>
                                                @endif
                                                @if($slide->subtitle)
                                                <p>{{ $slide->subtitle }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card" data-aos="zoom-in" data-aos-duration="800">
                              <div class="row">
                                  <div class="col-lg-5">
                                       @php $text =  Helper::text(13) @endphp
                                       @isset($text->title)
                                       <h5>{{$text->title}}</h5>                                           
                                       @endisset
                                       @isset($text->subtitle)<p><strong>{{$text->subtitle}}</strong></p>@endisset
                                      @isset($text->text)
                                          {!! $text->text !!}
                                      @endisset
                                      <div>
                                            @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_gold">{{$text->urlTitle}}</a>@endif
                                      </div>
                                  </div>
                                  <div class="col-lg-7">
                                      <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
            const videos = document.querySelectorAll("video");
            
            videos.forEach((video) => {
                const source = video.querySelector("source");
                const dataSrc = source.getAttribute("data-src");
                
                if (dataSrc) {
                    source.src = dataSrc;
                    video.load();
                }
            });
        });
    </script>           
    @endsection