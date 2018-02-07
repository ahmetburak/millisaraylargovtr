
<?php $a=0; ?>
@foreach ($post_magazalar as $post)
    <?php $a++;?>
@endforeach


<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<style>
    .img-responsive2 {
        width: 100%;
        min-height: 180px;

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



    section.activities {

        margin-top: -10px !important;
    }

    @media only screen and (max-width: 992px) {
        section.activities {

            margin-top: -1px !important;
        }
    }


</style>



@if( !empty($a))




<!-- start section#activities -->
<section class="activities" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">








            <div class="contentpages" data-index="2">

                <h3> {{ $post_contentpages->title_tr}}</h3><br>
                <p>

                    {!!html_entity_decode($post_contentpages1)!!}







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


        <?php $i=0; ?>
        @foreach ($post_magazalar as $post)
            <?php $i++; ?>

            <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" >
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image1">

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



        <!-- end .row -->
    </div><!-- end .container-fluid -->

        </p>
    </div>
</section>
<!-- end section#activities -->
@endif