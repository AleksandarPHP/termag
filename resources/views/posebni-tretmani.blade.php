@extends('layouts.app')
    @section('title', Helper::title(103))
    @section('description', Helper::description(103))
    @section('content')
<main>
    <section class="villa-termag organic-facts">
        @php $text =  Helper::text(104) @endphp
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
    <section class="special" style="padding:0 0 5rem 0;">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            @php $text =  Helper::text(208) @endphp
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
                          <strong>
                            <p>Cijena: {{$massage->price}} KM</p><br>
                            <p>Trajanje masaže : {{$massage->time}}minuta</p>
                          </strong>
                          <div>
                            @if($massage->urlTitle!='' && $massage->url)<a href="{{Helper::url($massage->url)}}" class="btnn btn_gold">{{$massage->urlTitle}}</a>@endif
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
