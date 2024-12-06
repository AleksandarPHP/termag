@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Menu</li>
</ol>
<h1>Menu</h1>
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
        <form method="post" action="@if(!$editing) {{ url('cms/menu') }} @else {{ url('cms/menu/'.$item->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <input type="hidden" value="{{ $lang }}" name="language">
            <div class="row">
                @if($lang=='sr')

                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="parent_id">Meni </label>
                        <select name="parent_id" class="form-control" id="parent_id" {!! $errors->has('parent_id') ? 'style="border-color:red;"' : '' !!}>
                            <option value="">Izaberi</option>
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}" @selected(old('parent_id', $menu->id) == $item->parent_id )>{{$menu->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="order">Prioritet</label>
                        <input name="order" type="number" class="form-control" id="order" placeholder="Prioritet" value="{{ old('order', $item->order) }}" {!! $errors->has('order') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                @endif
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="title">Naziv</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naziv" value="{{ old('title', $item->getTranslation('title', $lang, false)) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="link">URL</label>
                        <input name="link" type="text" class="form-control" id="link" placeholder="link" value="{{ old('link', $item->getTranslation('link', $lang, false)) }}" {!! $errors->has('link') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div> 
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

    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table paste "],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    });


    

    $('#parent_id').select2();
</script>
@endsection