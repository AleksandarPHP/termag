@extends('system.layout.container')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('system') }}">POČETNA</a>
        </li>
        <li class="breadcrumb-item active">Kontrolna tabla</li>
    </ol>
    <h1>Kontrolna tabla</h1>
    <hr>
    <!-- Icon Cards-->
    <div class="row cards">
        
        @php
        $url = 'system';
        $title = 'Kontrolna tabla';
        $icon = 'dashboard';
        @endphp
        <div class="col-xl-2 col-sm-6 mb-4">
            <div class="card o-hidden h-100">
                <a href="{{ url($url) }}">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-{{ $icon }}"></i>
                        </div>
                        <div class="mr-5">{{ $title }}</div>
                    </div>
                </a>
            </div>
        </div>

        @php
        $moduli = array(
          array('system/narudzbe', 'Narudžbe', 'shopping-cart'),  
          array('system/categories', 'Kategorije', 'folder'),
          array('system/brands', 'Brend', 'bandcamp'),
          array('system/proizvodi', 'Proizvodi', 'product-hunt'),
          array('system/varijante', 'Varijante', 'check'),
          array('system/podesavanja/1/edit', 'Podešavanja', 'cogs'),
          array('system/slajder', 'Slajder', 'desktop'),
          array('system/content', 'Sadrzaj', 'file-o'),
          array('system/tekstovi', 'Tekstovi', 'font'),
          array('system/baner', 'Baner', 'window-maximize'),
          array('system/users', 'Korisnici', 'users'),
          array('system/discount/1/edit', 'Popusti', 'dollar'),
          array('system/boja', 'Boje', 'tint'),
        );
        @endphp

        @foreach ($moduli as $modul)
        @php
        $url = $modul[0];
        $title = $modul[1];
        $icon = $modul[2];
        $active = request()->is($url.'*') ? 'active' : '';
        @endphp
        <div class="col-xl-2 col-sm-6 mb-4">
            <div class="card o-hidden h-100">
                <a href="{{ url($url) }}">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-{{ $icon }}"></i>
                        </div>
                        <div class="mr-5">{{ $title }}</div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach

    </div>
@endsection