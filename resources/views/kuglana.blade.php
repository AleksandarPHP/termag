@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/kuglana-hero.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Kuglana</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Hotel Termag Jahorina raspolaže visokokvalitetnim zabavnim sadržajima, koji ćeupotpuniti Vaš odmor i omogućiti Vam da ostanete u top formi. Nakon dugog dana,sastanaka, skijanja ili razgledanja, možete se opustiti u SPA zoni ili zabaviti u kuglanii bilijar sali.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/kuglana-bg.png")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600"> 
                    <h2>Kuglana hotela Termag</h2>
                    <p class="txt">
                        će vas na prvom mjestu oduševiti originalnim dizajnom u neoplaninskom stilu. Prirodni materijali koji vas okružuju dok kuglate daju posebnu opuštajuću atmosferu, pa je samim tim užitak još veći. Naša kuglana ima dvije trake ukupnog kapaciteta 16 igrača, tako da možete da slavite rođendan ili se opuštate sa prijateljima i porodicom ili da za potrebe svoje firme organizujete takmičenje, kapaciteti naše kuglane stoje Vam na raspolaganju.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/bilijar.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Bilijar</h2>
                <p class="txt">
                    Bilijar sala je tu da Vam upotpuni slobodno vrijeme uz prijatnu muziku, piće iz cafe restorana i ugodan ambijent. Klimatizovana bilijar sala, sa dva bilijar stola, čeka sve zaljubljenike u dobru partiju bilijara: vrsne majstore, početnike, rekreativce ili samo ljude željne prijatnog ambijenta, kvalitetne muzike i možda malo razgovora uz sport
                    za odabrane...  
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
