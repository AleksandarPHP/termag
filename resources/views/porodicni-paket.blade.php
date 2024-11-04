@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/fam-hero.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1>Porodični Paket</h1>
                <p>
                    Gastronomska raznolikost i tradicija u restoranu hotela Termag
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <!-- testimonials nema smisla da se nalazi ovde, vise konsultacija -->
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

    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/bazen-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Relax i zabava za cijelu porodicu</h2>
                <p class="txt">
                    Wellnes&Spa uživanje - U našem Wellnes&Spa centru doživite čari bezbrižnog odmora i uživanja u mirnom okruženju u kome će podjednako uživati i roditelji i djeca.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/free.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Besplatan <br/> boravak za <br/> djecu</h2>
                    <p class="txt">
                        Za porodice koje odluče da odmor provedu u hotelu Termag, spremili smo posebne pogodnosti. Djeca do 12 godina starosti u našem hotelu mogu uživati besplatno.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa py-20">
        <div class="bg center" style="background-image: url('{{asset("assets/images/ture.png")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Biciklističke Ture</h2>
                <p class="txt">
                    Biciklističke avanture - Naše biciklističke ture su posebni avanturistički događaji koji su puni smijeha i uzbuđenja.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/food.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Gastronomska ponuda</h2>
                    <p class="txt">
                        Porodični objedi su nešto što sa sobom nosi jednu posebnu crtu bliskosti i tradicije. Naša gastronomska ponuda će biti pravi užitak za sva čula te će porodicama obezbjediti divne momente degustacije ukusnih jela.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                <h2>Nezaboravno Iskustvo</h2>
                <p class="txt">
                    Vaše zadovoljstvo boravka kod nas nam je najbitnije, zato smo sa posebnom pažnjom pristupili svakom detalju planiranja prostora i uređenja. Na taj način smo vam obezbijedili savršene uslove boravka u našim smještajnim jedinicima, te ćemo vam omogućiti odmor za pamćenje. Poklonite nam vaše povjerenje a mi ćemo ispuniti sva vaša očekivanja. 
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-1.jpg')}}" alt="kuglana">
                            <figcaption>Kuglana</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-2.jpg')}}" alt="kuglana">
                            <figcaption>Igraonica za decu</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-3.jpg')}}" alt="kuglana">
                            <figcaption>Foaje</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@include('partials/footer')
