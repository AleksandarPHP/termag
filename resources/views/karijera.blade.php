@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/karijera-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Karijera</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    Naš posao je da ugostimo ljude sa svih strana Svijeta i
                    učinimo da se u hotelu Termag osjećaju kao kod kuće.
                </p>
            </div>
        </div>
    </section>

    @include('partials/booking')

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/belief-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Termag hotel vjeruje u tebe!</h2>
                <p class="txt mb-4">
                    Naš ambijent jeste udoban i privlačan ali ono što mu daje pravu toplinu jesu ljudi!
                    I, to ne bilo kakvi ljudi, već Termag Hotel TIM!
                    Veoma smo ponosni na naše zaposlene od kojih svaki daje svoj lični pečat hotelu Termag, te svojim trudom i zalaganjem predstavlja pravog ambasadora dobre usluge.
                    Ako nekada bacite pogled na našu Knjigu utisaka, tu možete da nađete samo pohvale za naše osoblje.
                    I to ništa nije slučajno. Studiozan odabir kadrova, gajenje dobrih međuljudskih odnosa, konstantno ulaganje u osoblje i ugodna radna atmosfera samo su neke od odlika hotela Termag koje su usmjerene prema našim kolegama.
                    Veoma smo ponosni na naše osoblje koje gosti već odavno znaju po imenima i sa kojima su postali čak i prijatelji.
                    Takve veze daju neprocjenjivu vrijednost i siguran su znak da smo na pravom putu!
                    Ako i ti želiš da postaneš dio, nadaleko poznatog i priznatog tima, dovoljno je da popuniš formular ispod i dođeš do nas na razgovor.
                    Bićemo sretni da baš tebi pružimo šansu, da pokažeš da možeš stajati rame uz rame sa najboljim.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <!-- todo form -->

    @include('partials/socials')

</main>

@include('partials/footer')
