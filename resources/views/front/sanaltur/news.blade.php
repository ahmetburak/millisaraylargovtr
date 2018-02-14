
<?php $a=0; ?>
@foreach ($post_sanaltur as $post)
    <?php $a++;?>
@endforeach





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


    section#announcement .announcement-item {

        height: 150px !important;
    }

    section#announcement .announcement-item-title-alt {
        width: 210px!important;
    }

    #announcement {
        margin-top: -10px;
    }

    section#announcement .announcement-item-image a img {
        display: block;
        max-width: unset !important;
        width: unset !important;
    }


</style>








@if( !empty($a))




<!-- start section#activities -->
<section class="activities1" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">



            @if ($slug_txt==="dolmabahce-sarayi")
                <h3> Dolmabahçe Sarayı Sanal Tur</h3>
            @elseif ($slug_txt==="beylerbeyi-sarayi")
                <h3> Beylerbeyi Sarayı Sanal Tur</h3>
            @elseif ($slug_txt==="ayvalikavak-kasri")
                <h3> Ayvalıkavak Kasrı Sanal Tur</h3>
            @elseif ($slug_txt==="kucuksu-kasri")
                <h3> Küçüksu Kasrı Sanal Tur</h3>
            @elseif ($slug_txt==="ihlamur-kasirlari")
                <h3> Ihlamur Kasırları Sanal Tur</h3>
            @elseif ($slug_txt==="yildiz-sarayi-sale")
                <h3> Yıldız Sarayı Sanal Tur</h3>
            @endif






            <br>
        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_sanaltur as $post)
                    <?php $i++; ?>

                <!---start Haber--->
                <div class="col-md-3 col-sm-4 col-xs-12" id="haber<?php echo $i; ?>" >
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">


                         <a href="{{ config("parameters.saray_url") }}/front/images/SanalTur/exes/{{ $post->url }}" target="_blank">
                            <img src="{{ config("parameters.saray_url") }}/front/images/SanalTur/images/{{ $post->imageurl }}" class="img-responsive2" alt="">
                         </a>
                        </div>

                    </div>
                </div>
                <!---end Haber--->
                @endforeach




            </div>




        </div><!-- end .row -->


        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->
@endif