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
      <li @if(request()->is('cms/menu'))class="active"@endif>
        <a href="{{ url('cms/menu') }}"><i class="fas fa-bars"></i>Meni</a>
      </li>
      <li @if(request()->is('cms/pages'))class="active"@endif>
        <a href="{{ url('cms/pages') }}"><i class="fas fa-camera-retro"></i>Galerija</a>
      </li>
      <li @if(request()->is('cms/pages'))class="active"@endif>
        <a href="{{ url('cms/pages') }}"><i class="fas fa-envelope"></i>Inbox</a>
      </li>
      <li @if(request()->is('cms/pages'))class="active"@endif>
        <a href="{{ url('cms/pages') }}"><i class="fas fa-th-list"></i>Paketi</a>
      </li>
      <li @if(request()->is('cms/settings/1/edit'))class="active"@endif>
        <a href="{{ url('cms/settings/1/edit') }}"><i class="fas fa-cog"></i>Podesavaja</a>
      </li>
    </ul>
  </nav>
</aside>