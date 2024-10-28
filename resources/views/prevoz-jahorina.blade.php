@include('partials/header')

<main>
    <section class="career team-building">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/prevoz.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
            <div class="content-wrapper">
                <h1>Prevoz Jahorina</h1>
                <p>
                    Hotel Termag vam nudi mogućnost transfera gostiju na relaciji između Sarajeva i hotela u oba smijera. Na taj način se trudimo da vam maksimalno olakšamo i obezbjedimo doživljaj bezbrižnog boravka u našem hotelu.

                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/komfor-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Zagarantovan komfor</h2>
                <p class="txt">
                    Udobnost prilikom vašeg putovanja je nešto čemu smo posvetili posebnu pažnju, zato smo se potrudili da obezbjedimo klimatizovana vozila koja će vam ponuditi zagarantovan komfor i prijatnost tokom vožnje. Prostran prtljažnik je garancija da će vaše stvari biti uredno prevezene bez obzira na njihovu količinu. Vozila su bezbjedna i čista, te su u službi vašeg zadovoljstva i sigurnosti. U njima se možete u potpunosti opustiti i započeti bezbrižno vaš odmor na Jahorini.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/sarajevo-jahorina-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Iz Sarajeva do Jahorine sa stilom</h2>
                    <p class="txt">
                        Vožnja koju ćemo vam priuštiti će biti jedno lijepo iskustvo sa dozom luksuza koja svakome prija. Pored vrhunske udobnosti, sofisticiranosti i sigurnosti koju vam garantujemo, nudimo vam i personalizovane aktivnosti koje će u potpunosti biti prilagođene vama. Isključivo na vaš zahtjev, naš hotel vam nudi premium limuzine, za jedan poseban doživljaj vožnje i ostvarenje vaših posebnih želja. Ova ekskluzivnja vožnja će učiniti da se osjećate posebno uz eleganciju i stil koji vam nudimo.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/local-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Poznavanje lokalnog terena</h2>
                <p class="txt">
                    Ono što će vam pružiti dodatnu sigurnost i prijatnost prilikom vožnje, jesu naši iskusni vozači koji jako dobro poznaju Jahorinu i lokalni region. To je garancija da ćete, bez nepotrebnog lutanja, brzo i bezbjedno stići u hotel Termag. Dobro poznavanje lokalnih uslova na putu, doprinjeće biranju najbolje putanje te izbjegavanju potencijalnih gužvi. Mislili smo na sve, vaše je samo da uživate u bezbrižnosti vožnje koju vam nudimo.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/organizacija-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Brza i jednostavna organizacija</h2>
                    <p class="txt">
                        Proces organizovanja vaše vožnje je jednostavan. Naše kontakt informacije su vrlo lako dostupne, a sam proces dogovaranja detalja je uvijek brz i lak. Informacije o detaljima vožnje istaknute su na našem sajtu, možete ih pronaći u hotelskim brošurama, ili jednostavnim telefonskim pozivom možete saznati sve što vas zanima. Tu smo da vam maksimalno izađemo u susret i učinimo sve da vaš transfer do našeg hotela bude što prijatniji i bolji.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/transferi-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Prilagođeni transferi po vašem zahjtevu</h2>
                <p class="txt">
                    Ukoliko imate neke posebne zahjeve za prilagođene transfere, tu smo da vam izađemo u susret jer nam je zadovoljstvo naših gostiju prioritet. Za skijaše, prilagodili smo vožnju tako da vozila imaju prostor predviđen za ski opremu, a naši vozači koji odlično poznaju sve ski staze Jahorine, će vas odvesti tačno tamo gdje želite. Takođe, tu smo da porodicama sa djecom obezbjedimo siguran i bezbjedan prevoz. Posjedujemo dječije sjedalice kako bi vožnja bila na visokom stepenu sigurnosti. Naši prilagođeni transferi će vam pružiti vrhunsku personalizovanu uslugu koju ćemo u potpunosti prilagoditi vašim željama i zahtjevima.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
