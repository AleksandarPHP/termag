@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Stranice</li>
</ol>
<h1>Stranice</h1>
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
        <form method="post" action="@if(!$editing) {{ url('cms/pages') }} @else {{ url('cms/pages/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <input type="hidden" value="{{ $lang }}" name="language">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @if ($item->id==4 || $item->id==5 || $item->id==8 || $item->id==9 || $item->id==10 || $item->id==11 || $item->id==12 || $item->id==13 || $item->id==15 || $item->id==17 || $item->id==18 || $item->id==19 || $item->id==22 || $item->id==28 || $item->id==35 || $item->id==40 || $item->id==45 || $item->id==112 || $item->id==130 || $item->id==145 || $item->id==160 || $item->id==162 || $item->id==176 || $item->id==182 || $item->id==183 || $item->id==184 || $item->id==185 || $item->id==187)
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subtitle">Podnaslov</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Podnaslov" value="{{ old('subtitle', $item->getTranslation('subtitle', $lang, false)) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>   
                @endif
                @if ($item->id!=1 && $item->id!=14 && $item->id!=21 && $item->id!=22 && $item->id!=27 && $item->id!=28 && $item->id!=34 && $item->id!=35 && $item->id!=39 && $item->id!=44 && $item->id!=48 && $item->id!=49 && $item->id!=50 && $item->id!=51 && $item->id!=52 && $item->id!=53 && $item->id!=54 && $item->id!=55 && $item->id!=56 && $item->id!=59 && $item->id!=64 && $item->id!=69 && $item->id!=72 && $item->id!=75 && $item->id!=76 && $item->id!=80 && $item->id!=81 && $item->id!=84 && $item->id!=85 && $item->id!=89 && $item->id!=90 && $item->id!=92 && $item->id!=93 && $item->id!=98 && $item->id!=99 && $item->id!=103 && $item->id!=106 && $item->id!=107 && $item->id!=112 && $item->id!=113 && $item->id!=114 && $item->id!=120 && $item->id!=124 && $item->id!=125 && $item->id!=127 && $item->id!=128 && $item->id!=129 && $item->id!=130 && $item->id!=134 && $item->id!=140 && $item->id!=144 && $item->id!=145 && $item->id!=148 && $item->id!=151 && $item->id!=152 && $item->id!=162 && $item->id!=168 && $item->id!=175 && $item->id!=176 && $item->id!=179 && $item->id!=182 && $item->id!=183 && $item->id!=184 && $item->id!=185 && $item->id!=187 && $item->id!=189 && $item->id!=193 && $item->id!=197)
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('text') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="text">Tekst</label>
                        <textarea name="text" id="text" class="form-control">{{ old('text', $item->getTranslation('text', $lang, false)) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>  
                @endif
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
                @if ($item->id==2 || $item->id==3)
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
                @endif
                <div class="col-md-12"><hr></div>
                @if($lang=='sr')
                @if($item->id!=1 && $item->id!=4 && $item->id!=5 && $item->id!=8 && $item->id!=11 && $item->id!=12 && $item->id!=14 && $item->id!=15 && $item->id!=16 && $item->id!=21 && $item->id!=22 && $item->id!=23 && $item->id!=27 && $item->id!=33 && $item->id!=34 && $item->id!=39 && $item->id!=44 && $item->id!=48 && $item->id!=49 && $item->id!=50 && $item->id!=51 && $item->id!=52 && $item->id!=53 && $item->id!=54 && $item->id!=56 && $item->id!=59 && $item->id!=64 && $item->id!=68 && $item->id!=69 && $item->id!=72 && $item->id!=75 && $item->id!=79 && $item->id!=80 && $item->id!=84 && $item->id!=85 && $item->id!=86 && $item->id!=87 && $item->id!=88 && $item->id!=89 && $item->id!=91 && $item->id!=92 && $item->id!=95 && $item->id!=98 && $item->id!=103 && $item->id!=106 && $item->id!=112 && $item->id!=113 && $item->id!=114 && $item->id!=120 && $item->id!=121 && $item->id!=124 && $item->id!=125 && $item->id!=127 && $item->id!=129 && $item->id!=130 && $item->id!=131 && $item->id!=132 && $item->id!=133 && $item->id!=134 && $item->id!=140 && $item->id!=141 && $item->id!=144 && $item->id!=148 && $item->id!=151 && $item->id!=152 && $item->id!=153 && $item->id!=154 && $item->id!=155 && $item->id!=156 && $item->id!=157 && $item->id!=158 && $item->id!=159 && $item->id!=160 && $item->id!=161 && $item->id!=162 && $item->id!=168 && $item->id!=175 && $item->id!=179 && $item->id!=180 && $item->id!=182 && $item->id!=189 && $item->id!=193 && $item->id!=194 && $item->id!=196 && $item->id!=197 && $item->id!=198)
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image))
                            <a href="{{ url('cms/pages/imagedelete/'.$item->id.'?image=image') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(is_null($item->image))
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
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
                @if ($item->id==17 || $item->id==18 || $item->id==19 || $item->id==20 || $item->id==204 || $item->id==205 || $item->id==206 || $item->id==207  || $item->id==209 || $item->id==210 || $item->id==211 || $item->id==212 || $item->id==213)
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image2') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image2))
                            <a href="{{ url('cms/pages/imagedelete/'.$item->id.'?image2=image2') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(is_null($item->image2))
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$item->image2) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item->image2) }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="image2" class="input-file input-file2" id="my-file2" type="file">
                    <label tabindex="0" for="my-file2" class="input-file-trigger input-file-trigger2">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file2"),
                            button = document.querySelector(".input-file-trigger2");

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
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image3') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image3))
                            <a href="{{ url('cms/pages/imagedelete/'.$item->id.'?image3=image3') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(is_null($item->image3))
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$item->image3) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item->image3) }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="image3" class="input-file input-file3" id="my-file3" type="file">
                    <label tabindex="0" for="my-file3" class="input-file-trigger input-file-trigger3">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file3"),
                            button = document.querySelector(".input-file-trigger3");

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
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image4') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image4))
                            <a href="{{ url('cms/pages/imagedelete/'.$item->id.'?image4=image4') }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(is_null($item->image4))
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$item->image4) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$item->image4) }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="image4" class="input-file input-file4" id="my-file4" type="file">
                    <label tabindex="0" for="my-file4" class="input-file-trigger input-file-trigger4">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file4"),
                            button = document.querySelector(".input-file-trigger4");

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
            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3 ml-auto" style="margin-left: 10px">Odustani</a>
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