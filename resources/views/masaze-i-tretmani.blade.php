@extends('layouts.app')
    @section('title', Helper::title(215))
    @section('description', Helper::description(215))
    @section('content')
<main>
    <section class="villa-termag organic-facts">
        @php $text =  Helper::text(216) @endphp
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
        @php $text =  Helper::text(217) @endphp
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
    <section class="villa-termag organic-facts">
        @php $text =  Helper::text(218) @endphp
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
    <section class="special hsnpk">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(225	) @endphp
            @isset($text->title)
            <h3 class="massage-smaller">{{$text->title}}</h3>
            @endisset
            @isset($text->text)
            <p class="txt">
                {!!$text->text!!}
            </p>
            @endisset
            @php
                $massages = App\Models\Masage::where('category', 1)->where('is_active', 1)->get();
            @endphp
            <br>
            <br>
            <div class="row">
                @foreach ($massages as $massage)
                <div class="col-lg-4">
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{asset("storage/".$massage->image)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body">
                          <h5>{{$massage->title}}</h5>
                          <p class="txt">
                            {{$massage->text}}
                          </p>
                          <div>
                            <a href="asdf" class="btnn btn_gold">afdsadsfasddfs</a>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>

            @php $text =  Helper::text(226) @endphp
            @isset($text->title)
            <h2 class="massage-smaller">{{$text->title}}</h2>
            @endisset
            @isset($text->text)
            <p class="txt">
                {!!$text->text!!}
            </p>
            @endisset
            <br>
            <br>
            @php
                $massages = App\Models\Masage::where('category', 2)->where('is_active', 1)->get();
            @endphp
            <div class="row mb-3">
                @foreach ($massages as $massage)
                <div class="col-lg-4">
                    <div class="card" >
                      <div class="npk-slider-1"> 
                        <img src="{{asset("storage/".$massage->image)}}" class="card-img-top" alt="porodicni paket">
                    </div>
                        <div class="card-body">
                          <h5>{{$massage->title}}</h5>
                          <p class="txt">
                            {{$massage->text}}
                          </p>
                          <div>
                            <a href="asdf" class="btnn btn_gold">afdsadsfasddfs</a>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>

@endsection
