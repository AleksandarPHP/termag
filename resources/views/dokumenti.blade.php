@extends('layouts.app')
    @section('title', Helper::title(225))
    @section('description', Helper::description(225))
@section('content')
@php
    $documents = App\Models\Documents::all();
@endphp
<main>
    <section class="weather gallery-intro">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
                @php $text =  Helper::text(226) @endphp
                @isset($text->title)
                <h1 class="title-larger">{{$text->title}}</h1>
                @endisset
                @isset($text->text)
                <p class="txt">
                    {!!$text->text!!}
                </p>
                @endisset
            </div>
        </div>
    </section>

    <section class="special" style="padding:0 0 5rem 0;">
        <div class="container">
            <div class="row mb-3 justify-content-center">
                @foreach ($documents as $document)
                    <div class="col-lg-4 mt-4">
                        <div class="card" >
                        <div class="npk-slider-1"> 
                            </div>
                            <div class="card-download-masage">
                            <h5>{{$document->original_name}}</h5>
                            <div class="mt-5">
                                <a href="{{asset('storage/'.$document->file)}}" class="btnn btn_gold" target="_blank">Download   <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <section class="gallery">
        <div class="container-fluid">
            <div class="gallery-wrapper">
                {{-- @foreach ($gallerise as $gallery)
                    <a href="{{ asset('storage/' . $gallery->image) }}" data-fancybox="gallery">
                        <img class="img-thumbnail" src="{{ asset('storage/' . $gallery->image) }}" />
                    </a>
                @endforeach --}
            </div>
        </div>
    </section> --}}
</main>

@endsection     
