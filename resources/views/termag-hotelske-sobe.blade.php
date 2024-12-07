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

    <section class="economic">
    @php $text =  Helper::text(203) @endphp
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="text-center">
                <h4 class="subtitle-smaller">Kreirajte zajedničke uspomene na Jahorini</h4>
                @isset($text->title)
                <h2 class="title">{{$text->title}}</h2>
                @endisset
                
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
            </div>
        </div>
        <div class="container-fluid">
            <div class="economic-slider">
                <img src="{{asset('assets/images/economic-1.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-2.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-3.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-4.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/economic-5.jpg')}}" alt="soba">
            </div>
        </div>
        <div class="container">
        @php $text =  Helper::text(204) @endphp
            <div class="arrow-section">
                <div>
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(205) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(206) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
                @php $text =  Helper::text(207) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
            </div>
        </div>
    </section>
    <section class="economic lux">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(208) @endphp
            <div class="text-center">
                <h4 class="subtitle-smaller">Luksuzni doživljaj u prostranosti</h4>
                @isset($text->title)
                <h2 class="title">{{$text->title}}</h2>
                @endisset
                
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
            </div>
        </div>
        <div class="container-fluid">
            <div class="economic-slider">
                <img src="{{asset('assets/images/lux-1.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-2.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-3.jpg')}}" alt="soba">
                <img src="{{asset('assets/images/lux-1.jpg')}}" alt="soba">
            </div>
        </div>
        <div class="container">
            <div class="arrow-section">
            @php $text =  Helper::text(209) @endphp
                <div>
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(210) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(211) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(212) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
                <div>
            @php $text =  Helper::text(213) @endphp
                    @isset($text->title)
                    <h3>
                        <img
                            src="{{ asset('assets/images/arrow-gold.svg') }}"
                            alt="strelica"
                        />
                        {{$text->title}}
                    </h3>
                    @endisset
                    
                    @isset($text->text)
                    <p class="txt">
                        {!!$text->text!!}
                    </p>
                    @endisset
                </div>
            </div>
        </div>
    </section>
</main>

@endsection