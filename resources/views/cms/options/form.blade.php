@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Opcije u paketima</li>
</ol>
<h1>Opcije u paketima</h1>
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
        <form method="post" action="@if(!$editing) {{ url('cms/options') }} @else {{ url('cms/options/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <input type="hidden" value="{{ $lang }}" name="language">
            <div class="row">
                @if($lang=='sr')
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="package_id">Paket </label>
                        <select name="package_id" class="form-control" id="package_id" {!! $errors->has('package_id') ? 'style="border-color:red;"' : '' !!}>
                            <option value="">Izaberi</option>
                            @foreach ($packages as $package)
                                <option value="{{$package->id}}" @selected(old('package_id', $package->id) == $item->package_id)>
                                    {{$package->title}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nights">Broj nocena</label>
                        <input name="nights" type="number" class="form-control" id="nights" placeholder="Broj nocena" value="{{ old('nights', $item->nights) }}" {!! $errors->has('nights') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                <div class="col-md-12"><hr></div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Naziv" value="{{ old('subtitle', $item->getTranslation('subtitle', $lang, false)) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="price">Cijena</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Cijena" value="{{ old('price', $item->getTranslation('price', $lang, false)) }}" {!! $errors->has('price') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>

                @if($lang=='sr')
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="from_date">Od </label>
                        <input name="from_date" type="date" class="form-control" id="from_date" placeholder="Od" value="{{ old('from_date', $item->from_date) }}" {!! $errors->has('from_date') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="to_date">Do</label>
                        <input name="to_date" type="date" class="form-control" id="to_date" placeholder="Do" value="{{ old('to_date', $item->to_date) }}" {!! $errors->has('to_date') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                <div class="col-md-12"><hr></div>
                @for ($i = 0; $i <= 11; $i++)
                <div class="col-md-3 mb-3">
                    <div class="form-group">
                        <label for="option_key{{$i}}">Opcija {{$i}}</label>
                        <input 
                        name="option_key[]" 
                        type="text" 
                        class="form-control" 
                        id="option_key{{$i}}" 
                        placeholder="Opcija {{$i}}" 
                        value="{{ old('option_key.'.$i, $item->getTranslation('options', $lang, false)[0][$i] ?? '') }}" 
                        {!! $errors->has('option_key.'.$i) ? 'style="border-color:red;"' : '' !!}
                        >
                    </div>
                </div>
                @if($lang=='sr')
                
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label>Min: {{ $width }}x{{ $height }}px</label> --}}
                    </div>
                    <div class="input-file-options" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                        @if(isset($item->options[1][$i]) && !is_null($item->options[1][$i]))
                            <a href="{{ url('cms/options/'.$item->id.'/imagedelete/'.$i) }}"><span><i class="fa fa-close"></i></span></a>
                        @endif
                        <span class="img-placeholder">
                              @if(isset($item->options[1][$i]) && !is_null($item->options[1][$i]))
                              <a href="{{ asset('storage/'.$item->options[1][$i]) }}" data-fancybox="gallery">
                                <img class="file-img-options" src="{{ asset('storage/'.$item->options[1][$i]) }}" alt="img">
                              </a>
                              @else
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img class="file-img-options" src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img">
                              </a>
                              @endif
                      </span>
                    <input name="option_value[]" class="input-file input-file{{ $i }}" id="my-file{{ $i }}" type="file">
                    <label tabindex="0" for="my-file{{ $i }}" class="input-file-trigger input-file-trigger{{ $i }}">Odaberite sliku...</label>
                    </div>
                    <script>
                        var fileInput = document.querySelector(".input-file{{ $i }}"),
                            button = document.querySelector(".input-file-trigger{{ $i }}");

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
                @endfor
                @if($lang=='sr')
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Aktivan?</label>
                    <div class="form-check form-switch">
                        <input name="is_active" value="1" class="form-check-input" style="padding-left: 35px; padding-top:20px;" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked(old('is_active', $item->is_active))>
                    </div>
                </div>
                @endif
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

    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table paste "],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    });
</script>
@endsection