@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/svadbe-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Svadbe</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Bilo da planirate intimnije vjenčanje ili nešto ekstravagantnije, Hotel Termag Vam nudi nenadmašnu eleganciju i sofisticiranost. Naš profesionalni tim za organizaciju vjenčanja će učiniti sve da Vam pomogne u organizaciji svih detalja vezanih za ovu svečanost, u potpunosti prateći Vaše želje i stil.
                </p>
            </div>
        </div>
    </section>
    <section class="booking empty"></section>

    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/plan-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Planiranje</h2>
                    <p class="txt">
                        Budite sigurni da će svaki korak Vašeg značajnog dana i proslave biti pažljivo isplaniran do najsitnijih detalja, a Vaša očekivanja ispunjena. Na raspolaganju Vam je iskusan tim koji će Vam pomoći u vezi svih detalja proslave – od izbora menija, postavke sale, rasporeda stolova, cvjetnih aranžmana do svadbene torte.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials/socials')

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/banket-sala-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                    <h2>Banket Sala</h2>
                    <p class="txt">
                    Vaš poseban dan možete proslaviti u našoj Banket sali koja je osvjetljena prirodnim dnevnim svjetlom, a koja se zavisno od broja gostiju, može dijeliti. Maksimalan kapacitet iznosi 300 zvanica u banket postavci.Nudimo raznovrsne menije za vjenčanja koji mogu biti prilagođeni Vašem ukusu i posebnim željama u skladu sa potrebama gostiju.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
