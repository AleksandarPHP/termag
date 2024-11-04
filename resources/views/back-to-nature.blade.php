@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/btn.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1>Back to Nature</h1>
                <p>
                Promjenite svakodnevnu rutinu i uronite u stanje potpunog blaženstva i opuštanja tokom odmora u našem hotelu.
                U našem Wellnes&Spa centru doživite čari bezbrižnog odmora i uživanja u mirnom planinskom okruženju.
                </p>
            </div>
        </div>
    </section>

    <section class="special registration packages" style="padding-top: 0">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
            <div class="container">
    
      <div class="porodicni-paket text-center">
        <h2 class="title-smaller">Back to Nature</h2>
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
                <div class="col-lg-6">
                    <div>
                        <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                        <p>
                            Djeca do 12 godina Borave GRATIS
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
                        <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                        <p>
                            Slobodno korišćenje bazena, saune i parnog kupatila
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
                        <img src="{{asset('assets/images/ri-23.svg')}}" alt="ikonica">
                        <p>
                            Slobodno korišćenje bicikala tokom boravka
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                        <p>
                            2 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
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
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                            <p>
                                Djeca do 12 godina Borave GRATIS
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
                            <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                            <p>
                                Slobodno korišćenje bazena, saune i parnog kupatila
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
                            <img src="{{asset('assets/images/ri-23.svg')}}" alt="ikonica">
                            <p>
                                Slobodno korišćenje bicikala tokom boravka
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                            <p>
                                2 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
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

@include('partials/footer')