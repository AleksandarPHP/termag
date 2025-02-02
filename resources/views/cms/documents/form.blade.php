@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Dokumenti</li>
</ol>
<h1>Dokumenti</h1>
<hr>
<div class="row">
    <div class="col-md-12" id="mainDiv">
        <form method="post" action="{ url('cms/'.$route) }}" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                            <label>Slike koje će biti prikazane na stranici 'Dokumenti'</label>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <link rel="stylesheet" type="text/css" href="{{ asset('cmsfiles/css/dropzone.css') }}" />
                            <script type="text/javascript" src="{{ asset('cmsfiles/js/dropzone.js') }}"></script>
                            <div class="dropzone" id="dropzoneUploader"></div>
                            <script type="text/javascript">
                                Dropzone.options.dropzoneUploader = {
                                paramName: "files",
                                url: '{{ url('cms/documents/upload') }}',
                                maxFilesize: 2,
                                parallelUploads: 1,
                                acceptedFiles: "application/pdf",
                                sending: function (file, xhr, formData) {
                                    formData.append('_token', "{{ csrf_token() }}");
                                },
                                accept: function(file, done) {
                                    done();
                                },
                                      
                                dictDefaultMessage: '<?= preg_replace("/\r?\n/", "\\n", addslashes("Kliknite ovde ili prevucite slike")) ?>',
                                // dictFileTooBig: '<?= preg_replace("/\r?\n/", "\\n", addslashes("Dodavanje slike nije uspelo")) ?>',
                                // dictInvalidFileType: '<?= preg_replace("/\r?\n/", "\\n", addslashes("Dodavanje slike nije uspelo")) ?>',
                                // dictResponseError: '<?= preg_replace("/\r?\n/", "\\n", addslashes("Dodavanje slike nije uspelo")) ?>',
                                // dictMaxFilesExceeded: '<?= preg_replace("/\r?\n/", "\\n", addslashes("Dodavanje slike nije uspelo")) ?>'
                                };
                                </script>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row uploaded-images" id="imagelist">
                            @foreach ($files as $file)
                            <div class="col-xl-2 col-lg-4 col-md-6 uploaded-image">
                                <figure>
                                    <a href="{{ asset('storage/'.$file->file) }}" onclick="event.preventDefault();document.getElementById('delete-image{{ $file->id }}').submit();">
                                        <span><i class="fa fa-close"></i></span>
                                    </a>
                                    <div class="text-center">
                                        <img src="{{ asset('cmsfiles/images/page-file-icon.png') }}" class="img-responsive" width="200px">
                                        <h6 class="mt-3">{{$file->original_name}}</h6>
                                    </div>
                                </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>
    @foreach ($files as $file)
        <form id="delete-image{{ $file->id }}" action="{{ url('cms/documents/'.$file->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
@endsection
