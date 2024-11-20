@extends('layouts.app')
    @section('title', Helper::title(1))
    @section('description', Helper::description(1))
    @section('content')
    <main>
        @php $text =  Helper::text(4) @endphp
          <section class="hero">
              <video autoplay muted loop>
                  <source
                      src="{{ asset('assets/videos/hero.webm') }}"
                      type="video/mp4"
                  />
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
              <div class="container">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="content-wrapper" data-aos="fade-right" data-aos-duration="600">
                          <h4 class="subtitle">Luksuz i ugođaj u savršenom skladu</h4>
                          <h2 class="title">Smještaj Hotela</h2>
                          <p class="txt">Nasa ponuda uključuje 71 sobu i 21 apartman uključujući i ekskluzivni predsjednički apartman. Svaka smještajna jedinica u našem hotelu je dizajnirana sa posebnom pažnjom uz akcenat na ručno izrađenom drvenom namještaju i rustičnim elementima koji savršeno dočaravaju idiličnu planinsku atmosferu. Od SUPERIOR apartmana sa francuskim ležajevima do FAMILY apartmana koji su idealni za porodični odmor, svaki apartman nudi vrhunski komfor, modernu opremljenost brzim internetom, kablovskom tv i mini barom. Doživite nezaboravne trenutke u Termag hotelu gdje svaki detalj govori priču o gostoprimstvu i toplini.</p>
                          <a href="#" class="btnn btn_gold">Saznaj više</a>
                      </div>
                      </div>
                      <div class="col-lg-7"></div>
                  </div>
              </div>
          </section>

          <section class="villa-termag vt-1">
              <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
              <div class="container">
                  <div>
                      <div class="cardd " data-aos="fade-right" data-aos-duration="600">
                          <h2>Villa Termag  (H3)</h2>
                          <p class="txt mb-4">
                              Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                          </p>
                          <p class="txt">
                              Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.

                          </p>
                          <a href="#" class="btnn btn_primary">Book now</a>
                      </div>
                      <img  class="img-fluid" src="{{asset('assets/images/villa-termag-inner.jpg')}}" alt="villa termag">
                  </div>
              </div>
          </section>

          <section class="wellness-spa">
              <div class="bg" style="background-image: url('{{asset("assets/images/wellness-spa-bg.jpg")}}');"></div>
              <div class="container">
                  <div class="cardd " data-aos="fade-left" data-aos-duration="800">
                      <h2>Wellness & Spa</h2>
                      <p class="txt mb-4">
                          Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                      <p class="txt">
                          Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                      </p>
                      <a href="#" class="btnn btn_gold">Saznaj Više</a>
                  </div>
              </div>
          </section>

          <section class="villa-termag ukus-jahorine">
              <video autoplay muted loop>
                  <source
                      src="{{ asset('assets/videos/ukus-jahorine.mov') }}"
                      type="video/mp4"
                  />
              </video>
              <div class="container">
                  <div>
                      <div class="cardd " data-aos="fade-right" data-aos-duration="600">
                          <h2>Ukus Jahorine</h2>
                          <p class="txt mb-4">
                              Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                          </p>
                          <p class="txt">
                              Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.

                          </p>
                          <a href="#" class="btnn btn_primary">Book now</a>
                      </div>
                  </div>
              </div>
          </section>

          <section class="abonos">
              <div class="bg center" style="background-image: url('{{asset("assets/images/abonos-bg.jpg")}}');"></div>
          </section>

          <section class="wellness-spa konf-sala">
              <div class="bg" style="background-image: url('{{asset("assets/images/konf-sala-bg.jpg")}}');"></div>
              <div class="container-fluid">
                  <div class="cardd ">
                      <h2>Konferencijska sala</h2>
                      <p class="txt mb-4">
                          Konferencijska sala Hotela Termag na Jahorini predstavlja savršen prostor za poslovne i društvene događaje. Sala je dizajnirana sa autentičnim stilom i opremljena najsavremenijom tehnologijom. Posjeduje kapacitet do 350 ljudi u bioskopskoj postavci, a zahvaljujući fleksibilnom dizajnu može se podijeliti na četiri manje sale, svaka sa prirodnom osvjetljenošću. 
                      <p class="txt">
                          Odvojena od hotelskih barova i restorana, pruža idealne uslove za rad i koncentraciju, a istovremeno nudi različite mogućnosti za organizaciju poslovnih sastanaka, obuka, svečanih prijemа, kulturnih i naučnih skupova, kao i privatnih proslava. Tehnička oprema uključuje projektor, platno, kabine za simultano prevođenje i profesionalno osvetljenje, uz besplatan Wi-Fi. Profesionalni tim Hotela Termag ima bogato iskustvo u organizaciji raznovrsnih događaja, što potvrđuju zadovoljni klijenti poput Američke i Britanske ambasade u BiH, OSCE, USAID, kao i mnoge poznate korporacije.
                      </p>
                      <a href="#" class="btnn btn_primary">Book Now</a>
                  </div>
              </div>
          </section>

          
          <section class="wellness-spa skijanje">
              <div class="bg" style="background-image: url('{{asset("assets/images/skijasko-carstvo-bg.jpg")}}');"></div>
              <div>
                  <img class="img-fluid" src="{{asset('assets/images/ski-1.png')}}" alt="skijanje">
                  <img class="img-fluid" src="{{asset('assets/images/ski-2.png')}}" alt="skijanje">
                  <img class="img-fluid" src="{{asset('assets/images/ski-3.png')}}" alt="skijanje">
              </div>
             
              <div class="container">
                  <div class="cardd " data-aos="fade-left" data-aos-duration="600">
                      <h2>Skijaško Carstvo</h2>
                      <p class="txt mb-4">
                          Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                      <p class="txt">
                          Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                      </p>
                      <a href="#" class="btnn btn_primary">Book Now</a>
                  </div>
              </div>
          </section>

          <section class="wellness-spa konf-sala aktivni-izazov">
              <video autoplay muted loop>
                  <source
                      src="{{ asset('assets/videos/termag-izazovi.mp4') }}"
                      type="video/mp4"
                  />
              </video>
              <div class="container-fluid">
                  <div class="cardd">
                      <h2>Termag Aktivni Izazovi</h2>
                      <p class="txt">
                          U hotelu Termag radimo na jačanju timskog duha i unapređenju sportskih vještina. Kroz aktivnosti i izazove zajedno promovišemo sportski duh, timsku saradnju, ali i jačamo energiju ekipe. Tu smo da vam ponudimo organizaciju team buildinga, challenge race-a, triatlona, biciklizma, hikinga… Ovi izazovi nisu samo fizičke aktivnosti nego i prilika za druženje i izgradnju boljih međuljudskih odnosa kroz radost zdravog življenja.
                      </p>
                      <a href="#" class="btnn btn_primary">Book Now</a>
                  </div>
              </div>
          </section>

          <section class="special">
              <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
              <div class="container">
                  <h2 class="title-smaller" data-aos="fade-right" data-aos-duration="800">Specijalne Usluge</h2>
                  <p class="txt" data-aos="fade-right" data-aos-duration="800">
                      Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo planinske tradicije. Od SUPERIOR apartmana sa francuskim ležajevima do FAMILY apartmana idealnih za porodični odmor, svaki apartman nudi vrhunski komfor, modernu opremljenost sa brzim internetom, kablovskom TV i mini barom. Doživite nezaboravne trenutke u Termag hotelu, gde svaki detalj govori priču o gostoprimstvu i toplini.
                  </p>

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
                                      <h5>✈️ Prevoz sa aerodroma </h5>
                                      <p class="txt">
                                          Udobnost i zadovoljstvo naših gostiju nam je na prvom mjestu, zato smo odlučili da vam brige oko putovanja svedemo na minimum. Zbog toga smo organizovali uslugu prevoza sa aerodroma do našeg hotela, kako biste iskustvo bezbrižnog boravka u hotelu Termag započeli što ranije. Vaše je da uživate u putovanju, naše je da se brinemo o svim detaljima.
                                      </p>
                                      <div>
                                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                      </div>
                                  </div>
                                  <div class="col-lg-7">
                                      <div class="bg" style="background-image: url('{{asset("assets/images/special-6.jpg")}}');"></div>
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