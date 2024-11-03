@extends('system.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('system') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
</ol>
<h1>{{ $title }}</h1>
<hr>
@if($editing) 
<div class="row change-language">
    <div class="col-md-12">
        <a href="{{ url()->current() }}?lang=sr"><button class="btn btn{{ $lang=='sr' ? '-danger' : '' }} mb-3">SR</button></a>
        <a href="{{ url()->current() }}?lang=en"><button class="btn btn{{ $lang=='en' ? '-danger' : '' }} mb-3">EN</button></a>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <form method="post" action="@if(!$editing) {{ url('system/'.$route) }} @else {{ url('system/'.$route.'/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <input type="hidden" value="{{ $lang }}" name="language">
            <div class="row">
                @if($item->id!=2)
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                @if($item->id!=2&& $item->id!=4 && $item->id!=7 && $item->id!=8 && $item->id!=9 && $item->id!=11 && $item->id!=16)
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subtitle">Podnaslov</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Podnaslov" value="{{ old('subtitle', $item->getTranslation('subtitle', $lang, false)) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                @if($item->id!=3 && $item->id!=4 && $item->id!=5 && $item->id!=17)
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('text') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="text">Tekst</label>
                        <textarea name="text" id="text" class="form-control">{{ old('text', $item->getTranslation('text', $lang, false)) }}</textarea>
                    </div>
                </div>
                @endif
                <div class="col-md-12"><hr></div>
                @if($item->id==1)
                @if($lang=='sr')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="URL" value="{{ old('url', $item->url) }}" {!! $errors->has('url') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
                @endif
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="urlTitle">URL naslov</label>
                        <input name="urlTitle" type="text" class="form-control" id="urlTitle" placeholder="URL naslov" value="{{ old('urlTitle', $item->getTranslation('urlTitle', $lang, false)) }}" {!! $errors->has('urlTitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
                @endif
                @if($item->id==1)
                @if($lang=='sr')
                <div class="col-md-12"><hr></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url2">URL 2</label>
                        <input name="url2" type="text" class="form-control" id="url2" placeholder="URL 2" value="{{ old('url2', $item->url2) }}" {!! $errors->has('url2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
                @endif
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="urlTitle2">URL naslov 2</label>
                        <input name="urlTitle2" type="text" class="form-control" id="urlTitle2" placeholder="URL naslov 2" value="{{ old('urlTitle2', $item->getTranslation('urlTitle2', $lang, false)) }}" {!! $errors->has('urlTitle2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
                <div class="col-md-12"><hr></div>
                @endif
                @if($item->id!=2 && $item->id!=4 && $item->id!=5 && $item->id!=7 && $item->id!=9 && $item->id!=10 && $item->id!=11 && $item->id!=12 && $item->id!=13 && $item->id!=15 && $item->id!=16 && $item->id!=17)
                @if($lang=='sr')
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image))
                            <a href="{{ url('system/'.$route.'/imagedelete/'.$item->id.'?image=image') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(is_null($item->image))
                              <a href="{{ asset('systemfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('systemfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$item->image) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item->image) }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="image" class="input-file input-file1" id="my-file1" type="file">
                    <label tabindex="0" for="my-file1" class="input-file-trigger input-file-trigger1">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file1"),
                            button = document.querySelector(".input-file-trigger1");

                        button.addEventListener("keydown", function (event) {
                            if (event.keyCode == 13 || event.keyCode == 32) {
                                fileInput.focus();
                            }
                        });
                        button.addEventListener("click", function () {
                            fileInput.focus();
                            return false;
                        });
                    </script>
                </div>
                @endif
                @endif
            </div>
            <button type="submit" class="btn btn-danger mb-3">Sačuvaj</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('input[type="file"]').change(function() {        
        readURL(this, $(this).parent().find('img'));
    });

    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table paste "],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    });
</script>
@endsection