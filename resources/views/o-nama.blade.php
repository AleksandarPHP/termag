@include('partials/header')

<main>
    <section class="career">
        <div class="bg" style="background-image: url('{{asset("assets/images/o-nama-bg.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1>O nama</h1>
                <p>
                    Termag, hotel smješten u srcu Jahorine prava je oaza mira i udobnosti. Hotel ima 4 zvjezdice i svojim gostima pruža jedinstveno iskustvo boravka uz brojne sadržaje i mogućnosti koje nudi. Fokusirani smo na zadovoljstvo naših dragih gostiju, te smo za vas pripremili samo najbolje. Naši stalni gosti su garancija kvaliteta i našeg truda koji ulažemo da vam priuštimo idealan boravak kod nas.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/oaza-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Oaza Mira i Udobnosti</h2>
                <p class="txt">
                    Termag, hotel smješten u srcu Jahorine prava je oaza mira i udobnosti. Hotel ima 4 zvjezdice i svojim gostima pruža jedinstveno iskustvo boravka uz brojne sadržaje i mogućnosti koje nudi. Fokusirani smo na zadovoljstvo naših dragih gostiju, te smo za vas pripremili samo najbolje. Naši stalni gosti su garancija kvaliteta i našeg truda koji ulažemo da vam priuštimo idealan boravak kod nas.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/misija-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Naša Misija</h2>
                    <p class="txt">
                        Misija svih nas u hotelu Termag jeste da našim gostima pružimo nezaboravno iskustvo boravka zbog koga ćete nam se uvijek rado vraćati. Apsolutno smo posvećeni vama i vašem zadovoljstvu zato ćemo vam, kroz vrhunsko gostoprimstvo, luksuzni smještaj i brojne aktivnosti to i dokazati. Želimo da svaki trenutak proveden kod nas pamtite po osjećaju topline i udobnosti.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    @include('partials/socials')
    <section class="wellness-spa">
        <div class="bg center" style="transform: rotateY(180deg);background-image: url('{{asset("assets/images/zasto-mi-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Zašto izabrati nas?</h2>
                <p class="txt">
                    Okružen prirodnim ljepotama koje nose poseban spokoj, hotel Termag puža ravnotežu između urbanog komfora i netaknute prirode. Impozantni pogledi na šume, pašnjake, planinske vrhove pružiće vam osjećaj slobode. Takođe, nešto zbog čega ćete rado biti naš gost jeste i raznolikost aktivnosti koje vam nudimo u svim godišnjim dobima. Od zimskih do ljetnjih, sve to vam je dostupno u Termagu. Nudimo vam luksuzan smještaj, sa velikim brojem različitih smještajnih jedinica sa različitim kapacitetom u skladu sa vašim željama. Garantujemo vam udobnost i komfor koje ćete dugo pamtiti. Izuzetno smo ponosni na gastronomiju hotela Termag, te vam nudimo širok spektar različitih tradicionalnih i inostranih jela, savršenog ukusa u kojima ćete uživati svakim zalogajem. Nudimo vam i našu wellnes oazu, kao mjesto gdje ćete se relaksirati, opustiti i zaboraviti svakodnevni stres. Sve ovo, i mnogo više, doživite u hotelu Termag. Dozvolite našem ljubaznom i profesionalnom osoblju da vam priušti odmor za pamćenje.
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
