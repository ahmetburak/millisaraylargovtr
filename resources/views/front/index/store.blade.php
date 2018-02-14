<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:35
 */
?>




<style>
    .store-item-img img {

    min-height: 100px;
    height: 200px;
        width: 100%;
    }
    .store-item-img {

        height: 200px;
        background-color: white;
    }

    .store-items .store-item-content .store-item-link {
        bottom: 20px;

    }

</style>

<!-- start section#store -->
<section id="store">
    <div class="store-top">

    </div><!-- end store-top -->
    <div class="container-fluid store-content">
        <div class="row">




            <div class="col-md-12">
                <div class="store-title-top">
                    <div class="store-title">
                        @lang('sozluk.hediyeliktitle')
                    </div><!-- end .store-title -->

                    <div class="store-title-links">
                        <ul class="store-title-links-list">
                            <li class="store-title-links-list-li">
                                <a href="{{ config("parameters.saray_url") }}magaza/hediyelik-urunler" class="store-title-links-list-link">@lang('sozluk.menu.hediyelik')</a></li>
                            <li class="store-title-links-list-li">
                                <a href="{{ config("parameters.saray_url") }}magaza/yildiz-porselen-urunleri" class="store-title-links-list-link">@lang('sozluk.menu.yildizurunler')</a></li>
                            <li class="store-title-links-list-li">
                                <a href="{{ config("parameters.saray_url") }}magazalarimiz/" class="store-title-links-list-link">@lang('sozluk.menu.magaza')</a></li>
                        </ul>
                    </div><!-- end .store-title-links -->
                </div><!-- end .store-title-top -->
                <div class="owl-carousel store-items">






                @foreach ($post_shop as $post)
                    <!--Start Ürün1---->
                    <div class="store-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="store-item-title">

                            <a href="#" class="store-item-title-link">


                                {{ str_limit($post->title_tr, $limit = 40, $end = '...') }}
                            </a>

                        </div><!-- end .store-item-title -->

                        <div class="store-item-title-alt">

                        </div>
                        <div class="store-item-img">

                            @if ($post->slug==="hediyelik-urunler")

                            <img src="{{ config("parameters.saray_url") }}front/images/magazalar/urunler/{{$post->url}}" alt="">

                            @elseif ($post->slug==="yildiz-porselen-urunleri")

                            <img src="{{ config("parameters.saray_url") }}front/images/magazalar/urunler/yildizporselen/{{$post->url}}" alt="">

                            @endif


                        </div><!-- end .store-item-img -->
                        <div class="store-item-content">
                            <div class="store-item-content-text">
                                <div class="store-item-text">Satış Fiyatı / <span> {!! $post->fiyat_b !!}</span></div>

                            </div>



                            @if ($post->slug==="hediyelik-urunler")

                                <a href="{{ config("parameters.saray_url") }}magaza/hediyelik-urunler" class="store-item-link">Mağazaya Git</a>

                            @elseif ($post->slug==="yildiz-porselen-urunleri")

                                <a href="{{ config("parameters.saray_url") }}magaza/yildiz-porselen-urunleri" class="store-item-link">Mağazaya Git</a>

                            @endif






                        </div><!-- end store-item-content -->
                    </div><!-- end .store-item -->
                    <!--End Ürün1---->
                @endforeach











                </div><!-- end .owl-carousel -->
                <div class="customNavigation">
                    <a class="store-item-prev"></a>
                    <a class="store-item-next"></a>
                </div>
            </div><!-- end .col-md-12 -->



        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
<!-- end section#store -->
