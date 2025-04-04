@extends('layouts.app')
    @section('title', Helper::title(247))
    @section('description', Helper::description(247))
    @section('content')

<main>
    <section class="weather">
        <div class="bg center" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
        @php $text =  Helper::text(248) @endphp
                @isset($text->title)
                <h1 class="title-larger">{{$text->title}}</h1>
                @endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
                <div class="weather-cards">
                    <div class="weather-card">
                    <div class="bg center" style="opacity: 1;background-image: url('{{asset("assets/images/weather-card-bg.png")}}');"></div>
                    @php
                        $today = now();
                        $current = $current['current'];
                    @endphp
                        <div>
                            <h3>{{$today->format('l')}}</h3>
                            <p class="date">{{$today->format('d M Y')}}</p>
                            <p>
                                <img src="{{asset('assets/images/lokacija.svg')}}" alt="lokacija">
                                Jahorina
                            </p>
                        </div>
                        @isset($current)
                        <div>
                            <img src="{{ $current['condition']['icon'] }}" alt="suncano">
                            <h4>{{$current['temp_c'] - 3}}</h4>
                            <h5>{{ $current['condition']['text'] }}</h5>
                        </div>
                        @endisset
                    </div>
                    <div class="weather-card">
                    <div class="bg center" style="opacity:0.2;background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
                        <div>
                            <div>
                                <h5>PRECIPITATION</h5>
                                <p>{{isset($current['precip_in']) ? $current['precip_in'] : 0}}%</p>
                            </div>
                            <div>
                                <h5>HUMIDITY</h5>
                                <p>{{isset($current['humidity']) ? $current['humidity'] : 0}}%</p>
                            </div>
                            <div>
                                <h5>WIND</h5>
                                <p>{{isset($current['wind_mph']) ? $current['wind_mph'] : 0}} km/h</p>
                            </div>
                        </div>
                        @php
                            $weathers = cache()->get('weathers');
                        @endphp
                        <div class="row">
                            @isset($weathers)
                                @foreach($weathers as $date => $data)
                                    @continue($loop->first)
                                    <div class="col-md-6 col-6">
                                        <div>
                                            <img src="{{ $data['icon'] }}" alt="vremenska ikonica">
                                            <h6>{{ $date }}</h6>
                                            <p class="avg"><strong>{{ $data['avgtemp'] }}°C</strong></p>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>

                        <div class="location">
                            <p class="avg">
                                <img src="{{asset('assets/images/lokacija.svg')}}" alt="lokacija">
                                Jahorina
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section class="villa-termag">
        @php $text =  Helper::text(249) @endphp
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

    
    <section class="wellness-spa konf-sala">
        @php $text =  Helper::text(250) @endphp
        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container-fluid">
            <div class="cardd">
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
