
<?php $a=0; ?>
@foreach ($post_magazalar as $post)
    <?php $a++;?>
@endforeach


<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<style>
    .img-responsive2 {
        width: 350px;
        height: 250px;
    }

    section#announcement {

        margin-top: -10px !important;
    }

    section#announcement .announcement-item-content {
        height: 50px !important;
    }

    section#announcement .announcement-item-content .announcement-item-content-text {
        padding: 13px 5px;
    }

    .announcement-item-content {
        opacity: .8;
        bottom: 30px;

        max-width: unset !important;
        width: 100% !important;


        left: 0px !important;
    }

    section#announcement {

        margin-top: -10px !important;
    }
    .brosurler img{
        height: 550px;
        width: 50px;

    }

    .dergiler img{
        height: 400px;
        width: 50px;

    }



    .bultenler img{
        height: 400px;
        width: 50px;

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
        background-color: whitesmoke;
    }



</style>



@if( !empty($a))




<!-- start section#activities -->
<section class="activities" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">







            <h3> {{$post_contentpages->title_tr}}</h3>
            {!! $post_contentpages->content_tr !!}<br><br>

            <div class="container">
                <a href="<?PHP echo $path; ?>magaza/hediyelik-urunler" id="hakkimizdamenu"> <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;
                    Hediyelik Ürünler
                </a>
                <div class="overlay1">

                </div>
            </div>
            <div class="container">
                <a href="<?PHP echo $path; ?>magaza/yildiz-porselen-urunleri" id="hakkimizdamenu"> <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;
                    Yıldız Porselen Ürünleri
                </a>
                <div class="overlay1">

                </div>
            </div>
            <br>
        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_magazalar as $post)
                    <?php $i++; ?>

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber<?php echo $i; ?>" >
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">

                                <img src="<?PHP echo $path;?>/front/images/magazalar/{{ $post->imageurl }}" class="img-responsive2" alt="">




                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">
                                {{ $post->title }}


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


        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->
@endif