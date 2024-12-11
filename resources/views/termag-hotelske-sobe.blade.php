@extends('layouts.app')
    @section('title', Helper::title(201))
    @section('description', Helper::description(201))
    @section('content')

<main>
<section class="career hotel-rooms">
    @php $text =  Helper::text(202) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    @include('partials/booking')
    @include('partials/socials')

    <section class="special hsnpk">
                <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
                <div class="container">
                <h4 class="subtitle">
                    Luksuzni doživljaj u prostranosti
                </h4>
                <h2 class="title-smaller">Economic Soba</h2>
                <p class="txt">
                    Sa ukupnom površinom od 38m2, lux sobe hotela Termag vam pružaju i više nego dovoljno prostora za vaš luksuzni odmor. Sobe posjeduju klasičan bračni krevet ili dva odvojena u opciji “twin”, gdje imate opciju dodavanja trećeg pomoćnog ležaja. Zadovoljstvo gostiju nam je izuzetno važno, pa smo se potrudili da vam ponudimo različite opcije, kako biste mogli da izaberete upravo ono što vam najviše odgovara.
                </p>
                <div class="row">
                        <div class="col-lg-6">
                            <div class="card" >
                                <div class="npk-slider-1"> 
                                    <img src="{{asset('assets/images/hs-1.jpg')}}" class="card-img-top" alt="porodicni paket">
                                    <img src="{{asset('assets/images/hs-1.jpg')}}" class="card-img-top" alt="porodicni paket">
                                </div>
                                <div class="card-body">
                                  <h5>Luksuzni doživljaj u prostranosti</h5>
                                  <p class="txt">Sa ukupnom površinom od 38m2, lux sobe hotela Termag vam pružaju i više nego dovoljno prostora za vaš luksuzni odmor. Sobe posjeduju klasičan bračni krevet ili dva odvojena u opciji “twin”, gdje imate opciju dodavanja trećeg pomoćnog ležaja. Zadovoljstvo gostiju nam je izuzetno važno, pa smo se potrudili da vam ponudimo različite opcije, kako biste mogli da izaberete upravo ono što vam najviše odgovara.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                                <img src="{{asset('assets/images/hs-2.jpg')}}" class="card-img-top" alt="Romantični Paket">
                                <div class="card-body">
                                  <h5>Unikatnost U Svakom Detalju</h5>
                                  <p class="txt">Opremljene na jedinstven i unikatan način, sa posebno osmišljenim estetskih detaljima, naše Lux sobe će zadovoljiti vizuelne standarde i gostiju sa najistančanijim ukusom. Kvalitetan namještaj od punog drveta daje prostoru bogatstvo, a ono na šta smo posebno ponosni je “mountain view” koji će vas ostaviti bez daha.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                                <img src="{{asset('assets/images/hs-3.jpg')}}" class="card-img-top" alt="Romantični Paket">
                                <div class="card-body">
                                  <h5>Tehnološka opremljenost</h5>
                                  <p class="txt">Abmijent naših soba je prilagođen idealnoj harmoniji između klasičnih i modernih detalja, koji stvaraju osjećaj toplog doma. Udobna i ušuškana atmosfera koju ističemo, čini da momenti provedeni u ovom prostoru ostanu duboko urezani u vašem sjećanju kao nezaboravni.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                                <img src="{{asset('assets/images/hs-4.jpg')}}" class="card-img-top" alt="Romantični Paket">
                                <div class="card-body">
                                  <h5>Idealan smještaj za dvoje</h5>
                                  <p class="txt">Lux sobe hotela Termag su vaša topla i luksuzna oaza u kojoj ćete doživjeti nezaboravne momente. To nije samo prostor za spavanje, to je jedno zaista posebno iskustvo. Originalno dizajniran namještaj i rustični stil koji dominira su upotpunili cijelu priču i učinili da ove smještajne jedinice odišu smirenom i toplom energijom koja će vas oduševiti.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>

                    <h4 class="subtitle">Luksuzni doživljaj u prostranosti</h4>
                    <h2 class="title-smaller">Lux Sobe</h2>
                    <p class="txt">
                        Sa ukupnom površinom od 38m2, lux sobe hotela Termag vam pružaju i više nego dovoljno prostora za vaš luksuzni odmor. Sobe posjeduju klasičan bračni krevet ili dva odvojena u opciji “twin”, gdje imate opciju dodavanja trećeg pomoćnog ležaja. Zadovoljstvo gostiju nam je izuzetno važno, pa smo se potrudili da vam ponudimo različite opcije, kako biste mogli da izaberete upravo ono što vam najviše odgovara.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" >
                                <img src="{{asset('assets/images/hsnpk-1.jpg')}}" class="card-img-top" alt="porodicni paket">
                                <div class="card-body">
                                  <h5>Porodični Paket</h5>
                                  <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" >
                                <img src="{{asset('assets/images/hsnpk-2.jpg')}}" class="card-img-top" alt="Romantični Paket">
                                <div class="card-body">
                                  <h5>Porodični Paket</h5>
                                  <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag.</p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card" >
                                <img src="{{asset('assets/images/special-3.jpg')}}" class="card-img-top" alt="Relax Paket">
                                <div class="card-body">
                                  <h5>Relax Paket</h5>
                                  <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" >
                                <img src="{{asset('assets/images/special-4.jpg')}}" class="card-img-top" alt="Detox Paket">
                                <div class="card-body">
                                  <h5>Detox Paket</h5>
                                  <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card" >
                                <img src="{{asset('assets/images/special-5.jpg')}}" class="card-img-top" alt="Back to Nature">
                                <div class="card-body">
                                  <h5>Back to Nature</h5>
                                  <p class="txt">dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. </p>
                                  <div>
                                    <a href="#" class="btnn btn_gold">Saznaj Više</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </section>
</main>

@endsection