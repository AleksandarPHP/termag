@include('partials/header')

<main>
    <section class="career">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/villa-termag.mov') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Villa Termag</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">> Ekskluzivni apartmani na Jahorini</p>
            </div>
        </div>
    </section>
    @include('partials/booking')

    <section class="accommodation">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                        <h2 class="title">Apartmani sa Kaminom</h2>
                        <p class="txt">
                            Apartmani Ville Termag, osvajaju svojim predivnim
                            enterijerom koji je bogat detaljima i pažljivo
                            odabranim namještajem, izuzetnog kvalieta.
                            Specifičnost svakog apartmana je kamin, koji svojim
                            rustičnim izgledom osvaja prostoriju. Daje toplinu
                            prostoru i stvara jednu posebnu i prijatnu atmosferu
                            za nezaboravne trenutke.
                        </p>
                        <a href="#" class="btnn btn_gold">Saznaj više</a>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/privatnost-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Privatnost</h2>
                <p class="txt">
                    Villa Termag odvojena je od glavne hotelske zgrade, što joj daje privatnost u kojoj gosti mogu da uživaju. Ukoliko ste tip osobe koji voli intimniju atmosferu, apartmani Ville Termag su pravi izbor za vas. Ova ušuškana oaza mira pružiće vam sklonište od svakodnevne užurbanosti i prirediti odmor kakav zaslužujete.
                </p>
                <a href="#" class="btnn btn_primary">Book Now</a>
            </div>
        </div>
    </section>

    <section class="wellness-spa reversed">
        <div class="bg" style="opacity: 0.2;z-index:1;background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                    <h2>Apartman Tip A</h2>
                    <p class="txt">
                        Spavaća soba, dnevni boravak sa kaminom, kuhinja i kupatilo. Spavaća soba sa francuskim ležajem, dnevna soba sa dvosjedom na razvlačenje. Broj apartmana ovog tipa - 2.

                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
                <img class="img-fluid" src="{{asset('assets/images/tip-a.png')}}" alt="villa termag">
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="villa-termag villa-termag-b">
        <div class="bg" style="background-image: url('{{asset("assets/images/villa-termag-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Apartman Tip B</h2>
                    <p class="txt">
                        3 spavaće sobe, dnevni boravak sa kaminom, kuhinja i kupatilo. Spavaća soba sa francuskim ležajem, 2 spavaće sobe sa francuskim i standardnim ležajem, dnevna soba sa dvosjedom na razvlačenje. Broj apartmana ovog tipa – 2.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
                <img class="img-fluid" src="{{asset('assets/images/villa-termag-inner.jpg')}}" alt="villa termag">
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
