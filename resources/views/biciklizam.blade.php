@include('partials/header')

<main>
    <section class="career bicklizam">
        <div class="bg center" style="background-image: url('{{asset("assets/images/biciklizam-hero.jpg")}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Biciklizam</h1>
            </div>
        </div>
    </section>
    @include('partials/booking')
    <section class="villa-termag" >
        <div class="bg center" style="background-image: url('{{asset("assets/images/biciklizam-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Biciklizam na Jahorini</h2>
                    <p class="txt">
                        Olimijska planina Jahorina je veoma poznata ski destinacija. Međutim, ono što tokom ljeta možete doživjeti na Jahorini sigurno vas neće ostaviti ravnodušnim.Jahorina obiluje sa veoma raznovrsnom florom, gdje možete vidjeti dosta ljekovitih trava, borovnice, brusnice, gljive… Prelijepe šume borova, bijelog javora – po kome je i dobila ime, bistre potoke i zadivljujuće planinske masive, koji se pružaju u nedogled.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa">
        <div class="bg center" style="background-image: url('{{asset("assets/images/mount-bike-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Mountainbike – brdski biciklizam</h2>
                <p class="txt">
                    Jahorina je planina koja se proteže na velikom prostoru a povezana je i sa Ravnom planinom na sjeveru. Upravo ta veza Jahorine i Ravne planine sa velikim brojem šumskih puteva i staza je pravi mali raj za ljubitelje biciklizma. Staze se protežu kroz šumu i pružaju vrhunski užitak vožnje kroz prirodu i ugodnu hladovinu. Konfiguracija terena je takva da možete kombinovati lakše staze ali i one zhtjevnije, u zavisnosti od vaše fizičke prirpemljenosti. Staze su pogodne i za rekreativce i za one malo kativnije bicikliste.
                    Ono što Jahorinu čini posebnom je staza kojom se možete odvesti na sam vrh Jahorine i uživati u nestvarnim prizorima. Ali tu se avantura tek nastavlja jer plato Jahorine koji okružuje njene vrhove je takođe ispresjecan velikim brojem staza koje predstavljaju pravi zov prirode. I nemojte se iznenaditi kada upravo tu sretnete krdo divljih konja koji slobodno jure upravo stazama koje i vi vozite.  
                </p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>
    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-1.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-2.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-3.jpg')}}" alt="" class="img-fluid"></div>
                <div class="col-md-3 col-6"><img src="{{asset('assets/images/b-4.jpg')}}" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
