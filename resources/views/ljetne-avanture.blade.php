@include('partials/header')

<main>
    <section class="career">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/la.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
            <div class="content-wrapper">
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Kreirajte zajedničke uspomene na Jahorini</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">Ljetnje Avanture</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
                    Termag vam nudi mnoštvo aktivnosti i zabavnog sadržaja i
                    tokom ljetnih mjeseci. Na prelijepoj planini Jahorini,
                    doživite ljeto na potpuno novi način uz aktivnosti koje smo
                    pripremili samo za vas. Bez obzira da li ste pravi
                    avanturisti ili ste ipak mirnijeg duha, na našoj planini
                    ćete pronaći aktivnosti u kojima ćete uživati.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')
    <section class="experience unforgetable-experience">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                <h2 data-aos="fade-down" data-aos-duration="600">Nezaboravno Iskustvo</h2>
                <p class="txt" data-aos="fade-down" data-aos-duration="600">
                    Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo pla
                </p>

                <div class="row">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-1.png')}}" alt="porodicna 8km">
                            <figcaption>Planinarenje</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-2.png')}}" alt="plava 24km">
                            <figcaption>Alpinizam</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/la-3.png')}}" alt="crvena 34km">
                            <figcaption>Karting</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="accommodation hiking">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                    <h2 class="title">Planinarenje</h2>
                    <p class="txt">
                        Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                    </p>
                    <a href="#" class="btnn btn_gold">Saznaj više</a>
                </div>
                </div>
                <div class="col-lg-7">
                    <video autoplay muted loop src="{{asset('assets/videos/planinarenje.mp4')}}"></video>
                </div>
            </div>
        </div>
    </section>
    <section class="villa-termag alpinizam">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/alpinizam.mp4') }}"
                type="video/mp4"
            />
        </video>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Alpinizam</h2>
                    <p class="txt mb-4">
                        Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                    </p>
                    <p class="txt">
                        Za stranicu posvećenu smještaju i sobama u vašem hotelu, važno je da naziv sekcije jasno prenosi ideju kvaliteta, udobnosti i jedinstvenog iskustva boravka.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
