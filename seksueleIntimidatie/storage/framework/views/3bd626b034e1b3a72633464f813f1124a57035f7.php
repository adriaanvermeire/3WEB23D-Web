<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" >
  <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" type="text/css" >
  <link href="<?php echo e(asset('css/homenav.css')); ?>" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">
  <link rel="icon" href="<?php echo asset('images/logo_antwerpen.png'); ?>">
<script src="<?php echo e(asset('game/TemplateData/UnityProgress.js')); ?>"></script>  
  <script src=" <?php echo e(asset('game/Build/UnityLoader.js')); ?>"></script>
  <!-- <link rel="stylesheet" href=" <?php echo e(asset('game/TemplateData/style.css')); ?> "> -->
  <script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "  <?php echo e(asset('game/Build/Build.json')); ?> ", {onProgress: UnityProgress});
  </script>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<?php
  if(!isset($color)){
    $colors = ['red', 'yellow', 'blue', 'green'];
    $color = $colors[array_rand($colors)];
  }
  $bg = 'background-' . $color;
?>
<body class='<?php echo e($bg); ?>' id='body'>
  <?php echo $__env->make('components.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
  <?php if(!isset($no_footer)): ?>
    <?php echo $__env->make('components.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" charset="utf-8"></script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
