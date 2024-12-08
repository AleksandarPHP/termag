@extends('layouts.app')
    @section('title', Helper::title(189))
    @section('description', Helper::description(189))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(190) @endphp

        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>
    <section class="booking empty"></section>
    <section class="wellness-spa">
        @php $text =  Helper::text(191) @endphp
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
    <section class="villa-termag">
        @php $text =  Helper::text(192) @endphp
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
    @include('partials/socials')
    <section class="special registration">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-smaller">Registracija</h2>
                    <p class="txt">
                        Učestvujte u jedinstvenoj triatlon trci i doživite jedno posebno takmičarsko iskustvo.
                        Registacije su otvorene te se možete prijaviti.
                    </p>
                </div>
              

                <div>
                    <h3>Startni paket:</h3>
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
    </section>

    <section class="race">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-6">
                    <img src="{{asset('assets/images/race-1.png')}}" alt="trka" class="img-fluid">
                </div>
                <div class="col-sm-4 col-6">
                    <img src="{{asset('assets/images/race-2.png')}}" alt="trka" class="img-fluid">
                </div>
                <div class="col-sm-4 col-6">
                    <img src="{{asset('assets/images/race-3.png')}}" alt="trka" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
