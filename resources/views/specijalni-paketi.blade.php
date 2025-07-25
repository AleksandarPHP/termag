@extends('layouts.app')
    @section('title', Helper::title(173))
    @section('description', Helper::description(173))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(174) @endphp
        <div class="bg center" style="background-image: url('{{Helper::image($text->image, 1270, 700, false)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
                @isset($text->text)
                {!! $text->text !!}
                @endisset
            </div>
        </div>
    </section>
    <section class="special registration packages">
        <div class="bg center" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                @php
                    $packages = App\Models\Package::where('special', 1)->where('special', 1)->whereNull('special_view')->get();
                @endphp
                @foreach ($packages as $package)
                <div class="text-center">
                    <h2 class="title-smaller">{{$package->title}}</h2>
                    {!!$package->text!!}
                <nav class="pills-wrapper">
                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                    @foreach ($package->options as $item)
                    <button class="nav-link @if ($loop->first)active @endif " id="nav-home-tab{{$item->id}}" data-bs-toggle="tab" data-bs-target="#nav-home{{$item->id}}" type="button" role="tab" aria-controls="nav-home{{$item->id}}" aria-selected="true">{{$item->nights}} {{__('nights')}}</button>
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
                                {{__('THE PRICE OF THE PACKAGE IS')}} {{$item->price}} KM ({{$item->priceEur}} EUR) + bto
                            </p>
                            <p class="txt">
                                *{{__('The package is valid from')}} {{ \Carbon\Carbon::parse($item->from_date)->format('d.m.Y') }} {{__('to')}} {{\Carbon\Carbon::parse($item->to_date)->format('d.m.Y')}}
                            </p>
                            <a href="{{$package->url}}" class="btnn btn_primary mt-4">{{__('Book now')}}</a>
                        </div>
                    </div>  
                    <br>
                    @endforeach
                </div>
                @endforeach
        </div>
    </section>
</main>

@endsection
