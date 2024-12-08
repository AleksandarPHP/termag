@extends('layouts.app')
    @section('title', Helper::title(106))
    @section('description', Helper::description(106))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(107) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    @include('partials/booking')
    <!-- testimonials nema smisla da se nalazi ovde, vise konsultacija -->
    <section class="special registration packages packages-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-smaller">Romantični Paket</h2>
                    <p class="txt">
                    Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo pla
                    </p>
                        <nav class="pills-wrapper">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2 noći/ 3 dana</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">3 noći/ 4 dana</button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">4 noći/ 5 dana</button>
                            </div>
                        </nav>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <h3>Paket Za 2 Noći/ 3 Dana:</h3>
                        <p class="txt">
                            Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                        </p>
                        <div class="row row-2">
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                    <p>
                                        Slobodno korišćenje bazena, saune i parnog kupatila
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                    <p>
                                        Polupansion (Večera, Doručak)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                    <p>
                                        1 x romantična večera uz svijeće i bocu šampanjca.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                    <p>
                                        Bademantil i papuče tokom boravka u hotelu.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                    <p>
                                        PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                    <p>
                                        1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                    <p>
                                        Kutija čokoladica za toplu dobrodošlicu
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                    <p>
                                        1 x tretman čokoladom (po osobi).
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                    <p>
                                        1x Doručak u Sobi 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                    <p>
                                        Kasna odjava do 14h na dan odlaska
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <p class="txt">
                                CIJENA PAKETA JE 680,00 KM (348,00 EUR) + bto
                            </p>
                            <p class="txt">
                                *Paket važi od 01.04. do 01.12.
                            </p>
                            <a href="#" class="btnn btn_primary mt-4">Book now</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <h3>Paket Za 3 Noći/ 4 Dana:</h3>
                            <p class="txt">
                                Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                            </p>
                            <div class="row row-2">
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                        <p>
                                            Slobodno korišćenje bazena, saune i parnog kupatila
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                        <p>
                                            Polupansion (Večera, Doručak)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                        <p>
                                            1 x romantična večera uz svijeće i bocu šampanjca.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                        <p>
                                            Bademantil i papuče tokom boravka u hotelu.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                        <p>
                                            PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                        <p>
                                            1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                        <p>
                                            Kutija čokoladica za toplu dobrodošlicu
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                        <p>
                                            1 x tretman čokoladom (po osobi).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                        <p>
                                            1x Doručak u Sobi 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                        <p>
                                            Kasna odjava do 14h na dan odlaska
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <p class="txt">
                                    CIJENA PAKETA JE 1020,00 KM (521,50 EUR) + bto
                                </p>
                                <p class="txt">
                                    *Paket važi od 01.04. do 01.12.
                                </p>
                                <a href="#" class="btnn btn_primary mt-4">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <h3>Paket Za 3 Noći/ 4 Dana:</h3>
                                <p class="txt">
                                    Aranžman obuhvata smještaj za 2 osobe u LUX sobi, 3 noći
                                </p>
                                <div class="row row-2">
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-13.svg')}}" alt="ikonica">
                                            <p>
                                                Slobodno korišćenje bazena, saune i parnog kupatila
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-14.svg')}}" alt="ikonica">
                                            <p>
                                                Polupansion (Večera, Doručak)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-15.svg')}}" alt="ikonica">
                                            <p>
                                                1 x romantična večera uz svijeće i bocu šampanjca.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-16.svg')}}" alt="ikonica">
                                            <p>
                                                Bademantil i papuče tokom boravka u hotelu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-17.svg')}}" alt="ikonica">
                                            <p>
                                                PRIVATE SPA opuštajuća jaccuzzy kupka za dvoje sa Babor preparatima (45 min.).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-18.svg')}}" alt="ikonica">
                                            <p>
                                                1 x relax masaža sa aromatičnim uljima u trajanju od 40 min. (po osobi)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-19.svg')}}" alt="ikonica">
                                            <p>
                                                Kutija čokoladica za toplu dobrodošlicu
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-20.svg')}}" alt="ikonica">
                                            <p>
                                                1 x tretman čokoladom (po osobi).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-21.svg')}}" alt="ikonica">
                                            <p>
                                                1x Doručak u Sobi 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="{{asset('assets/images/ri-22.svg')}}" alt="ikonica">
                                            <p>
                                                Kasna odjava do 14h na dan odlaska
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <p class="txt">
                                        CIJENA PAKETA JE 1020,00 KM (521,50 EUR) + bto
                                    </p>
                                    <p class="txt">
                                        *Paket važi od 01.04. do 01.12.
                                    </p>
                                    <a href="#" class="btnn btn_primary mt-4">Book now</a>
                                </div>
                            </div>
                    </div>
                  </div>
            </div>
    </section>

    <section class="wellness-spa">
        @php $text =  Helper::text(108) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)
                <h2>{{$text->title}}</h2>
                @endisset
                
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>

    <section class="villa-termag">
        @php $text =  Helper::text(109) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h2>{{$text->title}}</h2>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </div>
    </section>

    <section class="wellness-spa py-20">
        @php $text =  Helper::text(110) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                @isset($text->title)
                <h2>{{$text->title}}</h2>
                @endisset
                
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>

    <section class="villa-termag">
        @php $text =  Helper::text(111) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    @isset($text->title)
                    <h2>{{$text->title}}</h2>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                    @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
                </div>
            </div>
        </div>
    </section>

    <section class="experience">
        @php $text =  Helper::text(112) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                @isset($text->title)
                <h2>{{$text->title}}</h2>
                @endisset
                
                @isset($text->subtitle)
                <p class="txt">
                    {{ $text->subtitle }}
                </p>
                @endisset

                <div class="row">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-1.jpg')}}" alt="kuglana">
                            <figcaption>Kuglana</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-2.jpg')}}" alt="kuglana">
                            <figcaption>Igraonica za decu</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-3.jpg')}}" alt="kuglana">
                            <figcaption>Foaje</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection