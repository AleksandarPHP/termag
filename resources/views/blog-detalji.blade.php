@extends('layouts.app')
    @section('title', $blog->title)
    @section('content')
<main>
    <section class="career apartmants">
        <div class="bg center" style="background-image: url('{{asset("storage/".$blog->image)}}');"></div>
        <div class="container">
            <div class="content-wrapper">
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">{{$blog->title}}</h1>
            </div>
        </div>
    </section>
    <section class="special" style="padding:0 0 5rem 0;">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.webp")}}');"></div>
        <div class="container">
            <h2 class="massage-smaller">{{$blog->title}}</h2>
            <h4 class="subtitle">{{$blog->subtitle}}</h4>
            @isset($blog->text)
            <p class="txt">
                {!!$blog->text!!}
            </p>
            @endisset
        </div>
    </section>

</main>

@endsection
