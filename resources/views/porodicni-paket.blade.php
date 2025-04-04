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
    <section class="testimonials">
        <div class="bg center" style="background-image: url('{{asset("assets/images/testimonials-bg.jpg")}}');"></div>
        <div class="container">
            <div class="testimonials-slider">
                @php
                    $testimonials = App\Models\Testimonial::where('is_active', 1)->get();
                @endphp
                @if ($testimonials)
                @foreach ($testimonials as $testimonial)
                    <div class="testimonials-wrapper">
                        <div class="testimonials-top">
                            <p>
                                {{$testimonial->description}}
                            </p>
                            @if ($testimonial->image)
                                <img src="{{asset('storage/'.$testimonial->image)}}" alt="{{$testimonial->name}}" class="img-fluid">
                            @else
                                <img src="{{asset('assets/images/test-1.png')}}" alt="testimonial" class="img-fluid">
                            @endif
                        </div>
                        <div class="testimonials-bottom">
                            <div class="rating">
                                @for ($i = 1; $i <= $testimonial->stars; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            </div>
                            <h4>{{$testimonial->name}}</h4>
                            <h5>{{$testimonial->short_description}}</h5>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="special registration packages packages-2">
        <div class="bg center" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <img src="{{asset('assets/images/castle.png')}}" alt="zamak termag">
            <div class="container">
                <div class="porodicni-paket text-center">
                    @php
                        $package = App\Models\Package::findOrFail(3);
                    @endphp
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
                            <a href="#" class="btnn btn_primary mt-4">Book now</a>
                        </div>
                    </div>  
                    @endforeach
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

    <section class="experience">
        @php $text =  Helper::text(112) @endphp
        <div class="bg center" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
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
                            <figcaption>{{__('Bowling alley')}}</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-2.jpg')}}" alt="kuglana">
                            <figcaption>{{__('Playroom for children')}}</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
                        <figure>
                            <img class="img-fluid" src="{{asset('assets/images/exp-3.jpg')}}" alt="kuglana">
                            <figcaption>{{__('Foyer')}}</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection