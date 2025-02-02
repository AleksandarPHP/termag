@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Masaze</li>
</ol>
<h1>Masaze</h1>
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
        <form method="post" action="@if(!$editing) {{ url('cms/massage') }} @else {{ url('cms/massage/'.$item->id) }} @endif" enctype="multipart/form-data">
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
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="category">Kategorija</label>
                        <select name="category" class="form-control" id="category" {!! $errors->has('category') ? 'style="border-color:red;"' : '' !!}>
                            <option>Izaberi</option>
                            <option value="1" @selected(old('category', $item->category) == 1)>Masaze</option>
                            <option value="2" @selected(old('category', $item->category) == 2 )>Posebni tretmani</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('text') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="text">Tekst</label>
                        <textarea name="text" id="text" class="form-control">{{ old('text', $item->getTranslation('text', $lang, false)) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
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
                <div class="col-md-12"><hr></div>
                @if($lang=='sr')
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="price">Cijena</label>
                        <input name="price" type="number" min="0" step="0.01" class="form-control" id="price" placeholder="Cijena" value="{{ old('price', $item->price) }}" {!! $errors->has('price') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @else
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="priceEur">Cijena</label>
                        <input name="priceEur" type="number" class="form-control" id="priceEur" placeholder="Cijena" value="{{ old('priceEur', $item->priceEur) }}" {!! $errors->has('priceEur') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if($lang=='sr')
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="time">Vrieme trajanja </label>
                        <input name="time" type="number" class="form-control" id="time" placeholder="Vrieme trajanja" value="{{ old('time', $item->time) }}" {!! $errors->has('time') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image))
                            <a href="{{ url('cms/massage/imagedelete/'.$item->id.'?image=image') }}"><span><i class="fa fa-close"></i></span></a>
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
                <div class="col-md-12">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Aktivan?</label>
                    <div class="form-check form-switch">
                        <input name="is_active" value="1" class="form-check-input" style="padding-left: 35px; padding-top:20px;" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked(old('is_active', $item->is_active))>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
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
</script>
@endsection