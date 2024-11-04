@include('partials/header')

<main>
    <section class="career spa-hero">
        <div class="bg" style="background-image: url('{{asset("assets/images/spa-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">-- Specijalne Usluge</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">Spa</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
                    Romansa u Termag-u - bijeg u zajednički raj
                </p>
                <a href="#" class="btnn btn_primary" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1200">Book Now</a>
            </div>
        </div>
    </section>
    @include('partials/booking')

    
    <section class="villa-termag">
        <div class="bg" style="background-position:center;background-image: url('{{asset("assets/images/spec-ponude-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Specijalne Ponude</h2>
                    <p class="txt">
                        Ukoliko želite da osvježite romantiku u predivnom ambijentu Jahorine, Romansa paket hotela Termag je tu da ispuni sva vaša očekivanja. U idealnom spoju luksuza i komfora, priredite svojoj voljenoj osobi nezaboravne momente i romantične aranžmane za pamćenje. Podjelite trenutke i stvorite zajedničke uspomene dok uživate u romantičnim šetnjama, danu provedenom u Spa centru, vrhunskoj hrani ili ledenim margaritama u bazenu. Uz pucketanje vatre u kaminu, i ukuse naših vrhunskih vina, nazdravite ljubavi i romansi.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/bazen-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Bazen</h2>
                <p class="txt">
                    Naš bazen je jedna oaza mira koja pruža momente opuštanja uz sve benefite koje ozonizovana voda sa sobom nosi. Ozonizovana voda nudi brojne pogodnosti za organizam ali i za kožu jer povećava njenu elastičnost i rješava je ožiljaka. Uništava bakterije, patogene i viruse te na taj način čini vodu u bazenu sigurnom za kupanje. Plivanjem u bazenu pospješujete cirkulaciju u organizmu koja povoljno utiče na detoksikaciju. Redovno kupanje u ozonizovanoj vodi ubrzava metabolizam ali i utiče na gubitak kilograma ali i pospješivanje vaše vitalnosti. Umirujući efekti vode doprinijeće da pored fizičkog balansa uspostavite i mentalnu ravnotežu. Uživajte u našem bazenu, vaš cjelokupni organizam će vam biti zahvalan.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/masaze-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Masaže i Tretmani</h2>
                    <p class="txt">
                        Nezaboravni doživljaj koji briše stres, masaže hotela Termag. Vrhunsko iskustvo opuštanja koje ćete pamtiti, bez obzira na to koju vrstu tretmana odaberete. U konsultaciji sa našim terapeutima, uz njihove savjete i preporuke, biće vam priređen tretman koji će biti prilagođen vašim individualnim potrebama. Nudimo širok spektar različitih masaža, kako bi svakom gostu priredili ono što apsolutno odgovara njegovima preferencijama i senzibilitetu. Masaže i tretmane priređujemo u ambijentu sa mirnim okruženjem, toplom atmosferom i umirujućim svjetlom, kako bi užitak bio potpun. Doživite relaksaciju u pravom smislu te riječi, jer opuštanje na Jahorini nikada nije bilo toliko luksuzno i nestvarno.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials/socials')
</main>

@include('partials/footer')
