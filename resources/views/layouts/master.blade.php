<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/modal-video.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/css/navigation.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="icon" type="image/png" href="assets/images/favicon.png">

@livewireStyles
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="loading">
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>
</div>
</div>


<div class="header-area two">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-3 col-lg-3">
<div class="left">
<ul>
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-pinterest-alt'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-youtube'></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-sm-9 col-lg-9">
<div class="right">
<ul>
<li>
<i class='bx bx-mail-send'></i>
<span>Mail Us:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#f79f929b9b98b79d92929bd994989a"><span class="__cf_email__" data-cfemail="96fef3fafaf9d6fcf3f3">[email&#160;protected]</span>l.com</a>
</li>
<li>
<i class='bx bx-phone-call'></i>
<span>Call Now:</span>
<a href="tel:9905324936">990-532-4936</a>
</li>
<li>
<select>
<option>English</option>
<option>Tagalog</option>
<option>Bisaya</option>
</select>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="navbar-area sticky-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="assets/images/logo.png" alt="Logo">
</a>
</div>

@include('layouts.partials.nav-bar')


@yield('content')

@include('layouts.partials.footer')


<div class="go-top">
<i class='bx bxs-up-arrow-alt'></i>
<i class='bx bxs-up-arrow-alt'></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery-modal-video.min.js"></script>

<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>

<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/custom.js"></script>

@livewireScripts
</body>

</html>