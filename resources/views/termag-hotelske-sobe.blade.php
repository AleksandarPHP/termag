@include('partials/header')

<main>
<section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/termag-sobe-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1>Termag Hotelske Sobe</h1>
                <p>
                    Porodični izazov na Jahorini
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')

    <section class="economic">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="text-center">
                <h4 class="subtitle-smaller">Kreirajte zajedničke uspomene na Jahorini</h4>
                <h2 class="title">Economic Soba</h2>
                <p class="txt">Economic sobe hotela Termag su standardne dvokrevetne sobe namjenjene za dvije osobe, a uz površinu od 22 m2 pružaju dovoljno prostora za savršen smještaj. Bez obzira na vaš stil i potrebe, naše sobe nude idealno mjesto za relaksaciju i odmor. Ova vrsta soba prvenstveno je namjenjena gostima koji cijene jednostavnost ali bez gubitka na kvalitetu.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="economic-slider">
                <img src="{{asset('assets/images/economic-1.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-2.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-3.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-4.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-5.jpg')}}" alt="soba">
            </div>
        </div>
        <div class="container">
            <div class="arrow-section">
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Toplina i ušuškan ambijent
                    </h3>
                    <p class="txt">
                        Ove smještajne jedinice u sebi sadrže kombinaciju klasičnog i modernog, te je samim tim pogodna za goste za različitim preferencijama. Naše sobe posjeduju rustičan šarm ali uz moderne komponente i udobnosti koje će stvoriti jedan topao i privlačan ambijent koji će vas razoružati.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Unikatnost U Svakom Detalju
                    </h3>
                    <p class="txt">
                        Naše sobe su dizajnirane i opremane sa posebnom pažnjom, kako bi svaki detalj i kutak pričao priču o pravoj vrijednosti koju sa sobom nosi jednostavnost. Opremljene izuzetno kvalitetnim namještajem od punog drveta, sobe dobijaju jednu posebnu originalnost i stil koji je u savršenom skladu sa komforom koji nudi.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Tehnološka opremljenost
                    </h3>
                    <p class="txt">
                        Naše sobe ne zaostaju što se tiče tehnološke opremljenosti, te su u skladu sa tim, obezbeđeni brza internet konekcija, telefonska linija i kablovska televizija. Ove savremene tehnologije će učiniti da se osjećate još prijatnije i sigurnije dok boravite u našem hotelu.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Idealan smještaj za dvoje
                    </h3>
                    <p class="txt">
                        Economic sobe hotela Termag su standardne dvokrevetne sobe namjenjene za dvije osobe, a uz površinu od 22 m2 pružaju dovoljno prostora za savršen smještaj. Bez obzira na vaš stil i potrebe, naše sobe nude idealno mjesto za relaksaciju i odmor. Ova vrsta soba prvenstveno je namjenjena gostima koji cijene jednostavnost ali bez gubitka na kvalitetu.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="economic lux">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="text-center">
                <h4 class="subtitle-smaller">Luksuzni doživljaj u prostranosti</h4>
                <h2 class="title">LUX Sobe</h2>
                <p class="txt">
                   Sa ukupnom površinom od 38m2, lux sobe hotela Termag vam pružaju i više nego dovoljno prostora za vaš luksuzni odmor. Sobe posjeduju klasičan bračni krevet ili dva odvojena u opciji “twin”, gdje imate opciju dodavanja trećeg pomoćnog ležaja. Zadovoljstvo gostiju nam je izuzetno važno, pa smo se potrudili da vam ponudimo različite opcije, kako biste mogli da izaberete upravo ono što vam najviše odgovara.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="economic-slider">
                <img src="{{asset('assets/images/lux-1.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-2.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-3.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-1.jpg')}}" alt="soba">
            </div>
        </div>
        <div class="container">
            <div class="arrow-section">
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Luksuzni doživljaj u prostranosti
                    </h3>
                    <p class="txt">
                        Sa ukupnom površinom od 38m2, lux sobe hotela Termag vam pružaju i više nego dovoljno prostora za vaš luksuzni odmor. Sobe posjeduju klasičan bračni krevet ili dva odvojena u opciji “twin”, gdje imate opciju dodavanja trećeg pomoćnog ležaja. Zadovoljstvo gostiju nam je izuzetno važno, pa smo se potrudili da vam ponudimo različite opcije, kako biste mogli da izaberete upravo ono što vam najviše odgovara.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Originalnost uz nestvaran pogled
                    </h3>
                    <p class="txt">
                        Opremljene na jedinstven i unikatan način, sa posebno osmišljenim estetskih detaljima, naše Lux sobe će zadovoljiti vizuelne standarde i gostiju sa najistančanijim ukusom. Kvalitetan namještaj od punog drveta daje prostoru bogatstvo, a ono na šta smo posebno ponosni je “mountain view” koji će vas ostaviti bez daha.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Tajna je u udobnosti
                    </h3>
                    <p class="txt">
                        Abmijent naših soba je prilagođen idealnoj harmoniji između klasičnih i modernih detalja, koji stvaraju osjećaj toplog doma. Udobna i ušuškana atmosfera koju ističemo, čini da momenti provedeni u ovom prostoru ostanu duboko urezani u vašem sjećanju kao nezaboravni.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        Toplina koju zaslužujete                    </h3>
                    <p class="txt">
                        Lux sobe hotela Termag su vaša topla i luksuzna oaza u kojoj ćete doživjeti nezaboravne momente. To nije samo prostor za spavanje, to je jedno zaista posebno iskustvo. Originalno dizajniran namještaj i rustični stil koji dominira su upotpunili cijelu priču i učinili da ove smještajne jedinice odišu smirenom i toplom energijom koja će vas oduševiti.
                    </p>
                </div>
                <div>
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        U skladu sa tehnologijom                  </h3>
                    <p class="txt">
                        Naše lux sobe su opremljene savremenom tehnologijom koja će vam olakšati i upotpuniti boravak. Svaka smještajna jedinica nudi brz internet, kablovsku televiziju i telefonsku liniju.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
