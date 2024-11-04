@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/bike-marathon.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Atrakcije oko Nas</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Olimpijska planina Jahorina zauzima centralnu poziciju u Bosni i Hercegovini I udaljena je od Sarajeva i međunarodnog aerodroma na samo pola sata vožnje. Centralna pozicija omogućava odličnu povezanost sa drugim destinacijama i atrakcijama u okruženju, tako da Jahorina predstavlja odličnu bazu i za odmor tokom kojeg želite da upoznate region.
                </p>
            </div>
        </div>
    </section>
    <section class="booking empty"></section>
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/bike.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2 data-aos="fade-down" data-aos-duration="600">Pripreme za Trku</h2>
                <p class="txt" data-aos="fade-down" data-aos-duration="600">
                    Pripreme za trku su ključne za postizanje dobrih rezultata na ovom sportskom nadmetanju. Bitno je postaviti ciljeve i odrediti da li želite da oborite svoj lični rekord, da završite trku ili jednostavno samo želite učestvovati i doživjeti novo iskustvo. U skladu sa tim planirate svoj trening i određujete njegovu težinu. Tako ćete raditi na svojoj kondiciji i fizičkoj spremnosti kako biste mogli uspješno da odgovorite svim izazovima koje triatlon trka sa sobom nosi. Prilagodite ishranu svom treningu, unosite dovoljno hranljivih materija i na kraju odmarajte dovoljno. Odmor koji priredite vašem tijelu i mišićima će vam donijeti izuzetnu korist. Ako koristite posebnu opremu, testirajte je i uvjerite se da će vas poslužiti na pravi način tokom trke.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="experience">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                <h2>Kategorije</h2>
                <p class="txt">
                    Termag mountainbike marathon je dinamična trka koja se održava u nekoliko kategorija. Takmičenje se odvija u individualnoj, muškoj i ženskoj,  konkurenciji, a poseban kuriozitet je porodična trka koja ima za cilj jačanje porodice kroz sport i osnaživanje sportskog duha.
                </p>

                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/kat-1.png')}}" alt="porodicna 8km">
                            <figcaption>Porodična (8km)</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/kat-2.jpg')}}" alt="plava 24km">
                            <figcaption>Plava (24km)</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/kat-3.jpg')}}" alt="crvena 34km">
                            <figcaption>Crvena (34km)</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/porodicno.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Porodično učestvovanje</h2>
                    <p class="txt">
                        Trka može biti pravi porodični dan jer je obezbjeđeno učešće za cijelu porodicu. Podijelite svoj takmičarski duh sa vašim najvoljenijima i osjetite jedan potpuno novi doživljaj ovog sportskog nadmetanja. Istražujte zajedno prirodne ljepote Jahorine dok učestvujete u ovoj nevjerovatnoj sportskoj avanturi. Termag challenge race ima staze koje su prilagođene svima od najmlađih do najstarijih učesnika sa različitim stepenom zahtjevnosti.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/sportski-duh.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Sportski duh</h2> 
                <p class="txt">
                    Sportsko takmičenje naglašava sportski duh te kombinuje zajedništvo i  obožavanje prirode u jednom. Termag challenge race podstiče timski duh te naglašava važnost podrške i duha zajedništva. To nije samo trka, mnogo je više od toga. Pravi je izazov ne samo za vaše fizičke spostobnosti nego i za vaše lične osobine i način življenja. Istražite vaše granice izdržljivosti kroz ovu trku koja će vam ponuditi mnogo više od sportskog takmičenja.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="special registration registration-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h3>Startni paket:</h3>
                    <h2 class="title-smaller">Registracija</h2>
                    <p class="txt">
                        Cijene startnih paketa su slijedeće:
                    </p>
                    <ul>
                        <li>PORODIČNI 40,00 KM</li>
                        <li>PLAVI 45,00 KM </li>
                        <li>CRVENI 50,00 KM, </li>
                    </ul>
                    <p class="txt">a u cijenu su uključene slijedeće pogodnosti:</p>
                </div>
              

                <div>
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

                <div class="text-center">
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
        </div>
    </section>
</main>

@include('partials/footer')
