<aside class="app_nav">
  <button class="app_nav_close"><i class="fas fa-times"></i></button>
  @include('cms.partials.logo')
  <nav>
    <ul>
      <li @if(request()->path() === 'cms') class="active" @endif>
        <a href="{{ url('cms') }}"><i class="fas fa-home"></i>Kontrolna tabla</a>
      </li>
      <li @if(request()->is('cms/users'))class="active"@endif>
        <a href="{{ url('cms/users') }}"><i class="fas fa-users"></i>Korisnici</a>
      </li>
      <li @if(request()->is('cms/pages'))class="active"@endif>
        <a href="{{ url('cms/pages') }}"><i class="fas fa-desktop"></i>Stranice</a>
      </li>
    </ul>
  </nav>
</aside>