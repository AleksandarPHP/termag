@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Mail</li>
</ol>
<h1>Mail</h1>
<hr>
<div class="row">
    <ul class="list-group">
        <li class="list-group-item">Ime i prezime: <strong>{{$item->name}}</strong></li>
        <li class="list-group-item">Email: <strong>{{$item->email}}</strong></li>
        <li class="list-group-item">Datum rodjenja: <strong>{{$item->date}}</strong></li>
        <li class="list-group-item">Tel: <strong>{{$item->tel}}</strong></li>
        <li class="list-group-item">Kratak opis <br><strong>{{$item->description}}</strong></li>
        <li class="list-group-item">File <br></li>
      </ul>
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