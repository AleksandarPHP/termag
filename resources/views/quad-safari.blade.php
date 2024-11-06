@include('partials/header')

<main>
    <section class="career">
        <div class="bg center" style="background-image: url('{{asset("assets/images/quad-bike-hero.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Quad Safari</h1>
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">
                    Olimijska planina Jahorina je veoma poznata ski destinacija. Međutim, ono što tokom ljeta možete doživjeti na Jahorini sigurno vas neće ostaviti ravnodušnim.
                    Jahorina obiluje sa veoma raznovrsnom florom, gdje možete vidjeti dosta ljekovitih trava, borovnice, brusnice, gljive… Prelijepe šume borova, bijelog javora – po kome je i dobila ime, bistre potoke i zadivljujuće planinske masive, koji se pružaju u nedogled.
                </p>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag">
        <div class="bg center" style="background-image: url('{{asset("assets/images/quad-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Quad avantura po vašoj mjeri</h2>
                    <p class="txt">
                        Ako želite na lakši, udobniji i jednostavniji način da doživite Jahorinu tokom ljeta onda je quad safari pravi izbor za vas. Termag hotel posjeduje najnovija CanAm vozila koja garantuju udobnu i sigurnu vožnju, a naši profesionalni vodiči će vam pokazati i najskrivenije kutke Jahorine.
                        Za sve one koji se odluče na ovaj adrenalinski sadržaj hotela Termag obezbjedii smo i kompletnu zaštitnu opremu: kacige, naočale, rukavice, windstop jakne, pa čak i kabanice u slučaju kiše.
                        Vožnja quad vozila na Jahorini je nezaboravno iskustvo koje ne smijete propustiti. Naše osoblje je tu da quad safari prilagodi baš vama, bilo da je pojedinačna vožnja, grupna vožnja ili porodična, doživljaj je neponovljiv. Tokom quad safarija možete obići najvisočije vrhove Jahorine i uživati u pogledu koji oduzima dah, jer se sa vrha vide sve planine u okruženju. Ili pak možete uživati u uzbudljivoj vožnji po šumskim stazama nakon kojih vas čeka planinska užina u prirodi, na prelijepom vidikovcu.
                        Dovoljno je da se obratite našem ljubaznom osoblju na recepciji i rezervišete vaš termin za najuzbudljiviju vožnju ovog ljeta.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/q-1.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/q-2.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/q-3.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/q-4.jpg')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
