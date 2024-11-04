@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/konf-hero-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Autentičan Dizajn u Formalnom Ruhu</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">Konferencijska Sala</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
                    Hotel Termag raspolaže izuzetno dobro opremljenom konferencijskom salom, autentičnog dizajna, kapaciteta do 350 mjesta. Ona je idealan prostor za vaša poslovna događanja u profesionalnom ambijentu naglašavajući kombinaciju formalnosti i estetike.  Prostor odiše jedinstvenošću uz naglašenu estetiku i zagarantovanu funkcionalnost koja će unaprijediti vaše poslovne poduhvate.
                </p>
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa konf-sala">
        <div class="bg" style="background-image: url('{{asset("assets/images/konf-sala-bg.jpg")}}');"></div>
        <div class="container-fluid">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Fleksibilnost prostora</h2>
                <p class="txt">
                    Prostor naše konferencijske sale je u skladu sa visokim standardima savremenog poslovnog okruženja. To znači da će vam pružiti sve ono što vam je u poslovnom smislu potrebno za realizaciju vaših zamisli. Naša konferencijska sala je djeljiva u četiri manje sale koje, i u slučaju djeljenja prostora, i dalje zadržavaju prirodno osvjetljenje. U skladu sa tim, pogodna je za održavanje različitih vrsta poslovnih događaja, te za različite veličine skupova.
                </p>
                <a href="#" class="btnn btn_primary">Book Now</a>
            </div>
        </div>
    </section>

    @include('partials/socials')

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/modern-tech-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Savremena tehnička opremljenost</h2>
                    <p class="txt">
                        Konferencijska sala hotela Termag se može pohvaliti izuzetnom tehničkom opremljenošću koja sa uspjehom može da odgovori i najzatjevnijim poslovnim događajima. Posjedujemo najnovije laserske projektore, vrhunsko osvjetljenje, kabine za simultano prevođenje uz audio opremu i bežični internet koji će stvoriti savršen ambijent za poslovne sastanke, konferencije, poslovne prezentacije. Tu smo da vam ponudimo rješenja za sve vaše posebne zahtjeve uz tehničku opremljenost koja će zadovoljiti sve vaše kriterijume.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa konf-sala">
        <div class="bg" style="background-image: url('{{asset("assets/images/flexibility-bg.jpg")}}');"></div>
        <div class="container-fluid">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Fleksibilnost prostora</h2>
                <p class="txt">
                    Prostor naše konferencijske sale je u skladu sa visokim standardima savremenog poslovnog okruženja. To znači da će vam pružiti sve ono što vam je u poslovnom smislu potrebno za realizaciju vaših zamisli. Naša konferencijska sala je djeljiva u četiri manje sale koje, i u slučaju djeljenja prostora, i dalje zadržavaju prirodno osvjetljenje. U skladu sa tim, pogodna je za održavanje različitih vrsta poslovnih događaja, te za različite veličine skupova.
                </p>
                <a href="#" class="btnn btn_primary">Book Now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
