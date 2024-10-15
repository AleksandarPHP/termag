<aside class="app_nav">
  <button class="app_nav_close"><i class="fas fa-times"></i></button>
  @include('cms.partials.logo')
  <nav>
    <ul>
      <li class="active"@if(request()->is('/cms'))class="active"@endif>
        <a href="{{ url('/cms') }}"><i class="fas fa-home"></i>Kontrolna tabla</a>
      </li>
      <li @if(request()->is('moj-profil'))class="active"@endif>
        <a href="{{ url('moj-profil') }}"><i class="fas fa-users"></i>Korisnici</a>
      </li>
    </ul>
  </nav>
</aside>