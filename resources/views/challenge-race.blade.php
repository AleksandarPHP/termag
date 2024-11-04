@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/race-challange.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Atrakcije oko Nas</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    Olimpijska planina Jahorina zauzima centralnu poziciju u Bosni i Hercegovini I udaljena je od Sarajeva i međunarodnog aerodroma na samo pola sata vožnje. Centralna pozicija omogućava odličnu povezanost sa drugim destinacijama i atrakcijama u okruženju, tako da Jahorina predstavlja odličnu bazu i za odmor tokom kojeg želite da upoznate region.
                </p>
            </div>
        </div>
    </section>
    <section class="booking empty"></section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/fam.png")}}');"></div>
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
        <div class="bg" style="background-image: url('{{asset("assets/images/trail.png")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Trail trke</h2>
                <p class="txt">
                    Termag challange race je nezaboravno takmičarsko iskustvo namjenjeno pravim avanturistima. To je trail trka koja je podjednako zanimljiva i rekreativcima i takmičarima. Trail staze vas vode kroz netaknutu prirodu Jahorine. Trka se odvija na različitim vrstama terena, te uključuje i one zahtjevnije i tehnički izazovnije dionice. Vode ih stručna lica kako bi se izbjegle povrede učesnika ili bilo koje druge nepredviđene okolnosti. Učesnici su u prilici i da osvoje brojne nagrade i priznanja, kao potvrdu svog truda i zalaganja.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/sport.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Sportski duh</h2>
                    <p class="txt">
                        Sportsko takmičenje naglašava sportski duh te kombinuje zajedništvo i  obožavanje prirode u jednom. Termag challenge race podstiče timski duh te naglašava važnost podrške i duha zajedništva. To nije samo trka, mnogo je više od toga. Pravi je izazov ne samo za vaše fizičke spostobnosti nego i za vaše lične osobine i način življenja. Istražite vaše granice izdržljivosti kroz ovu trku koja će vam ponuditi mnogo više od sportskog takmičenja.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    @include('partials/socials')
</main>

@include('partials/footer')
