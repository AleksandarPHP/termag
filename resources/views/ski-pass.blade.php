@include('partials/header')

<main>
    <section class="accommodation ski-pass-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content-wrapper">
                        <h1 class="title">
                            Vaš ski pass na Jahorini - pristup svemu
                        </h1>
                        <p class="txt">
                            Kako biste bez dodatnih briga, potpuno bezbrižno
                            uživali u zimskim čarolijama Jahorine, uz
                            nezaobilazno skijanje, tu je Ski pass na Jahorina.
                            Ski pass otvara brojna vrata zimskih avantura i
                            omogućava vam potpuno uživanje u ovom planinskom
                            raju.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7"></div>
            </div>
        </div>
    </section>
    <section class="wellness-spa how-to-buy-ski-pass">
        <div class="bg centar" style="background-image: url('{{asset("assets/images/how-to-buy-ski-pass.png")}}');"></div>
        <div class="container">
            <div class="cardd">
                <h2>Kako Do Ski Pass-a?</h2>
                <p class="txt">
                    Ski pass možete kupiti na nekoliko jednostavnih načina. Možete ga kupiti unaprijed, putem online načina kupovine, zatim na oficijelnim prodajnim mjestima ili na recepciji hotela u kome odsjedate. Svaki od ovih načina je izuzetno jednostavan i omogućiće vam da u samo nekoliko koraka u svojim rukama imate Ski pass.
                </p>
            </div>
        </div>
    </section>
    <section class="wellness-spa reversed ski-info">
        <div class="bg" style="opacity: 0.2;z-index:1;background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd">
                    <h2>Informacije o Ski pass-u</h2>
                    <p class="txt mb-4">
                        Ono što Ski pass nudi je brz i efikasan pristup ski stazama, ski liftovima ali i posebne ponude za grupne posjete. Iskusnim skijašima ali i onima koji su potpuno novi u ovom svijetu, omogućen je pristup svim ski stazama, kako bi na najbolji mogući način doživjeli sve čari ove zimske discipline. Uz pogodnosti Ski pass-a, možete zaboraviti na čekanja u redovima, jer će vam pristup modernim ski liftovima mnogo olakšati funkcionisanje na ski stazama. Na raspolaganju su posebne ponude za grupe i porodice kako bi se unaprijedilo skijaško iskustvo.
                    </p>
                    <p class="txt">
                        Nabavite i vi svoj Ski pass na vrijeme i prepustite se zimskim čarolijama planine Jahorine uz pogodnosti koje on nosi.
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
                <img class="img-fluid" src="{{asset('assets/images/skije-bg.png')}}" alt="skije">
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
