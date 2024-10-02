@extends('system.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('system') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
</ol>
<h1>{{ $title }}</h1>
<hr>

<a href=""><div class="btn btn-danger mb-3">Restart</div></a>
<style>
	.sortable {
		list-style-type: none;
		padding-left: 0;
		text-align: center;
		font-size: 18px;
		font-weight: 700;
	}
	.sortable li {
		margin-bottom: 10px;
		max-width: 600px;
		border: 1px solid #333;
		padding-top: 5px;
		padding-bottom: 5px;
	}
</style>
<div class="row">
    <div class="col-md-12">
    	<ul class="sortable">
@php
$sortarray = array();
@endphp

@foreach ($items as $item)
	@php
	array_push($sortarray, $item->id);
	$naslov = ($item->title!="") ? $item->title : 'Nema naziva';
	@endphp
	<li alt="{{ $item->id }}">{{ $naslov }}</li>
@endforeach
		</ul>
		<form method="post">
			@csrf
			<input type="hidden" name="sortarray" id="sortarray" value="{{ implode("|",$sortarray) }}">
			<button type="submit" class="btn btn-danger mb-3">Sačuvaj</button>
		</form>
    </div>
</div>

@endsection