@extends('cms.layout.container')

@section('content')
      <div class="row">
        <div class="col-12">
          <h1 class="title">Početna</h1>
        </div>
      </div>
      <div class="row">
        @php
        $url = 'cms';
        $title = 'Kontrolna tabla';
        $icon = 'dashboard';
        @endphp
        <div class="col-md-4">
          <a href="{{ url($url) }}" class="link_box">
            <i class="fa-solid fa-{{ $icon }} fa-2xl" style="color: #0b3663;"></i>
            <h2>{{ $title }}</h2>
            <span><i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
        @php
        $moduli = array(
          array('cms/users', 'Korisnici', 'users'),
          array('cms/pages', 'Stranice', 'desktop'),
          array('cms/settings/1/edit', 'Podesavaja', 'cog'),
          array('cms/menu', 'Meni', 'bars'),
          array('cms/packages', 'Paketi', 'th-list'),
          array('cms/gallery', 'Galerija', 'camera-retro'),
          array('cms/messages', 'Inbox', 'envelope'),
        );
        @endphp
        @foreach ($moduli as $modul)
        @php
        $url = $modul[0];
        $title = $modul[1];
        $icon = $modul[2];
        $active = request()->is($url.'*') ? 'active' : '';
        @endphp
        <div class="col-md-4">
          <a href="{{ url($url) }}" class="link_box">
            <i class="fa-solid fa-{{ $icon }} fa-2xl" style="color: #0b3663;"></i>
            <h2>{{ $title }}</h2>
            <span><i class="fas fa-arrow-right"></i></span>
          </a>
        </div>
        @endforeach
    </div>
  </div>
</div>
@endsection
