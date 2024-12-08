@extends('layouts.app')
    @section('title', Helper::title(54))
    @section('description', Helper::description(54))
    @section('content')
<main>
    <section class="career">
        @php $text =  Helper::text(55) @endphp

        <div class="bg center" style="background-image: url('{{asset("storage/".$text->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                @isset($text->title)
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">{{$text->title}}</h1>
                @endisset
            </div>
        </div>
    </section>

    <section class="special registration packages" style="padding-top: 0">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
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

</main>

@endsection