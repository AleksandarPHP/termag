@extends('layouts.app')
    @section('title', Helper::title(59))
    @section('description', Helper::description(59))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(60) @endphp
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
    <section class="villa-termag">
        @php $text =  Helper::text(61) @endphp
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
        @php $text =  Helper::text(62) @endphp
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
        @php $text =  Helper::text(63) @endphp
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
    <section class="special registration packages  registration-2">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
        <div class="container">
            @php
            $packages = App\Models\Package::where('special_view', 2)->where('is_active', 1)->get();
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
        </div>
        </div>
    </section>
    @include('partials/socials')
</main>

@endsection
