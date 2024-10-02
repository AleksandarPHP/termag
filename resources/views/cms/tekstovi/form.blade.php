@extends('cms.layout.container')

@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Tekstovi</li>
</ol>
<h1>Tekstovi</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <form method="post" action="@if(!$editing) {{ url('cms/tekstovi') }} @else {{ url('cms/tekstovi/'.$text->id) }} @endif" enctype="multipart/form-data">
            @csrf
            @if($editing) @method('PUT') @endif
            <div class="row">
                @if(!is_null($text->title))
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Naslov</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Naslov" value="{{ old('title', $text->title) }}" {!! $errors->has('title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if(!is_null($text->subtitle))
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subtitle">Podnaslov</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Podnaslov" value="{{ old('subtitle', $text->subtitle) }}" {!! $errors->has('subtitle') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if(!is_null($text->description))
                <div class="col-md-12">
                    <div class="form-group" {!! $errors->has('description') ? 'style="border:1px solid red;"' : '' !!}>
                        <label for="description">Opis</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description', $text->description) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if(!is_null($text->url))
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="url">Link</label>
                        <input name="url" type="text" class="form-control" id="url" placeholder="Link" value="{{ old('url', $text->url) }}" {!! $errors->has('url') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if(!is_null($text->url_title))
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="url_title">Naslov linka</label>
                        <input name="url_title" type="text" class="form-control" id="url_title" placeholder="Naslov linka" value="{{ old('url_title', $text->url_title) }}" {!! $errors->has('url_title') ? 'style="border-color:red;"' : '' !!}>
                    </div>
                </div>
                <div class="col-md-12"><hr></div>
                @endif
                @if(!is_null($text->image))
                @if($width!=0 && $height!=0)
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Dimenzija slike: {{ $width }}x{{ $height }}px</label>
                    </div>
                </div>
                @endif
                <div class="col-md-12">
                    <div class="input-file-container" {!! $errors->has('image') ? 'style="border-color:red;"' : '' !!}>
                      <span class="img-placeholder">
                              @if(is_null($text->image))
                              <a href="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" data-fancybox="gallery">
                                <img src="{{ asset('cmsfiles/images/placeholder-images.jpg') }}" alt="img" id="changeImage">
                              </a>
                              @else
                              <a href="{{ asset('storage/'.$text->image) }}" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$text->image) }}" alt="img" id="changeImage">
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
            </div>
            <button type="submit" class="btn btn-danger mb-3">Sačuvaj</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<div id="tmceGalleryModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pretraga:</h5>
            <input type="text" id="tmceGallerySearchInput">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" id="tmceGalleryContainer"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
        </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#my-file1").change(function() {
        readURL(this, '#changeImage');
    });

    tinymce.init({
        selector : "#description",
        contextmenu : "link image table",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table paste "],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image gallery_button code",
        menu: {
            insert: { title: 'Insert', items: 'image gallery_menu link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
        },
        extended_valid_elements : "script[language|type|href|src]",
        convert_urls: false,
        height : 500,
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{ url('cms/uploadImage') }}');
            var token = '{{ csrf_token() }}';
            xhr.setRequestHeader("X-CSRF-Token", token);
            xhr.setRequestHeader("Accept", "application/json");
            xhr.onload = function() {
                var json;

                if (xhr.status == 422) {
                    failure('HTTP Error: File validation failed.');
                    return;
                }

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        setup: function(editor) {
            editor.ui.registry.addButton('gallery_button', {
                icon: 'gallery',
                onAction: function() {
                    $('#tmceGalleryModal').modal('show');
                    $('#tmceGalleryContainer').html('');
                    $.ajax({
                        url: '{{ url('cms/getImages') }}',
                        type: 'POST',
                        data: {
                            "_token": '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            for(var i = 0; i < response.length; i++) {
                                $('#tmceGalleryContainer').append('\
                                    <div class="col-sm-3">\
                                        <img src="' + response[i].image + '" class="tmceGalleryImage" width="100%" height="100" style="margin: 10px 0; cursor: pointer;">\
                                    </div>\
                                ');
                            }
                        }
                    });
                }
            });
            editor.ui.registry.addMenuItem('gallery_menu', {
                icon: 'gallery',
                text: 'Gallery..',
                onAction: function() {
                    $('#tmceGalleryModal').modal('show');
                    $('#tmceGalleryContainer').html('');
                    $.ajax({
                        url: '{{ url('cms/getImages') }}',
                        type: 'POST',
                        data: {
                            "_token": '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            for(var i = 0; i < response.length; i++) {
                                $('#tmceGalleryContainer').append('\
                                    <div class="col-sm-3">\
                                        <img src="' + response[i].image + '" class="tmceGalleryImage" width="100%" height="100" style="margin: 10px 0; cursor: pointer;">\
                                    </div>\
                                ');
                            }
                        }
                    });
                }
            });
        }
    });

    $('#tmceGallerySearchInput').keypress(function(e) {
        if(e.which == 13) {
            $('#tmceGalleryContainer').html('');
            var searchQuery = $('#tmceGallerySearchInput').val();

            $.ajax({
                url: '{{ url('cms/getImages') }}',
                type: 'POST',
                data: {
                    "searchQuery": searchQuery,
                    "_token": '{{ csrf_token() }}'
                },
                success: function(response) {
                    for(var i = 0; i < response.length; i++) {
                        $('#tmceGalleryContainer').append('\
                            <div class="col-sm-3">\
                                <img src="' + response[i].image + '" class="tmceGalleryImage" width="100%" height="100" style="margin: 10px 0; cursor: pointer;">\
                            </div>\
                        ');
                    }
                }
            });
        }
    });

    $(document).on('click', '.tmceGalleryImage', function() {
        var src = $(this).attr('src');
        
        tinymce.activeEditor.execCommand('mceInsertContent', false, '<img src="'+src+'" />');
        
        $('#tmceGalleryModal').modal('hide');
    });
</script>
@endsection