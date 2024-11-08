@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/koliba-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Kamin Sala</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    Olimpijska planina Jahorina zauzima centralnu poziciju u Bosni i Hercegovini I udaljena je od Sarajeva i međunarodnog aerodroma na samo pola sata vožnje. Centralna pozicija omogućava odličnu povezanost sa drugim destinacijama i atrakcijama u okruženju, tako da Jahorina predstavlja odličnu bazu i za odmor tokom kojeg želite da upoznate region.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/koliba.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>“Koliba” u prirodnom ambijentu</h2>
                    <p class="txt">
                        U prirodnom okruženju koji osvaja, u neposrednoj blizini ski staze, smješten je tradicionalni Termag-ov etno restoran, Koliba. Sama okolina restorana ostavlja bez daha, te će vam priuštiti poseban doživljaj. Restoran posjeduje prelijepu terasu, koja se na fenomenalan način uklapa u cjelokupno okruženje, pružajući vam mogućnost potpunog stapanja sa prirodom. 
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/tradition-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Tradicionalni Ambijent</h2>
                <p class="txt">
                    Etno restoran “Koliba” u svom fokusu ima autentični etno dizajn, bogat detaljima koji prostoru donose jednu tradicionalnu notu. Unutrašnjost je puna drvenih i kamenih detalja, a zidovi od drveta čine prostor toplim, šarmantnim te donose tradicionalnu arhitekturu. Drveni namještaj donosi jedan arhaični i rustični izgled koji podsjeća na kolibe iz davnih vremena. Uronite u tradicionalni ambijent u našem etno restoranu i uživajte prijatnoj i mirnoj atmosferi.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/etno-bg.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Etno Specijaliteti</h2>
                    <p class="txt">
                        U ponudi našeg etno restorana je veliki izbor različitih jela vrhunskog kvaliteta, a u pitanju su prvenstveno jela tradicionalne domaće kuhunje. U svakom zalogaju osjetićete kombinaciju autentičnih ukusa i bogate kulturne baštine koji su sjedinjeni u jednom jelu. Otkrijte sve tajne gastronomske ponude našeg etno restorana, te uplovite u priču o ukusima koji osvajaju.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

</main>

@include('partials/footer')
