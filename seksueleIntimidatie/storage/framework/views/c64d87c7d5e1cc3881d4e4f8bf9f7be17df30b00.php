<header class="navbar">
  <span class="d-flex align-items-start align-self-start">
    <span class='d-flex flex-column align-items-center'>
      <a href="<?php echo route('home'); ?>" class="navbar-brand m-0">
        <img src="<?php echo asset('images/logo_antwerpen.png'); ?>" alt="Antwerpen"></a>
      </a>
      <?php if(auth()->guard()->check()): ?>
      <ul class="navbar-nav align-self-stretch">
        <li class="nav-item  d-flex justify-content-center bg-red"><a href="<?php echo route('admin.index'); ?>" class='nav-link text-dark'>Admin</a></li>
      </ul>
      <?php endif; ?>
    </span>
    <h1 class='mt-5 ml-4'><?php echo e(env('APP_NAME')); ?></h1>
  </span>
  <?php if(!Request::is('/')): ?>

  <span id="circlenav">

    <?php if(Request::is('wat-is-het')): ?>
    <object data="<?php echo asset('images/WATNAV.svg'); ?>" type="image/svg+xml"></object>
    <?php elseif(Request::is('hoe-reageren*')): ?>
    <object data="<?php echo asset('images/HOENAV.svg'); ?>" type="image/svg+xml"></object>
    <?php elseif(Request::is('waar-kan-je-terecht*')): ?>
    <object data="<?php echo asset('images/WAARNAV.svg'); ?>" type="image/svg+xml"></object>
    <?php elseif(Request::is('*-verhaal')): ?>
    <object data="<?php echo asset('images/HUNNAV.svg'); ?>" type="image/svg+xml"></object>
    <?php endif; ?>
      </span>

  <?php endif; ?>

</header>
