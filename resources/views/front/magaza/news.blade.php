
<?php $a=0; ?>
@foreach ($post_shop as $post)
    <?php $a++;?>
@endforeach


<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<style>





    section#announcement .announcement-item-content {
        height: 100px !important;
        text-align: center;
    }

    section#announcement .announcement-item-content .announcement-item-content-text {

    }

    section.activities {

        margin-top: -10px !important;
    }

    @media only screen and (max-width: 992px) {
        section.activities {

            margin-top: -1px !important;
        }
    }

    .announcement-item-content {
        opacity: 1 !important;
        bottom: 30px;

        max-width: unset !important;
        width: 100% !important;


        left: 0px !important;
    }



    .announcement-item-content {
        height: 30px !important;
    }

    .announcement-item-content .announcement-item-more {

        bottom: 5px !important;
    }

    .announcement-item-title-alt {
        margin-top: 10px !important;
    }


    .announcement-item-content {
        opacity: .8;
        bottom: 30px;

        max-width: unset !important;
        width: 100% !important;


        left: 0px !important;
    }



    .announcement-item-content {
        bottom: 0px !important;
    }

    .announcement-item-content {
        height: 70px !important;

    }

    .announcement-item-content .announcement-item-more {
        right: 10px !important;
    }

    .announcement-item {

        padding-bottom: 30px !important;
    }








    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: #241E1E;
        cursor: default;
        background-color: #ecd5af;
        border-color: #ecd5af;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #241E1E;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .pagination {
        /* display: inline-block; */
        /* padding-left: 0; */
        /* margin: 20px 0; */
        /* -webkit-border-radius: 4px; */
        /* border-radius: 4px; */
        position: relative;
        margin: auto;
        width: 100%;
    }
    .paginationcontainer {

        width: 100%;
        position: relative;
        margin: auto;
    }

    /* .brosurler .announcement-item {

        width: 250px !important;
        !* height: 300px; *!
    }*/

    section#announcement .announcement-item-content .announcement-item-more {

        right: 0px !important;
        left: 15px;
    }
    .kitaplarimaj {
        padding-top: -150px !important;
    }
    .indirbtn {
        display: none !important;
    }

    .kitaplartxt {
        display: block !important;
    }

    .brosurler .kitaplartxt {
        display: none !important;
    }

    .dergiler .kitaplartxt {
        display: none !important;
    }

    .bultenler .kitaplartxt {
        display: none !important;
    }


    .announcement-item-content .announcement-item-more {
        padding: 10px !important;
    }

    .announcement-item-content .announcement-item-more {
        position: unset !important;
    }

    .announcement-item-image {
        background-color: white;
        height: 250px !important;
        text-align: center;
        padding-top: 15px;

    }
    .announcement-item-image > img {
        max-width: 280px;
        min-height: 100px;

    }





</style>


@if ($slug_txt==="hediyelik-urunler")
    <style>
        .announcement-item-image {

            height: unset !important;

            padding-top: unset !important;
            width: 200px !important;
        }

        .announcement-item-image > img {
            width: 280px;
            height: 180px;

        }
    </style>
@endif






@if( !empty($a))




<!-- start section#activities -->
<section class="activities" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">



            @if ($slug_txt==="yildiz-porselen-urunleri")
                <h3> Yıldız Porselen Ürünler </h3>
            @elseif ($slug_txt==="hediyelik-urunler")
                <h3> Hediyelik Ürünler </h3>
            @endif








            <br>
        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_shop as $post)
                    <?php $i++; ?>

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber<?php echo $i; ?>" >
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">

                            @if ($slug_txt==="yildiz-porselen-urunleri")
                                <img src="<?PHP echo $path;?>/front/images/magazalar/urunler/yildizporselen/{{ $post->url }}" class="img-responsive2" alt="">
                            @elseif ($slug_txt==="hediyelik-urunler")
                                <img src="<?PHP echo $path;?>/front/images/magazalar/urunler/{{ $post->url }}" class="img-responsive2" alt="">
                            @endif




                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">
                                {{ $post->title_tr }}
                            <br>
                                {!!  $post->fiyat_b  !!}


                            </div>

                        </div>
                    </div>
                </div>
                <!---end Haber--->
                @endforeach




{{--

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12"  data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber2.jpeg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">
                                Dolmabahçe Saray Konferansları'nın bu haftaki konuğu "Fahreddin Paşa ve Sonuna Kadar Savaş: Medine Müdafaası" başlıklı konferansı ile Doç. Dr. Mesut Uyar olacak.
                                4 Ocak Perşembe günü saat 16:00'da...



                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber3" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber3.jpeg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">

                                Dolmabahçe Saray Konferansları'nın konukları "Osmanlı'dan Günümüze Tezhip Sanatı" başlıklı konferansları ile  Nilüfer Kurfeyz ve Selim Sağlam olacak.
                                28 Aralık Perşembe günü saat 16:00'da...

                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber4" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber4.png" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">

                                Dolmabahçe Saray Konferansları'nın bu haftaki konuğu "Rusya'da Devlet ve Saray" başlıklı konferansı ile  Yrd. Doç. Dr. Mustafa Tanrıverdi olacak.
                                21 Aralık Perşembe günü saat 16:00'da...
                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->
--}}










            </div>




        </div><!-- end .row -->

        <div class="paginationcontainer"> {{ $post_shop->links() }}</div>
        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->
@endif