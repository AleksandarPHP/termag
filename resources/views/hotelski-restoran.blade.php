@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/restoran-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Hotelski Restoran</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    Gastronomska raznolikost i tradicija u restoranu hotela Termag
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/restoran.png")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Restoran Hotela Termag</h2>
                <p class="txt">
                    Restoran hotela Termag je prava gastro-oaza koja posjeduje 180 mjesta. U sofisticiranom ambijentu doživite nezaboravno iskustvo internacionalne kuhinje sa fokusom na tradicionalnim jelima u kojima će uživati sva vaša čula. Profesionalno osoblje i iskusni kuvari će vam pružiti vrhunsko gostoprimstvo i neponovljiv gastronomski užitak. Neka svaki novi zalogaj bude jedinstven doživljaj koji ćete uvijek iznova željeti da ponovite.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/kuhinja.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Kuhinja: fuzija tradicionalnih i međunarodnih ukusa</h2>
                    <p class="txt">
                        Restoran hotela Termag je prava gastro-oaza koja posjeduje 180 mjesta. U sofisticiranom ambijentu doživite nezaboravno iskustvo internacionalne kuhinje sa fokusom na tradicionalnim jelima u kojima će uživati sva vaša čula. Profesionalno osoblje i iskusni kuvari će vam pružiti vrhunsko gostoprimstvo i neponovljiv gastronomski užitak. Neka svaki novi zalogaj bude jedinstven doživljaj koji ćete uvijek iznova željeti da ponovite.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/avantura-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Vinska avantura: putovanje kroz ukuse različitih zemalja</h2>
                <p class="txt">
                    Naša vinska karta je pažljivo birana selekcija vina iz različitih zemalja koji će u kombinaciji sa našim ukusnim jelima donijeti jednu posebnu notu užitka. Pravi ljubitelji vina će biti u prilici da degustiraju i istraže teroare I sorte iz različitih vinogradarskih regiona. Nudimo vam vina iz vrhunskih lokalnih vinarija ali i svjetski poznate primjerke. Bez obzira da li preferirate bijela, crvena ili roze vina, sigurni smo da ćete u našoj vinskoj karti pronaći buke koji će vas oduševiti i obogatiti trenutke provedene u restoranu hotela Termag. Za vas smo izabrali samo najkvalitetnije primjerke kako bi na najbolji način upotpunili vaše momente uživanja.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/usluga-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Vrhunska usluga, profesionalnost u svakom detalju</h2>
                    <p class="txt">
                        Primarni cilj našeg hotela je da vam ponudimo kvalitetnu uslugu i toplu atmosferu koja će učiniti da nam se uvijek iznova ponovo vraćate. Naše profesionalno i ljubazno osoblje je potpuno posvećeno vašem apsolutnom zadovoljstvu. Svaki detalj vašeg boravka kod nas nam je podjednako važan, zato se trudimo da u svakom segmentu ispunimo sva vaša očekivanja. Na taj način stičemo uzajamno povjerenje sa našim gostima i gradimo poseban odnos koje često prerasta u dugogodišnje prijateljstvo. Vaš komfor, sigurnost i zadovoljstvo su na prvom mjestu, zato dođite i uvjerite se u izuzetnost usluge koju ćemo vam pružiti.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa aktivni-izazov">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/ukus-jahorine.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Planirajte Vašu posjetu</h2>
                <p class="txt mb-4">
                    Kako biste na najbolji način isplanirali dolazak u naš restoran, pružamo vam neophodne informacije o radnom vremenu.
                </p>
                <p class="txt mb-4">
                    Vrata našeg restorana za doručak otvaramo svakog dana 
                    <strong>od 07-10h.</strong>
                </p>
                <p class="txt mb-4">
                    Večera se služi u perodu <strong>od 18:30-21:30h.</strong>
                </p>
                <p class="txt">
                    nje doručka i večere u našem restoranu smo prilagodili vama, kako biste imali dovoljno vremena da degustirate naša ukusna jela u skladu sa vašim planovima
                </p>
                <a href="#" class="btnn btn_primary">Book Now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
