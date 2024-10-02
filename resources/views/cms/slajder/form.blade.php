@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
</ol>
<h1>{{ $title }}</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <form method="post" action="@if(!$editing) {{ url('cms/'.$route) }} @else {{ url('cms/'.$route.'/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->title) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subtitle">Podnaslov</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Podnaslov" value="{{ old('subtitle', $item->subtitle) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="url">Link</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="Link" value="{{ old('url', $item->url) }}" {!! $errors->has('url') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="url_title">Naslov linka</label>
                        <input name="url_title" type="text" class="form-control" id="url_title" placeholder="Naslov linka" value="{{ old('url_title', $item->url_title) }}" {!! $errors->has('url_title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="is_active" value="1" {{ (($errors->any() && old('is_active') || (!$errors->any() && $item->is_active))) ? 'checked' : '' }}> Aktivan?
                        </label>
                    </div>
                </div>                
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Obavezno: 400x500px</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(!is_null($item->image))
                            <a href="{{ url('cms/'.$route.'/'.$item->id.'/removeimage') }}"><span><i class="fa fa-close"></i></span></a>
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
</script>    
@endsection