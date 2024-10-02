<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Administration">
  <meta name="author" content="soft4tech.com">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>CMS</title>
  <!-- Bootstrap core CSS-->
  <link rel="shortcut icon" href="{{ asset('systemfiles/images/favicon.png') }}" type="image/x-icon" />
  <link href="{{ asset('systemfiles/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('systemfiles/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
  <link href="{{ asset('systemfiles/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('systemfiles/css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('systemfiles/css/multi-select.css') }}" rel="stylesheet">
  <link href="{{ asset('systemfiles/vendor/select2-4.0.13/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('systemfiles/vendor/tagEditor/jquery.tag-editor.css') }}" rel="stylesheet">
  <link href="{{ asset('systemfiles/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark @if(($_COOKIE['sidenavToggler'] ?? null) == "false") sidenav-toggled @endif" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('system') }}">Soft<span>4</span>Tech<span> CMS</span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        @php
        $url = 'system';
        $title = 'Kontrolna tabla';
        $icon = 'dashboard';
        $active = request()->is($url) ? 'active' : '';
        @endphp
        <li class="nav-item {{ $active }}" data-toggle="tooltip" data-placement="right" title="{{ $title }}">
          <a class="nav-link" href="{{ url($url) }}">
            <i class="fa fa-fw fa-{{ $icon }}"></i>
            <span class="nav-link-text">{{ $title }}</span>
          </a>
        </li>

        @php
        $moduli = array(
            array('m1', 'system/users', 'Korisnici', 'users', ['Lista' => '/', 'Dodaj' => '/create']),
        );
        @endphp
        
        @foreach ($moduli as $modul)
        @php
        $id = $modul[0];
        $url = $modul[1];
        $title = $modul[2];
        $icon = $modul[3];
        $active = request()->is($url.'*') ? 'active' : '';
        $collapsed = request()->is($url.'*') ? 'collapsed' : '';
        $show = request()->is($url.'*') ? 'show' : '';
        $submenu = $modul[4];
        @endphp
        @if(count($submenu))
        <li class="nav-item {{ $active }}" data-toggle="tooltip" data-placement="right" title="{{ $title }}">
          <a class="nav-link nav-link-collapse {{ ($_COOKIE['sidenavToggler'] ?? null) == "false" ? 'collapsed' : $collapsed }}" data-toggle="collapse" href="#{{ $id }}">
            <i class="fa fa-fw fa-{{ $icon }}"></i>
            <span class="nav-link-text">{{ $title }}</span>
          </a>
          <ul class="sidenav-second-level collapse {{ ($_COOKIE['sidenavToggler'] ?? null) == "false" ? '' : $show }}" id="{{ $id }}">
            @foreach ($submenu as $key => $value)
            <li>
              <a href="{{ url($url.$value) }}">{{ $key }}</a>
            </li> 
            @endforeach
          </ul>
        </li>
        @else
        <li class="nav-item {{ $active }}" data-toggle="tooltip" data-placement="right" title="{{ $title }}">
          <a class="nav-link" href="{{ url($url) }}">
            <i class="fa fa-fw fa-{{ $icon }}"></i>
            <span class="nav-link-text">{{ $title }}</span>
          </a>
        </li>
        @endif
        @endforeach

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" >
            <i class="fa fa-fw fa-user"></i> Dobro došli {{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/') }}" class="nav-link" target="_blank">
            <i class="fa fa-fw fa-desktop"></i> Otvorite sajt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-sign-out"></i>Odjava</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
    @include('system.partials.messages')