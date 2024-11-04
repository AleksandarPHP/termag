@include('partials/header')

<main>
    <section class="career career-2">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/romance.mp4') }}"
                type="video/mp4"
            />
        </video>

        <div class="container">
            <div class="content-wrapper">
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">-- Specijalne Usluge</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">Romantični Paket</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">Romansa u Termag-u - bijeg u zajednički raj</p>
                <a href="#" class="btnn btn_primary mt-5" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1200">Book now</a>
            </div>
        </div>
    </section>
    @include('partials/booking')

    <section class="special registration packages packages-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-smaller">Romantični Paket</h2>
                    <p class="txt">
                    Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo pla
                    </p>
                        <nav class="pills-wrapper">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2 noći/ 3 dana</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">3 noći/ 4 dana</button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">4 noći/ 5 dana</button>
                            </div>
                          </nav>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <h3>Paket Za 2 Noći/ 3 Dana:</h3>
                        <p class="txt">
                            Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                        </p>
                        <div class="row row-2">
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                    <p>
                                        Slobodno korišćenje bazena, saune i parnog kupatila
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                    <p>
                                        Polupansion (Večera, Doručak)
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                    <p>
                                        1 x romantična večera uz svijeće i bocu šampanjca.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                    <p>
                                        Bademantil i papuče tokom boravka u hotelu.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                    <p>
                                        PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                    <p>
                                        1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                    <p>
                                        Kutija čokoladica za toplu dobrodošlicu
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                    <p>
                                        1 x tretman čokoladom (po osobi).
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                    <p>
                                        1x Doručak u Sobi 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                    <p>
                                        Kasna odjava do 14h na dan odlaska
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <p class="txt">
                                CIJENA PAKETA JE 680,00 KM (348,00 EUR) + bto
                            </p>
                            <p class="txt">
                                *Paket važi od 01.04. do 01.12.
                            </p>
                            <a href="#" class="btnn btn_primary mt-4">Book now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h3>Paket Za 3 Noći/ 4 Dana:</h3>
                            <p class="txt">
                                Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                            </p>
                            <div class="row row-2">
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                        <p>
                                            Slobodno korišćenje bazena, saune i parnog kupatila
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                        <p>
                                            Polupansion (Večera, Doručak)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                        <p>
                                            1 x romantična večera uz svijeće i bocu šampanjca.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                        <p>
                                            Bademantil i papuče tokom boravka u hotelu.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                        <p>
                                            PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                        <p>
                                            1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                        <p>
                                            Kutija čokoladica za toplu dobrodošlicu
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                        <p>
                                            1 x tretman čokoladom (po osobi).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                        <p>
                                            1x Doručak u Sobi 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                        <p>
                                            Kasna odjava do 14h na dan odlaska
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <p class="txt">
                                    CIJENA PAKETA JE 1020,00 KM (521,50 EUR) + bto
                                </p>
                                <p class="txt">
                                    *Paket važi od 01.04. do 01.12.
                                </p>
                                <a href="#" class="btnn btn_primary mt-4">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <h3>Paket Za 3 Noći/ 4 Dana:</h3>
                                <p class="txt">
                                    Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                                </p>
                                <div class="row row-2">
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                            <p>
                                                Slobodno korišćenje bazena, saune i parnog kupatila
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                            <p>
                                                Polupansion (Večera, Doručak)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                            <p>
                                                1 x romantična večera uz svijeće i bocu šampanjca.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                            <p>
                                                Bademantil i papuče tokom boravka u hotelu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                            <p>
                                                PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                            <p>
                                                1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                            <p>
                                                Kutija čokoladica za toplu dobrodošlicu
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                            <p>
                                                1 x tretman čokoladom (po osobi).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                            <p>
                                                1x Doručak u Sobi 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                            <p>
                                                Kasna odjava do 14h na dan odlaska
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <p class="txt">
                                        CIJENA PAKETA JE 1020,00 KM (521,50 EUR) + bto
                                    </p>
                                    <p class="txt">
                                        *Paket važi od 01.04. do 01.12.
                                    </p>
                                    <a href="#" class="btnn btn_primary mt-4">Book now</a>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
    </section>

    <section class="wellness-spa aktivni-izazov">
               <video  autoplay loop muted  src="{{asset('assets/videos/romance-2.mp4')}}"></video>
                <div class="container">
                    <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                        <h2>Specijalne Ponude</h2>
                        <p class="txt">
                        Uz specijalne ponude hotela Termag, doživite romantične momente. Svaki detalj je pažljivo osmišljen od romantičnog dočeka i smještaja u luksuzne smještajne jedinice pa do romantične večere uz flašu vina i svijeće. Uživajte u opuštajućoj kupki, relax masaži aromatičnim uljima i momentima u našem spa centru. Ukoliko ste aktivan par, vožnja biciklima po nestvarnim predjelima Jahorine će biti puno pogodak. Doručak za naše zaljubljene parove služimo u sobi, a postoji i mogućnost kasne odjave, kako biste što duže uživali u romantici.
                        </p>
                        <a href="#" class="btnn btn_primary">Book now</a>
                    </div>
                </div>
            </section>

            <section class="villa-termag ukus-jahorine">
                <video autoplay muted loop>
                    <source
                        src="{{ asset('assets/videos/candle.mp4') }}"
                        type="video/mp4"
                    />
                </video>
                <div class="container">
                    <div>
                        <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                            <h2>Romantični Paket</h2>
                            <p class="txt">
                            Doživite čaroliju ljubavi u intimnoj atmosferi hotela Termag. Stvorite nezaboravne momente u potpunoj privatnosti sa svojom voljenom osobom. Priredićemo vam večeru u intimnom kutku restorana ili ćemo vam obezbjediti intimni spa tretman, kako biste se u potpunosti posvetili vašoj voljenoj osobi i podjelili nezaboravne momente. Romansa paket je namjenjen samo za vas dvoje, zato smo sve osmislili tako da zaljubljeni parovi osjećaju potpunu izolovanost od ostatka svijeta. Jedno je sigurno, ovi momenti će ostati u vašim najdražim uspomenama. Odvojite vaše vrijeme za ljubav i intimnost na Jahorini.
                            </p>
                            <a href="#" class="btnn btn_primary">Book now</a>
                        </div>
                    </div>
                </div>
            </section>
            @include('partials/socials')
            <section class="wellness-spa aktivni-izazov">
               <video  autoplay loop muted  src="{{asset('assets/videos/intimate.mp4')}}"></video>
                <div class="container">
                    <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                        <h2>Intimna Atmosfera</h2>
                        <p class="txt">
                        Ukoliko želite da osvježite romantiku u predivnom ambijentu Jahorine, Romansa paket hotela Termag je tu da ispuni sva vaša očekivanja. U idealnom spoju luksuza i komfora, priredite svojoj voljenoj osobi nezaboravne momente i romantične aranžmane za pamćenje. Podjelite trenutke i stvorite zajedničke uspomene dok uživate u romantičnim šetnjama, danu provedenom u Spa centru, vrhunskoj hrani ili ledenim margaritama u bazenu. Uz pucketanje vatre u kaminu, i ukuse naših vrhunskih vina, nazdravite ljubavi i romansi.
                        </p>
                        <a href="#" class="btnn btn_primary">Book now</a>
                    </div>
                </div>
            </section>

</main>

@include('partials/footer')
