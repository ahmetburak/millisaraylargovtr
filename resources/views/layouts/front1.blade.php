<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:18
 */
?>

<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>

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
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/scripts/animate.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/scripts/aos.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/saraylar.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/swipebox.min.css">
    <link rel="stylesheet" href="<?PHP echo $path;?>front/css/justifiedGallery.min.css">




</head>
<body>

@include("layouts.front.sticky-nav")
@include("layouts.front.big-menu")
@yield("slider")
@include("layouts.front.toggle-menu")
@yield("content")
@include("layouts.front.footer")


<!-- Scripts -->
<script src="<?PHP echo $path;?>front/js/jquery.min.js"></script>
<script src="<?PHP echo $path;?>front/js/bootstrap.min.js"></script>
<script src="<?PHP echo $path;?>front/js/owl.carousel.min.js"></script>
<script src="<?PHP echo $path;?>front/scripts/wow.min.js"></script>
<script src="<?PHP echo $path;?>front/js/easing.js"></script>
<script src="<?PHP echo $path;?>front/scripts/aos.js"></script>
<script src="<?PHP echo $path;?>front/js/jquery.justifiedGallery.min.js"></script>
<script src="<?PHP echo $path;?>front/js/script2.js"></script>

<script src="<?PHP echo $path;?>front/js/jquery.swipebox.min.js"></script>




</body>
</html>
