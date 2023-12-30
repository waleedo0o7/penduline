<!doctype html>

<html dir="<?php if (isset($_GET['dir']))   echo $_GET['dir']; ?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <!-- <link rel="stylesheet" href="assets/css/swiper.min.css" /> -->
  <link rel="stylesheet" href="other/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" />
  <link rel="stylesheet" href="other/icomoon-dist.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

  <?php
  if (isset($_GET['dir']))
    echo '<link rel="stylesheet" href="assets/css/style-rtl.min.css" />';
  else {
    echo '<link rel="stylesheet" href="assets/css/style-ltr.min.css" />';
  }
  ?>

  <link href="other/css/jquery-ui.css" rel="stylesheet">

  <!-- Fancybox -->
  <link href="other/css/jquery.fancybox.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PENDULINE - Home</title>
</head>

<body>

  <?php include 'layout-top-nav.php'; ?>