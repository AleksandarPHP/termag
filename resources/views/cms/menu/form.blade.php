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
                        <label for="parent_id">parent_id</label>
                        <select name="parent_id" class="form-control" id="parent_id" {!! $errors->has('parent_id') ? 'style="border-color:red;"' : '' !!}>
                        @foreach ($item as $i)
                          {{-- <option value="{{ $i->id }}" @if(($errors->any() && in_array($i->id, old('products', []))) || (!$errors->any() && $item->products->contains($i->id))) selected @endif>{{ $i->title.' (ID: '.$i->id.')' }}</option> --}}
                        @endforeach
                        </select>
                    </div>
                </div>
                @if($item->id!=3)
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                
                <div class="col-md-12"><hr></div>
                @if($lang=='sr')
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="URL" value="{{ old('url', $item->link) }}" {!! $errors->has('url') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
                @endif
                @if($lang=='sr')
                <div class="col-md-12"><hr></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url2">URL 2</label>
                        <input name="url2" type="text" class="form-control" id="url2" placeholder="URL 2" value="{{ old('url2', $item->url2) }}" {!! $errors->has('url2') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
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