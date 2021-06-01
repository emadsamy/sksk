<!DOCTYPE html>
<html>

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta name="description" content="#" />
  <meta name="_token" content="{{ csrf_token() }}"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Title -->
  <title>Homepage</title>

  <!-- Links -->
  <!-- Project Shortcut Icon -->
  <link rel="shortcut icon" href="{{ url('assets/img/logo.svg') }}" type="image/x-icon" />
  <link rel="icon" href="{{ url('assets/img/logo.svg') }}" type="image/x-icon" />

  <!-- Bootstrap V 4.1.3 -->
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" />
  <!-- FontAwesome 5 -->
  <link rel="stylesheet" href="{{ url('assets/css/fontawesome.css') }}" />
  <!-- Icomoon Library -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!-- Convert Images Svg To Icons -->
  <link rel="stylesheet" href="{{ url('assets/css/icomoon.css') }}" />
  <!-- Main Style -->
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
  <!-- Animate -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  @stack('css')
</head>
<body  id="fullscreenAll">