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
                            <img class="img-fluid" src="{{Helper::image($text->image, 440,255, false)}}" alt="porodicna 8km">
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
                            <img class="img-fluid" src="{{Helper::image($text->image, 440,255, false)}}" alt="plava 24km">
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
                            <img class="img-fluid" src="{{Helper::image($text->image, 440,255, false)}}" alt="crvena 34km">
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
    <section class="special registration packages  registration-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            @php
            $packages = App\Models\Package::where('special_view', 1)->where('is_active', 1)->get();
        @endphp
        @foreach ($packages as $package)
        <div class="text-center">
            <h3>{{__('Register')}}:</h3>
            <h2 class="title-smaller">{{$package->title}}</h2>
            <br>
        <nav class="pills-wrapper">
            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
            @foreach ($package->options as $item)
            <button class="nav-link @if ($loop->first)active @endif " id="nav-home-tab{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-home{{$item->id}}" type="button" role="tab" aria-controls="nav-home{{$item->id}}" aria-selected="true">{{$item->title}}</button>
            @endforeach
            </div>
        </nav>
        </div>

        <div class="tab-content" id="nav-tabContent">
            @foreach ($package->options as $item)
            <div class="tab-pane fade show @if ($loop->first) active @endif" id="nav-home{{$item->id}}" role="tabpanel" aria-labelledby="nav-home-tab{{$item->id}}" tabindex="0">
                {!!$item->description!!}
                <br>
                <h3>{{$item->title}}</h3>
                <div class="row row-2">
                    @for($i = 0; $i < count($item->options[0]); $i++)
                    <div class="col-md-6">
                        @isset($item->options[0][$i])
                        <div>
                            <img src="{{asset('storage/'.$item->getTranslation('options', 'sr', false)[1][$i])}}" alt="ikonica">
                            <p>
                                {{$item->options[0][$i]}}
                            </p>
                        </div>
                        @endisset
                    </div>
                    @endfor
                </div>
                <br>
                <div class="text-center mt-5">
                    {!!$package->text!!}
                    <br>
                    <a href="{{$package->url}}" class="btnn btn_primary mt-4">{{$package->urlTitle}}</a>
                </div>
            </div>  
            <br>
            @endforeach
        </div>
        @endforeach
            {{-- <div class="text-center">
                <h3>{{$package->title}}:</h3>
                <h2 class="title-smaller">Registracija</h2>
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
            </div> --}}
        </div>
        </div>
    </section>
</main>

@endsection
