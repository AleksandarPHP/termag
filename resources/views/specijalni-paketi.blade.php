@extends('layouts.app')
    @section('title', Helper::title(173))
    @section('description', Helper::description(173))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(174) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    <section class="special registration packages">
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
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                    <p>
                                        Slobodno korišćenje bazena, saune i parnog kupatila
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                    <p>
                                        Polupansion (Večera, Doručak)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                    <p>
                                        1 x romantična večera uz svijeće i bocu šampanjca.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                    <p>
                                        Bademantil i papuče tokom boravka u hotelu.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                    <p>
                                        PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                    <p>
                                        1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                    <p>
                                        Kutija čokoladica za toplu dobrodošlicu
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                    <p>
                                        1 x tretman čokoladom (po osobi).
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                    <p>
                                        1x Doručak u Sobi 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                        <p>
                                            Slobodno korišćenje bazena, saune i parnog kupatila
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                        <p>
                                            Polupansion (Večera, Doručak)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                        <p>
                                            1 x romantična večera uz svijeće i bocu šampanjca.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                        <p>
                                            Bademantil i papuče tokom boravka u hotelu.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                        <p>
                                            PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                        <p>
                                            1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                        <p>
                                            Kutija čokoladica za toplu dobrodošlicu
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                        <p>
                                            1 x tretman čokoladom (po osobi).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                        <p>
                                            1x Doručak u Sobi 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                            <p>
                                                Slobodno korišćenje bazena, saune i parnog kupatila
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                            <p>
                                                Polupansion (Večera, Doručak)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                            <p>
                                                1 x romantična večera uz svijeće i bocu šampanjca.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                            <p>
                                                Bademantil i papuče tokom boravka u hotelu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                            <p>
                                                PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                            <p>
                                                1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                            <p>
                                                Kutija čokoladica za toplu dobrodošlicu
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                            <p>
                                                1 x tretman čokoladom (po osobi).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                            <p>
                                                1x Doručak u Sobi 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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

                 <!-- porodični paket -->
                 <div class="porodicni-paket text-center">
                    <h2 class="title-smaller">Porodični Paketi</h2>
                    <p class="txt">
                     Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo pla
                    </p>
                    <nav class="pills-wrapper">
                        <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                        <button class="nav-link active" id="nav-home-tab2" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2 noći</button>
                        <button class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">3 noći</button>
                        </div>
                    </nav>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <h3>Paket Za 2 Noći</h3>
                        <div class="row row-2">
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                                    <p>
                                        Djeca do 12 godina Borave GRATIS
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                    <p>
                                        Polupansion (Večera, Doručak)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                    <p>
                                        Slobodno korišćenje bazena, saune i parnog kupatila
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                    <p>
                                        Bademantil i papuče tokom boravka u hotelu.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-23.svg')}}" alt="ikonica">
                                    <p>
                                        Slobodno korišćenje bicikala tokom boravka
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                    <p>
                                        2 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                    <p>
                                        Kutija čokoladica za toplu dobrodošlicu
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
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

                    <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="tab-pane fade show active" id="nav-profile2" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h3>Paket Za 3 Noći</h3>
                            <div class="row row-2">
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                                        <p>
                                            Djeca do 12 godina Borave GRATIS
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                        <p>
                                            Polupansion (Večera, Doručak)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                        <p>
                                            Slobodno korišćenje bazena, saune i parnog kupatila
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                        <p>
                                            Bademantil i papuče tokom boravka u hotelu.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-23.svg')}}" alt="ikonica">
                                        <p>
                                            Slobodno korišćenje bicikala tokom boravka
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                        <p>
                                            2 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                        <p>
                                            Kutija čokoladica za toplu dobrodošlicu
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
</main>

@endsection
