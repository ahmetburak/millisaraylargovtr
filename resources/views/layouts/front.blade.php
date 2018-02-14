<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:18
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milli Saraylar</title>
    <link rel="icon"
          type="image/png"
          href="front/images/favicon.png">
    <!-- Styles-->
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/scripts/animate.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/scripts/aos.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/saraylar.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/swipebox.min.css">
    <link rel="stylesheet" href="{{ config("parameters.saray_url") }}front/css/justifiedGallery.min.css">




</head>
<body>



@include("layouts.front.sticky-nav")
@include("layouts.front.big-menu")
@yield("slider")
@include("layouts.front.toggle-menu")
@yield("content")
@include("layouts.front.footer")


<!-- Scripts -->
<script src="{{ config("parameters.saray_url") }}front/js/jquery.min.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/bootstrap.min.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/owl.carousel.min.js"></script>
<script src="{{ config("parameters.saray_url") }}front/scripts/wow.min.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/easing.js"></script>
<script src="{{ config("parameters.saray_url") }}front/scripts/aos.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/jquery.justifiedGallery.min.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/script.js"></script>
<script src="{{ config("parameters.saray_url") }}front/js/jquery.swipebox.min.js"></script>




</body>
</html>
