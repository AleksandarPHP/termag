@include('partials/header') 

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/kamin-sala-bg.png")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Kamin Sala</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    > Ekskluzivni apartmani na Jahorini
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/ambijent-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Rustični ambijent kamin sale u hotelu Termag</h2>
                    <p class="txt">
                        Kamin sala, mjesto gdje se rustični ambijent spaja sa pucketanjem vatre iz kamina stvarajući harmoniju. Sa posebno dizajniranim enterijerom u kome dominiraju momenti od punog drveta i prirodnih materijala, ova prostorija ima jednu specifičnu energiju koja je stvorena za momente uživanja na Jahorini. Predivni kamin, koji je smješten u središtu sale, daje ušuškanu atmosferu i toplinu cijeloj prostoriji. Magični pogled iz kamin sale na ski staze i šume Jahorine, dodatno oplemenjuje cijeli prostor.  Uživajte u momentima opuštanja i mira u Kamin sali uz laganu ambijentalnu muziku koju smo odabrali posebno za vas.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/vino-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Selekcija vina</h2>
                <p class="txt">
                    Kako biste upotpunili svoj boravak u našoj kamin sali, za vas smo pripremili bogatu selekciju vina koja će naglasiti posebnost svakog momenta. U ponudi su vrhunska domaća ali i uvozna vina, pažljivo birana kako bi zadovoljila ukuse pravih ljubitelja vina. Ukoliko imate nedoumice koje vino iz naše bogate ponude odabrate, naše osoblje je tu da vam svojim savjetima i stručnošću izađe u susret.  Dobra čaša vina kraj kamina, kreira momente apsolutne relakcasije dok boravite u našoj Kamin sali.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/desert-bg.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Tradicionalne poslastice</h2>
                    <p class="txt">
                        U tradicionalnom ambijentu naše Kamin sale, uživajte u tradicionalnim poslasticama koje smo vam pripremili sa ljubavlju. Ukusi i mirisi ovih poslastica, pripremljeni u poslastičari hotela Termag,  će vas u potpunosti osvojiti i prirediti pravi užitak za vaša nepca. U kombinaciji sa adekvatnim vinom, ove slasne delicije će vam prirediti slatke momente za pamćenje.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')