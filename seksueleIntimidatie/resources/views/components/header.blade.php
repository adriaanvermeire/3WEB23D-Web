<header class="navbar">
  <span class="d-flex align-items-start align-self-start">
    <span class='d-flex flex-column align-items-center'>
      <a href="{!! route('home') !!}" class="navbar-brand m-0">
        <img src="{!! asset('images/logo_antwerpen.png') !!}" alt="Antwerpen"></a>
      </a>
      @auth
      <ul class="navbar-nav align-self-stretch">
        <li class="nav-item  d-flex justify-content-center bg-red"><a href="{!! route('admin.index') !!}" class='nav-link text-dark'>Admin</a></li>
      </ul>
      @endauth
    </span>
    <h1 class='mt-5 ml-4'>{{ env('APP_NAME') }}</h1>
  </span>
  @if (!Request::is('/'))

  <span id="circlenav">

    @if(Request::is('wat-is-het'))
    <object data="{!! asset('images/WATNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('hoe-reageren*'))
    <object data="{!! asset('images/HOENAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('waar-kan-je-terecht*'))
    <object data="{!! asset('images/WAARNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('*-verhaal'))
    <object data="{!! asset('images/HUNNAV.svg') !!}" type="image/svg+xml"></object>
    @endif
      </span>

  @endif

</header>
