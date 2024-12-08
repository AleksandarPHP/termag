@extends('layouts.app')
    @section('title', Helper::title(129))
    @section('description', Helper::description(129))
    @section('content')
<main>
    <section class="career career-2">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/romance.mp4') }}"
                type="video/mp4"
            />
        </video>

        <div class="container">
        @php $text =  Helper::text(130) @endphp
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
                @isset($text->subtitle)
                <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                    {{$text->subtitle}}
                </p>
                @endisset
                @if($text->urlTitle!='' && $text->url)<a href="{{Helper::url($text->url)}}" class="btnn btn_primary">{{$text->urlTitle}}</a>@endif
            </div>
        </div>
    </section>
    @include('partials/booking')

    <section class="special registration packages packages-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="text-center">
                    @php
                        $package = App\Models\Package::findOrFail(2);
                    @endphp
                    <h2 class="title-smaller">{{$package->title}}</h2>
                        {!!$package->text!!}
                    <nav class="pills-wrapper">
                        <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                        @foreach ($package->options as $item)
                        <button class="nav-link @if ($loop->first)active @endif " id="nav-home-tab{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-home{{$item->id}}" type="button" role="tab" aria-controls="nav-home{{$item->id}}" aria-selected="true">{{$item->nights}} noći</button>
                        @endforeach
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    @foreach ($package->options as $item)
                    <div class="tab-pane fade show @if ($loop->first) active @endif" id="nav-home{{$item->id}}" role="tabpanel" aria-labelledby="nav-home-tab{{$item->id}}" tabindex="0">
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
                        <div class="text-center mt-5">
                            <p class="txt">
                                {{__('THE PRICE OF THE PACKAGE IS')}} {{$item->price}} KM (348,00 EUR) + bto
                            </p>
                            <p class="txt">
                                *{{__('The package is valid from')}} {{ \Carbon\Carbon::parse($item->from_date)->format('d.m.Y') }} {{__('to')}} {{\Carbon\Carbon::parse($item->to_date)->format('d.m.Y')}}
                            </p>
                            <a href="#" class="btnn btn_primary mt-4">Book now</a>
                        </div>
                    </div>  
                    @endforeach
                </div>
            </div>
    </section>

    <section class="wellness-spa aktivni-izazov">
        @php $text =  Helper::text(131) @endphp
               <video  autoplay loop muted  src="{{asset('assets/videos/romance-2.mp4')}}"></video>
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

            <section class="villa-termag ukus-jahorine">
                <video autoplay muted loop>
                    <source
                        src="{{ asset('assets/videos/candle.mp4') }}"
                        type="video/mp4"
                    />
                </video>
                <div class="container">
                    @php $text =  Helper::text(132) @endphp
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
            <section class="wellness-spa aktivni-izazov">
               <video  autoplay loop muted  src="{{asset('assets/videos/intimate.mp4')}}"></video>
                <div class="container">
                    @php $text =  Helper::text(132) @endphp
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

</main>

@endsection
