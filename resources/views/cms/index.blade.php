@extends('cms.layout.container')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('cms') }}">POČETNA</a>
        </li>
        <li class="breadcrumb-item active">Kontrolna tabla</li>
    </ol>
    <h1>Kontrolna tabla</h1>
    <hr>
    <!-- Icon Cards-->
    <div class="row cards">
        
        @php
        $url = 'cms';
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
          array('cms/users', 'Korisnici', 'users'),
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