@extends('system.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('system') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Tekstovi</li>
</ol>
<h1>Tekstovi</h1>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Lista</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableSSR" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Naslov</th>
                    <th class="nosort text-center">Akcija</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Naslov</th>
                    <th class="nosort text-center">Akcija</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
$(function() {
   $(document).on('click', '.confirmation', function(e) {
       e.preventDefault();
       if (confirm('Da li ste sigurni da želite da obrišete ovaj zapis?')) $('#delete-form'+$(this).attr('data-id')).submit();
   });
});

$(document).ready(function() {
    $('#dataTableSSR').DataTable({
    'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
    }],
    "oLanguage": {
        "sProcessing":   "Procesiranje u toku...",
        "sLengthMenu":   "Prikaži _MENU_ elemenata",
        "sZeroRecords":  "Nije pronađen nijedan rezultat",
        "sInfo":         "Prikaz _START_ do _END_ od ukupno _TOTAL_ elemenata",
        "sInfoEmpty":    "Prikaz 0 do 0 od ukupno 0 elemenata",
        "sInfoFiltered": "(filtrirano od ukupno _MAX_ elemenata)",
        "sInfoPostFix":  "",
        "sSearch":       "Pretraga:",
        "sUrl":          "",
        "oPaginate": {
            "sFirst":    "Početna",
            "sPrevious": "Prethodna",
            "sNext":     "Sledeća",
            "sLast":     "Poslednja"
        }
    },
    "bProcessing": true,
    "serverSide": true,
    "ajax": {
        url: "{{ url('system/tekstovi/ajax') }}",
        type: "post",
        headers: {
            'X-CSRF-Token': "{{ csrf_token() }}"
        },
        error: function(){
            $("#dataTableSSR_processing").css("display","none");
            alert('Došlo je do greške prilikom učitavanja podataka, molimo pokušajte ponovo učitati stranicu.')
        }
    },
    "createdRow": function (row, data, index) {
        $(row).addClass("text-center");
    },
    "order": [[ 0, "desc"]],
  });
});
</script>

@endsection