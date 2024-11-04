@include('partials/header')

<main>
    <section class="career team-building">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/team-building.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Termag Team Building</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Team building je bitan način jačanja timskog duha i
                    motivacije za rad unutar tima.  Izazovi, zabave, međusobna
                    druženja, snalaženje u nesvakidašnjim situacijama je sve ono
                    što će uticati na još bolje snalaženje u različitim
                    poslovnim okolnostima i izvuče ono najbolje iz Vašeg tima.
                </p>
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/ski-team-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Personalizovani team building</h2>
                <p class="txt mb-4">
                    Koncept team building programa podrazumijeva snalaženje u novom okruženju, daleko od radnog mjesta. Drugim riječima to je niz zabavnih, strateških igara koje tim vaših uposlenika mora riješiti. Moraju se snalaziti u novoj situaciji, zajedno pronalaziti i ostvarivati rješenja. Timova ima više i oni se međusobno takmiče za što bolje rezultate.
                     team building programi obuhvaćaju razne kreativne fizičke i mentalne aktivnosti, na otvorenom, u prirodi, kao i u zatvorenom prostoru. U središtu svakog teambuilding programa nalazi se <strong>razvoj tima, međusobna komunikacija i motivacija te kreativno rješavanje problema u nepoznatoj situaciji. </strong>
                </p>
                <p class="txt mb-4">
               <strong>Za svakog klijenta pripremamo poseban program aktivnosti</strong>  te smo u mogućnosti da ispunimo specifične zahtjeve i prilagodimo team building svakom pojedincu.
                </p>
                <p class="txt">
                    Posebna pogodnost jeste <strong>mogućnost brendiranja kompletnog programa</strong>, od poligona do rekvizita, kao i obezbjeđivanje snimanja, slikanja i pravljenje video materijala vašeg team buildinga.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="special tb-activities">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <h2 class="title-smaller">Raznovrstan izbor aktivnosti</h2>
            <p class="txt">
                Sadržaj Team building programa se definiše prema potrebama i ciljevima pojedinog korisnika, a naš animacioni tim vam nudi slijedeće programe:
            </p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card" >
                        <img src="{{asset('assets/images/aktivnost-1.jpg')}}" class="card-img-top" alt="porodicni paket">
                        <div class="card-body">
                          <h5>Team Building u Zatvorenom Prostoru</h5>
                          <p class="txt">radionice, elementarne igre, radionica kuvarstva i poslastičarstva, predstave,  wellness program, tretmani masaže, kurs plesa, aquabik</p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" >
                        <img src="{{asset('assets/images/aktivnost-2.jpg')}}" class="card-img-top" alt="Romantični Paket">
                        <div class="card-body">
                          <h5>Team building na otvorenom prostoru</h5>
                          <p class="txt">orjentiring /orjentaciono kretanje/, pješačenje/obično ili nordijsko, tracking, biciklističke ture, elementarne igre, štafetne igre, sportske igre, antistres sadržaji, seoska olimpijada, etno-gastro avantura.</p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/aktivnost-3.jpg')}}" class="card-img-top" alt="Relax Paket">
                        <div class="card-body">
                          <h5>Adrenalin team building</h5>
                          <p class="txt">penjanje po stijenama (alpinizam), Via fearata, škola preživljavanja u prirodi, škola alpinizma, špiljarenje (speleoavantura), rafting, paintball, paragliding (tandem paragliding), quad avantura, mountain bike </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/aktivnost-4.jpg')}}" class="card-img-top" alt="Detox Paket">
                        <div class="card-body">
                          <h5>Zimski team building na otvorenom prostoru</h5>
                          <p class="txt">sankanje, skijanje, klizanje, kliskanje, hodanje na skijama, zimska olimpijada, orjentiring (orjentaciono kretanje), orjentiring sa bakljama (noćno orjentaciono kretanje) </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" >
                        <img src="{{asset('assets/images/aktivnost-5.jpg')}}" class="card-img-top" alt="Back to Nature">
                        <div class="card-body">
                          <h5>Zimski Adrenalin team building</h5>
                          <p class="txt">vožnja motornim sankama, snowboarding, skijanje po ekstremnim stazama, snowbike, snowrafting, spuštanje na gumama</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="villa-termag reference">
        <div class="bg" style="background-image: url('{{asset("assets/images/reference-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Reference</h2>
                    <p class="txt">
                        Termag hotel izuzetnu pažnju pridaje organizaciji team building programa i upravo iz tog razloga smo osnovali naš tim animatora „PST“. Animacioni tim „PST“, broji 10 članova, većinom profesora fizičke kulture, koji su obučeni u izvođenju animaciono-rekreativnih sadržaja. Uz veliko iskustvo, odličnu obučenost i maksimalnu posvećenost „PST“ tim čini veoma bitan dio hotela Termag i u mogućnosti je da ispuni najkompleksnije zahtjeve naših klijenata. Do sada je „PST“ tim u više navrata radio team building za prestižne firme poput: OMV, PLIVA, FORD, RECA, BSP PROCESOR, ATLANTIC, PHILIP MORRIS, NOBEL, STIHL, PROMO TOURS...
                        Sa nestrpljenjem očekujemo i vaš upit koji možete poslati na mail: <a href="pst.team.jahorina@gmail.com">pst.team.jahorina@gmail.com</a>
                        Uz obećanje da ćemo za vas napraviti događaj koji će te dugo prepričavati.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
                <img class="img-fluid" src="{{asset('assets/images/villa-termag-inner.jpg')}}" alt="villa termag">
            </div>
        </div>
    </section>

    @include('partials/socials')
</main>

@include('partials/footer')
