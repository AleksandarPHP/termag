@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/konf-sala-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h4>Autentičan Dizajn u Formalnom Ruhu</h4>
                <h1>Konferencijska Sala</h1>
                <p>
                    Hotel Termag raspolaže izuzetno dobro opremljenom konferencijskom salom, autentičnog dizajna, kapaciteta do 350 mjesta. Ona je idealan prostor za vaša poslovna događanja u profesionalnom ambijentu naglašavajući kombinaciju formalnosti i estetike.  Prostor odiše jedinstvenošću uz naglašenu estetiku i zagarantovanu funkcionalnost koja će unaprijediti vaše poslovne poduhvate.
                </p>
            </div>
        </div>
    </section>
    @include('partials/sponsors')

    <section class="villa-termag">
                <div class="bg" style="background-image: url('{{asset("assets/images/seminars-bg.jpg")}}');"></div>
                <div class="container">
                    <div>
                        <div class="cardd">
                            <h2>Konferencije i seminari</h2>
                            <p class="txt mb-4">
                            Termag Hotel Jahorina je do sada bio domaćin velikom broju MICE događaja. Ogroman broj seminara iz oblasti medicine, farmacije, prava, organizacija kick off i sales konferencija, retail bussines, pa sve do umjetničkih izložbi, modnih revija, koncerata, političkih skupova visokog ranga, garant su iskustva i vrhunskog profesioanlizma našeg osoblja koje može uspješno odgovoriti najkompleksnijim zahtjevima.
                            </p>
                            <p class="txt">
                            Kompanije poput<strong>Nelt, Podravka, Mercedes-Benz, Bambi, Petrol, Molson Coors, Opel, ambasade Švedske, Švajcarske, SAD, USAID, OSCE, UNDP, OHR, IRI, Ministarstvo odbrane BiH, Predsjedništvo BiH, Privredna komora Republike Srpske, Ekonomski fakultet</strong> i brojni drugi zadovoljni klijenti su garant vrhunske usluge i uspjeha vaše konferencije u hotelu Termag.
                            </p>
                            <a href="#" class="btnn btn_primary">Book now</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wellness-spa">
                <div class="bg" style="background-image: url('{{asset("assets/images/location.jpg")}}');"></div>
                <div class="container">
                    <div class="cardd">
                        <h2>Lokacija</h2>
                        <p class="txt mb-4">
                        Termag Hotel Jahorina se nalazi u samom središtu ski centra Jahorina, na nadmorskoj visini od 1550 m n/v, a od aerodroma je udaljen 30 km ili pola sata vožnje.
                        </p>
                        <p class="txt mb-4">
                        Smješten u predivnoj prirodi, izolovan od gradske buke, pruža idealne uslove za nesmetan rad.
                        </p>
                        <p class="txt mb-4">
                        Hotel posjeduje sopstveni parking prostor kao i podzemnu garažu za 40 vozila.
                        </p>
                        <p class="txt mb-4">
                        Parking je opremljen sa dva punjača za električne automobile, dok se u garaži nalazi još jedna jedinica za punjenje elektičnih vozila.
                        </p>
                        <p class="txt">
                        Glavna seminar sala, kapaciteta do 450 mjesta, uz dvije manje kapaciteta 30 i 90, mjesta, daju mogućnost prijema do 600 gostiju zu adekvatan smještaj.
                        </p>
                        <a href="#" class="btnn btn_primary">Pošaljite Upit</a>
                    </div>
                </div>
            </section>

            <section class="villa-termag">
                <div class="bg" style="background-image: url('{{asset("assets/images/flexibility-bg.jpg")}}');"></div>
                <div class="container">
                    <div>
                        <div class="cardd">
                            <h2>Konferencije i seminari</h2>
                            <p class="txt">
                            Kada organizujete seminar, kongres ili konferenciju brojni zahtjevi se postavljaju pred vas: dovoljan broj soba, funkcionalna seminar sala, dobra hrana, vrhunska usluga, parking, blizina aerodroma, mogućnost transfera, fleksibilnost i mogućnost brzog odogovora na specifične zahtjeve… Sve ovo može da zada pravu glavobolju ali ako odaberete Termag Hotel za vaš slijedeći događaj sve vaše brige postaju prošlost i možete biti sigurni u uspjeh vašeg eventa.
                            </p>
                            <a href="#" class="btnn btn_primary">Pošaljite Upit</a>
                        </div>
                    </div>
                </div>
            </section>
</main>

@include('partials/footer')
