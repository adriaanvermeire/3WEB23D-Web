<header class="navbar">
  <span class="d-flex align-items-center align-self-start">
    <a href="{!! route('home') !!}" class="navbar-brand ">
      <img src="{!! asset('images/logo_antwerpen.png') !!}" alt="Antwerpen"></a>
    </a>
    @auth
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a href="{!! route('admin.index') !!}" class='nav-link text-dark'>Admin</a></li>
    </ul>
    @endauth
  </span>
  @if (!Request::is('/'))
  <ul class="navbar-nav">
    @if(Request::is('wat-is-het'))
    <object data="{!! asset('images/WATNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('hoe-reageren*'))
    <object data="{!! asset('images/HOENAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('waar-kan-je-terecht*'))
    <object data="{!! asset('images/WAARNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('*-verhaal'))
    <object data="{!! asset('images/HUNNAV.svg') !!}" type="image/svg+xml"></object>
    @endif
  </ul>
  @endif
</header>
