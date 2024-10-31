@include('partials/header')

<main>
    <section class="career detox">
        <div class="bg" style="background-image: url('{{asset("assets/images/detox-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 class="text-dark">Detox</h1>
                <p class="text-dark">
                    Ono na čemu će vam vaše tijelo biti izrazito zahvalno je definitivno detox, koji mu možete priuštiti u Termag-u. Iskoristite mogućnost da očistite svoje tijelo od štetnih tvari, i pružite mu nevjerovatnu dozu zdravlja i opuštanja u jednom. Dozvolite vašem organizmu da uspostavi svoj prirodni balans i da obnovi energiju uz naš detox program. 
                </p>
                <div class="btn-wrapper">
                    <a href="#" class="btnn btn_primary">Book now</a>
                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience detox-services">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="text-center">
                <div class="row">
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-1.png')}}" alt="kuglana">
                            <figcaption>Nutricionističko <br/> savjetovanje</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-2.jpg')}}" alt="kuglana">
                            <figcaption>Wellness Aktivnosti</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/detox-3.png')}}" alt="kuglana">
                            <figcaption>Prirodna Ishrana</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/nutri.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd cardd-2">
                    <h2>Unapredite Ishranu Uz Naše Nutricioniste</h2>
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
    <p style="text-align:center;color:red;font-size:30px">WELLNESS AKTIVNOSTI</p>
    <section class="accommodation nutrition">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content-wrapper">
                    <h2 class="title">Prirodna Ishrana</h2>
                    <p class="txt">Zdravi životni stilovi su ono što promovišemo u hotelu Termag. Samim tim, posebnu pažnju posvećujemo prirodnoj ishrani, kako bismo vam omogućili detoksikaciju u pravom smislu te riječi. U našoj kuhinji se pripremaju posebno osmišljena jela koja će prijati vašem organizmu te mu pružiti hranljive sastojke koji su mu potrebni. Svježi, organski sastojci koje koristimo u pravljenju ovih specijaliteta, pružiće vam neophodni balans u ishrani i doprinijeti potpunom detox-u organizma.</p>
                    <a href="#" class="btnn btn_gold">Saznaj više</a>
                </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
