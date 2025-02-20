@extends('layouts.app')
    @section('title', Helper::title(92))
    @section('description', Helper::description(92))
    @section('content')

<main>
    <section class="career">
        @php $text =  Helper::text(93) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    <section class="booking empty"></section>
    @php $text =  Helper::text(94) @endphp
    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
    <section class="experience">
    @php $text =  Helper::text(95) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            <div class="text-center">
                @isset($text->title)
                <h2>{{$text->title}}</h2>
                @endisset
                
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset

                <div class="row">
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                        <figure>
                            @php $text =  Helper::text(227) @endphp
                            @isset($text->image)
                            <img class="img-fluid" src="{{Helper::image($text->image, 365,250, false)}}" alt="porodicna 8km">
                            @endisset
                            @isset($text->title)
                            <figcaption>{{$text->title}}</figcaption>
                            @endisset
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            @php $text =  Helper::text(228) @endphp
                            @isset($text->image)
                            <img class="img-fluid" src="{{Helper::image($text->image, 365,250, false)}}" alt="plava 24km">
                            @endisset
                            @isset($text->title)
                            <figcaption>{{$text->title}}</figcaption>
                            @endisset
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            @php $text =  Helper::text(229) @endphp
                            @isset($text->image)
                            <img class="img-fluid" src="{{Helper::image($text->image, 365,250, false)}}" alt="crvena 34km">
                            @endisset
                            @isset($text->title)
                            <figcaption>{{$text->title}}</figcaption>
                            @endisset
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="villa-termag">
    @php $text =  Helper::text(96) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
    <section class="wellness-spa">
    @php $text =  Helper::text(97) @endphp
        <div class="bg" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
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
    @include('partials/socials')
    <section class="special registration registration-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h3>Startni paket:</h3>
                    <h2 class="title-smaller">Registracija</h2>
                    <p class="txt">
                        Cijene startnih paketa su slijedeće:
                    </p>
                    <ul>
                        <li>PORODIČNI 40,00 KM</li>
                        <li>PLAVI 45,00 KM </li>
                        <li>CRVENI 50,00 KM, </li>
                    </ul>
                    <p class="txt">a u cijenu su uključene slijedeće pogodnosti:</p>
                </div>
              

                <div>
                    <p class="txt">
                        Cijena ovog paketa je 40KM, a u cijenu su uključene sledeće pogodnosti:
                    </p>
                </div>

                <div class="row row-2">
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-1.svg')}}" alt="ikonica">
                            <p>
                                50% popusta na smještaj u Termag Hotelu (važi za učesnika i jednu osobu u pratnji)
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-2.svg')}}" alt="ikonica">
                            <p>
                                Bočica za napitke
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-3.svg')}}" alt="ikonica">
                            <p>
                                Djeca do 12 godina sudjeluju GRATIS
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-4.svg')}}" alt="ikonica">
                            <p>
                                Okrepne stanice
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-5.svg')}}" alt="ikonica">
                            <p>
                                Oficijelni dres
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-6.svg')}}" alt="ikonica">
                            <p>
                                Bonovi za konzumaciju hrane i pića
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-7.svg')}}" alt="ikonica">
                            <p>
                                Finišerska diploma
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-8.svg')}}" alt="ikonica">
                            <p>
                                DJ after party
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-9.svg')}}" alt="ikonica">
                            <p>
                                Osiguranje za takmičare
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-10.svg')}}" alt="ikonica">
                            <p>
                                Elektronska zahvalnica za uspomenu
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-11.svg')}}" alt="ikonica">
                            <p>
                                Babysitting - Tete čuvalice za djecu učesnika trke
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('assets/images/ri-12.svg')}}" alt="ikonica">
                            <p>
                                Animacija za djecu
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <p class="txt mb-4">
                        Za smještaj zadužen je hotel Termag, te vi i vaša ekipa možete uživati u udobnosti i komforu koje ovaj hotel nudi.
                    </p>
                    <p class="txt">
                        Uplata startnine:
                    </p>
                    <ul>
                        <li>Uplate startnine moguće su do (navesti datum) godine.</li>
                        <li>Instrukcije za uplatu možete preuzeti ovdje(link za upute).</li>
                        <li>Ako plaćate karticom, molimo vas da ispunite online zahtjev (link za online plaćanje).</li>
                    </ul>
    
                    <div class="btn-wrapper">
                        <a href="#" class="btnn btn_primary">Prijavite se odmah</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
