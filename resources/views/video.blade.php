@extends('layouts.app')
    @section('title', Helper::title(260))
    @section('description', Helper::description(260))
@section('content')
@php
    $videos = App\Models\Video::where('is_active', 1)->get();
@endphp
<main>
    <section class="weather gallery-intro">
        <div class="bg center" style="background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <div class="wrapper">
                @php $text =  Helper::text(261) @endphp
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
                @foreach ($videos as $video)
                    <div class="col-lg-4 mt-4">
                        <div class="card" >
                        <div class="npk-slider-1"> 
                            @if ($video->image)
                                <img src="{{Helper::image($video->image, 425,230, false)}}" class="card-img-top" alt="{{$video->title}}">
                            @else
                                <img src="{{asset('assets/images/main-bg.webp')}}" class="card-img-top" alt="{{$video->title}}">
                            @endif
                            </div>
                            <div class="card-video">
                            <div class="">
                                <button class="btnn btn_gold" data-bs-toggle="modal" data-bs-target="#modal-{{$video->id}}">Play </button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-{{$video->id}}" tabindex="-1" aria-labelledby="modal-{{$video->id}}-Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="title-modal" id="modal-{{$video->id}}-Label">{{$video->title}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @php
                                    $video = str_replace('width="560"', 'width="100%"', $video->embed);
                                @endphp
                                {!!$video!!}
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
