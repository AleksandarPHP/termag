@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/ski-rental.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Ski Rental</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Termag Hotel Jahorina predstavlja pravi ski-in ski-out jer se iz hotela direktno na skijama izlazi na stazu Poljice i polaznu stanicu gondole.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/ski-rental-bg.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Ski Rental</h2>
                    <p class="txt mb-4">
                        Termag Hotel Jahorina predstavlja pravi ski-in ski-out jer se iz hotela direktno na skijama izlazi na stazu Poljice i polaznu stanicu gondole. Takođe, nakon skijanja na skijama sa staze direktno dolazite do hotela. A, da biste uopšte skijali potrebna vam je i oprema. Ski rental hotela Termag je opremljen najnovijim modelima skija i skijaških cipela, adekvatnih vašem nivou skijaškog znanja. Bilo da ste početnik ili napredni skijaš imamo opremu koja odgovara baš vama.
                    </p>
                    <p class="txt mb-4">
                        Skije su uvijek adekvatno pripremljene uslovima na stazi jer ih servisiramo u našem ski servisu. Nakon svake upotrebe skijaške cipele se prvo suše, te onda dezinfikuju.
                    </p>
                    <p class="txt mb-4">
                        Potpuno isti tretman prolaze i snowbordovi i čizme za snowboard. Pored skijaške opreme posjedujemo i sanke i druge rekvizite za sankanje. 
                    </p>
                    <p class="txt">
                        <strong>
                            Radno vrijeme ski rentala je 08:00 – 22:00 tako da ne morate da brinete, mi vamo omogućavamo i dnevno i noćno skijanje.
                        </strong>
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg centar" style="background-image: url('{{asset("assets/images/ski-servis-bg.png")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Ski Servis</h2>
                <p class="txt mb-4">
                    U sklopu ski rentala posluje i ski servis hotela Termag. Posjedujemo vrhunsku opremu za servisiranje skija i snowboard sa kojom rukuje naše profesionalno osoblje.
                <p class="txt mb-4">
                    Pružamo usluge montaže vezova, podešavanj vezova, oštrenja rubnika, reparacija plohe, kompletan servis.
                </p>
                <p class="txt">
                    Vrhunska usluga na vrhunskom mjestu.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
