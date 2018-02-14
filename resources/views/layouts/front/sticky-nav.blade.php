<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:25
 */
?>


<!--start header-->
<div class="ccsticky-nav1">

    <div class="ccsticky-nav1 a1"></div>
    <div class="ccsticky-nav1 a2">

        <div class="header ">

            <div class="main-logo">
                <a href="{{ route('index') }}" class="main-logo-link">
                    <img src="{{ config("parameters.saray_url") }}front/images/logoTBMMMS2.png" class="main-logo-img" alt=""></a>
            </div>

            <div class="main-right">
                <div class="social-media">
                    <ul class="social-media-list">
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-facebook-official"></i></a></li>
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-snapchat"></i></a></li>
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-pinterest-p"></i></a></li>
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li class="social-media-list-li"><a href="#" class="social-media-list-link"><i
                                        class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!-- #end social-media -->





                <div class="right-div">




  
                    <div class="languages">
                        <ul class="languages-list">
                            <li class="languages-list-li"><a href="{{ config("parameters.saray_url") }}lang/tr" class="languages-list-link" id="tr">TR</a></li>
                            <li class="languages-list-li"><a href="{{ config("parameters.saray_url") }}lang/en" class="languages-list-link ">EN</a></li>
                            <li class="languages-list-li"><a href="{{ config("parameters.saray_url") }}lang/arb" class="languages-list-link ">ARB</a></li>
                            <li class="languages-list-li"><a href="{{ config("parameters.saray_url") }}lang/es" class="languages-list-link ">ESP</a></li>
                            <li class="languages-list-li"><a href="{{ config("parameters.saray_url") }}lang/fr" class="languages-list-link ">FRA</a></li>
                        </ul>
                    </div><!-- end #languages -->

                    <div class="sign">
                        <ul class="sign-list">


                            <?if (App::getLocale() == 'tr'){?>
                                <li class="sign-list-li"><a href="#" class="sign-list-link">@lang('sozluk.uyeol')</a></li>
                                <li class="sign-list-li"><a href="#" class="sign-list-link">@lang('sozluk.giris')</a></li>
                            <?}?>



                        </ul>
                    </div>

                </div>


                <div class="menu-button">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                </div>


            </div><!-- end #main-menu -->


        </div>


    </div>


    <div class="ccsticky-nav1 a3"></div>


</div>
<!--end header-->
