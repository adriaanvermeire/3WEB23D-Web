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

    {{--
    <object data="{!! asset('images/HOENAV.svg') !!}" type="image/svg+xml"></object>
    <object data="{!! asset('images/WAARNAV.svg') !!}" type="image/svg+xml"></object>
    <object data="{!! asset('images/HUNNAV.svg') !!}" type="image/svg+xml"></object>
    --}}

         
  {{--
    <li class="{{ Request::is('wat-is-het') ? 'nav-item active' : 'nav-item' }}"><a href="{!! route('what.index') !!}" class="nav-link">Wat is het?</a></li>
    <li class="{{ Request::is('hoe-reageren*') ? 'nav-item active' : 'nav-item' }}"><a href="{!! route('reaction.index') !!}" class="nav-link">Hoe reageren?</a></li>
    <li class="{{ Request::is('waar-kan-je-terecht*') ? 'nav-item active' : 'nav-item' }}"><a href="{!! route('contact.index') !!}" class="nav-link">Waar kan je terecht?</a></li>
    <li class="{{ Request::is('*-verhaal') ? 'nav-item active' : 'nav-item' }}"><a href="{!! route('testimonials.index') !!}" class="nav-link">Hun verhalen</a></li>
  --}}

  </span>
</header>
