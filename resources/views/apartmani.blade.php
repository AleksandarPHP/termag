@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/apartmani-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h4>Kreirajte zajedničke uspomene na Jahorini</h4>
                <h1>Apartmani</h1>
                <p>
                    Kada je smještaj u našem hotelu u pitanju, našim dragim gostima su na raspolaganju 71 elegantno uređena soba, 21 apartman modernog dizajna i predsjednicki apartman. Svakom detalju enterijera smo posvetili posebnu pažnju, a svaki komad namještaja je ručno izrađeno umjetničko djelo.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')

    <section class="experience">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                <h2>Nezaboravno Iskustvo</h2>
                <p class="txt">
                    Vaše zadovoljstvo boravka kod nas nam je najbitnije, zato smo sa posebnom pažnjom pristupili svakom detalju planiranja prostora i uređenja. Na taj način smo vam obezbijedili savršene uslove boravka u našim smještajnim jedinicima, te ćemo vam omogućiti odmor za pamćenje. Poklonite nam vaše povjerenje a mi ćemo ispuniti sva vaša očekivanja. 
                </p>

                <div class="row">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-1.jpg')}}" alt="kuglana">
                            <figcaption>Kuglana</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-2.jpg')}}" alt="kuglana">
                            <figcaption>Igraonica za decu</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-3.jpg')}}" alt="kuglana">
                            <figcaption>Foaje</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{asset('assets/images/apartmani-img-left-1.jpg')}}" alt="apartman" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <img src="{{asset('assets/images/apartmani-img-right-1.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        <h4>Luksuz i ugodjaj u savršenom skladu</h4>
                        <h2><span>Prijedsednički </span>Apartman,</h2>
                        <p class="txt">
                            Predsjednički apartman našeg hotela predstavlja vrhunac komfora i luksuza koji smo pripremili za prave hedoniste. Prostranost ovog apartman pruža osjećaj slobode i širine, te će doprinijeti da se osjećate komforno i udobno dok boravite u njemu. Opremljen je u planinskom ali u isto vrijeme i modernom stilu, sastoji se iz četiri spavaće sobe, tri kupatila, jednog wc-a, dva đakuzija, dvije tuš kabine, a tu su i opremljena kuhinja, bar, biblioteka. Privatna terasa će vam omogućiti da uživate u nestvarnom pogledu na prirodne ljepote Jahorine i skijaške staze. Naš predsjednički apartman odiše ekstravagancijom i spreman je da odgovori na sve vaše individualne zahtjeve. Za one posebne romantične momente, tu je i kamin koji će napraviti nezaboravnu toplu atmosferu. Doživite posebnu vrstu raskoša boravkom u ovoj luksuznoj, elegantoj i izuzetno prostranoj smještajnoj jedinici u kojoj sve poziva na apsolutni hedonizam.
                        </p>
                        <a href="#" class="btnn btn_gold">Book now <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman apartman-2">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="{{asset('assets/images/apartmani-img-left-2.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        <h2><span>Lux</span> Apartman <span>(H3)</span></h2>
                        <p class="txt mb-4">
                            Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                        </p>
                        <p class="txt">
                            Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                        </p>
                        <a href="#" class="btnn btn_gold">Book now <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('assets/images/apartmani-img-right-2.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="apartman">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/section-decor.png')}}" alt="dekoracija">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{asset('assets/images/basic-1.png')}}" alt="apartman" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <img src="{{asset('assets/images/basic-2.png')}}" alt="apartman" class="img-fluid">
                    <div class="content-wrapper"> 
                        <h4>Luksuz i ugodjaj u savršenom skladu</h4>
                        <h2><span>Basic</span> Apartman <span>(H3)</span></h2>
                        <p class="txt mb-4">
                        Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                        </p>
                        <p class="txt">
                        Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka. 
                        </p>
                        <a href="#" class="btnn btn_gold">Book now <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apartman apartman-2">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('assets/images/eco-1.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrapper"> 
                        <h2><span>Economy</span> Apartman <span>(H3)</span></h2>
                        <p class="txt mb-4">
                            Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                        </p>
                        <p class="txt">
                            Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                        </p>
                        <a href="#" class="btnn btn_gold">Book now <span>
                            <img src="{{asset('assets/images/arrow-gold.svg')}}" alt="strelica">
                        </span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/eco-2.png')}}" alt="apartman" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
