@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/triatlon-bg.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1>Termag Triatlon</h1>
                <p>
                    Termag triatlon je pravi izazov u planinskom raju Jahorine.
                    To je jedinstvena trka koja se održava na Jahorini i Ravnoj
                    planini. Ovaj izazov je namjenjen pravim avanturistima koji
                    uživaju u sportskom nadmetanju. Sastoji se od različitih
                    dinamičkih izazova koji će ispitati granice vaše kondicije i
                    sportske spremnosti.
                </p>
            </div>
        </div>
    </section>
    <section class="booking empty"></section>
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/pripreme-bg.png")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Pripreme za Trku</h2>
                <p class="txt">
                    Pripreme za trku su ključne za postizanje dobrih rezultata na ovom sportskom nadmetanju. Bitno je postaviti ciljeve i odrediti da li želite da oborite svoj lični rekord, da završite trku ili jednostavno samo želite učestvovati i doživjeti novo iskustvo. U skladu sa tim planirate svoj trening i određujete njegovu težinu. Tako ćete raditi na svojoj kondiciji i fizičkoj spremnosti kako biste mogli uspješno da odgovorite svim izazovima koje triatlon trka sa sobom nosi. Prilagodite ishranu svom treningu, unosite dovoljno hranljivih materija i na kraju odmarajte dovoljno. Odmor koji priredite vašem tijelu i mišićima će vam donijeti izuzetnu korist. Ako koristite posebnu opremu, testirajte je i uvjerite se da će vas poslužiti na pravi način tokom trke.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/kategorije-bg.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Kategorije</h2>
                    <p class="txt mb-4">
                        Termag triatlon je dinamična trka koja se održava u nekoliko kategorija. Takmičenje se odvija u individualnoj i ekipnoj konkurenciji. Individualna konkurencija omogućava pojedincima da testiraju svoje granice. Što se tiče ekipne konkurencije broj članova ekipa je ograničen na tri člana. Ova kategorija je dodatno podjeljena prema polu na: mušku, žensku i mješovitu konkurenciju.
                    </p>
                    <p class="txt">
                        U Termag triatlonu moći ćete da se dokažete kroz tri discipline:
                    </p>
                    <ul>
                        <li>vožnja bicikala MTB</li>
                        <li>plivanje preko jezera</li>
                        <li>trčanje sa preprekama</li>
                    </ul>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="special registration">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-smaller">Registracija</h2>
                    <p class="txt">
                        Učestvujte u jedinstvenoj triatlon trci i doživite jedno posebno takmičarsko iskustvo.
                        Registacije su otvorene te se možete prijaviti.
                    </p>
                </div>
              

                <div>
                    <h3>Startni paket:</h3>
                    <p class="txt">
                        Cijena ovog paketa je 40KM, a u cijenu su uključene sledeće pogodnosti:
                    </p>
                </div>

                <div class="row row-2">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-1.svg')}}" alt="ikonica">
                            <p>
                                50% popusta na smještaj u Termag Hotelu (važi za učesnika i jednu osobu u pratnji)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-2.svg')}}" alt="ikonica">
                            <p>
                                Bočica za napitke
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                            <p>
                                Djeca do 12 godina sudjeluju GRATIS
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-4.svg')}}" alt="ikonica">
                            <p>
                                Okrepne stanice
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-5.svg')}}" alt="ikonica">
                            <p>
                                Oficijelni dres
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-6.svg')}}" alt="ikonica">
                            <p>
                                Bonovi za konzumaciju hrane i pića
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-7.svg')}}" alt="ikonica">
                            <p>
                                Finišerska diploma
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-8.svg')}}" alt="ikonica">
                            <p>
                                DJ after party
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-9.svg')}}" alt="ikonica">
                            <p>
                                Osiguranje za takmičare
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-10.svg')}}" alt="ikonica">
                            <p>
                                Elektronska zahvalnica za uspomenu
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-11.svg')}}" alt="ikonica">
                            <p>
                                Babysitting - Tete čuvalice za djecu učesnika trke
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('assets/images/ri-12.svg')}}" alt="ikonica">
                            <p>
                                Animacija za djecu
                            </p>
                        </div>
                    </div>
                </div>

                <p class="txt mb-4">
                    Za smještaj zadužen je hotel Termag, te vi i vaša ekipa možete uživati u udobnosti i komforu koje ovaj hotel nudi.
                </p>
                <p class="txt">
                    Uplata startnine:
                </p>
                <ul>
                    <li>Uplate startnine moguće su do (navesti datum) godine.</li>
                    <li>Instrukcije za uplatu možete preuzeti ovdje(link za upute).</li>
                    <li>Ako plaćate karticom, molimo vas da ispunite online zahtjev (link za online plaćanje).</li>
                </ul>

                <div class="btn-wrapper">
                    <a href="#" class="btnn btn_primary">Prijavite se odmah</a>
                </div>
            </div>
        </div>
    </section>

    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{asset('assets/images/race-1.png')}}" alt="trka" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('assets/images/race-2.png')}}" alt="trka" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('assets/images/race-3.png')}}" alt="trka" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials/footer')
