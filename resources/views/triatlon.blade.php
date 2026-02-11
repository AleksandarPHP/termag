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
        @php $text =  Helper::text(192) @endphp
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
    @include('partials/socials')
    <section class="special registration">
        <div class="bg center" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                @php
                    $package = App\Models\Package::findOrFail(10);
                @endphp
                <div class="text-center">
                    <h2 class="title-smaller">{{$package->title}}</h2>
                    {!!$package->text!!}
                </div>
                <div class="tab-content" id="nav-tabContent">
                    @foreach ($package->options as $item)
                    <div class="tab-pane fade show @if ($loop->first) active @endif" id="nav-home{{$item->id}}" role="tabpanel" aria-labelledby="nav-home-tab{{$item->id}}" tabindex="0">
                    <div>
                        <h3>{{ $item->title }}</h3>
                        <p class="txt">
                            {{$item->subtitle}}
                            </p>
                        </div>
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
                        {!! $item->description !!}
                        <div class="text-center mt-5">
                            <p class="txt">
                                {{__('THE PRICE OF THE PACKAGE IS')}} {{$item->price}} KM ({{$item->priceEur}} EUR) + bto
                            </p>
                            <p class="txt">
                                *{{__('The package is valid from')}} {{ \Carbon\Carbon::parse($item->from_date)->format('d.m.Y') }} {{__('to')}} {{\Carbon\Carbon::parse($item->to_date)->format('d.m.Y')}}
                            </p>
                        </div>
                    </div>  
                    @endforeach
                </div>
                @if($package->urlTitle!='' && $package->url)
                <div class="btn-wrapper">
                    <a href="{{Helper::url($package->url)}}" class="btnn btn_primary">{{ $package->urlTitle }}</a>
                </div>
                @endif
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
