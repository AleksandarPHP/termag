@extends('layouts.app')
    @section('title', Helper::title(1))
    @section('description', Helper::description(1))
    @section('content')
    <main>
        @php $text =  Helper::text(4) @endphp
          <section class="hero">
            <video autoplay muted loop id="hero-video">
              <source
                  data-src="https://termag.soft4tech.com/assets/videos/hero.webm"
                  type="video/webm"
              />
          </video>
          
          <script>
              document.addEventListener("DOMContentLoaded", () => {
                  const video = document.getElementById("hero-video");
                  const source = video.querySelector("source");
                  source.src = source.getAttribute("data-src");
                  video.load();
              });
          </script>
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
                        <img  class="img-fluid" src="{{asset('storage/'.$text->image)}}" alt="{{$text->title}}">
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
              <video autoplay muted loop id="ukus-jahorine-video" loop>
                  <source
                      src="{{ asset('assets/videos/ukus-jahorine.webm') }}"
                      type="video/mp4"
                  />
              </video>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const video = document.getElementById("ukus-jahorine-video");
                    const source = video.querySelector("source");
                    source.src = source.getAttribute("data-src");
                    video.load();
                });
            </script>
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
              <div class="bg" style="background-image: url('{{asset("assets/images/skijasko-carstvo-bg.jpg")}}');"></div>
              <div>
                  <img class="img-fluid" src="{{asset('assets/images/ski-1.png')}}" alt="skijanje">
                  <img class="img-fluid" src="{{asset('assets/images/ski-2.png')}}" alt="skijanje">
                  <img class="img-fluid" src="{{asset('assets/images/ski-3.png')}}" alt="skijanje">
              </div>
             
              <div class="container">
                @php $text =  Helper::text(10) @endphp
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
              <video autoplay muted loop id="aktivni-izazov-video"> 
                  <source
                      src="{{ asset('assets/videos/termag-izazovi.webm') }}"
                      type="video/mp4"
                  />
              </video>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const video = document.getElementById("aktivni-izazov-video");
                    const source = video.querySelector("source");
                    source.src = source.getAttribute("data-src");
                    video.load();
                });
            </script>
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

                  <div class="row">
                      <div class="col-lg-6">
                          <div class="card" data-aos="fade-right" data-aos-duration="800">
                              <img src="{{asset('assets/images/special-1.jpg')}}" class="card-img-top" alt="porodicni paket">
                              <div class="card-body">
                                <h5>Porodični Paket</h5>
                                <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag.</p>
                                <div>
                                  <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="card" data-aos="fade-left" data-aos-duration="800">
                              <img src="{{asset('assets/images/special-2.jpg')}}" class="card-img-top" alt="Romantični Paket">
                              <div class="card-body">
                                <h5>Porodični Paket</h5>
                                <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag.</p>
                                <div>
                                  <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                </div>
                              </div>
                            </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-4">
                          <div class="card" data-aos="fade-right" data-aos-duration="800">
                              <img src="{{asset('assets/images/special-3.jpg')}}" class="card-img-top" alt="Relax Paket">
                              <div class="card-body">
                                <h5>Relax Paket</h5>
                                <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                <div>
                                  <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card" data-aos="fade-up" data-aos-duration="800">
                              <img src="{{asset('assets/images/special-4.jpg')}}" class="card-img-top" alt="Detox Paket">
                              <div class="card-body">
                                <h5>Detox Paket</h5>
                                <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                <div>
                                  <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card" data-aos="fade-left" data-aos-duration="800">
                              <img src="{{asset('assets/images/special-5.jpg')}}" class="card-img-top" alt="Back to Nature">
                              <div class="card-body">
                                <h5>Back to Nature</h5>
                                <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                <div>
                                  <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                </div>
                              </div>
                            </div>
                      </div>
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
    @endsection