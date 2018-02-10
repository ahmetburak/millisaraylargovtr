<style>
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

    .kitaplar img{
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



    .kitaplar .announcement-item-content {
        bottom: 0px !important;
    }

    .kitaplar .announcement-item-content {
        height: 70px !important;

    }

    .kitaplar .announcement-item-content .announcement-item-more {
        right: 10px !important;
    }

    .kitaplar .announcement-item {

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
    .kitaplar .indirbtn {
        display: none !important;
    }

    .kitaplar .kitaplartxt {
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


    .kitaplar .announcement-item-content .announcement-item-more {
        padding: 10px !important;
    }

    .kitaplar .announcement-item-content .announcement-item-more {
        position: unset !important;
    }

    .announcement-item-image {
        background-color: whitesmoke;
    }

</style>



<?php $a=0; ?>
@foreach ($post_events as $post)
    <?php $a++;?>
@endforeach






@if( !empty($a))






<!-- start section#activities -->
<section class="activities" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">






            <h3>{{$title}}</h3>
        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_events as $post)
                    <?php $i++; ?>

                <!---start yayınlar--->
                <div class="col-md-3 col-sm-4 col-xs-12 {{$slugclass}}" id="yayin<?php echo $i; ?>" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image indirbtn">
                            <a href="{{ config("parameters.saray_url") }}Pdf/{{ $post->url }}" class="announcement-item-image-link" target="_blank">
                                <img src="{{ config("parameters.saray_url") }}front/images/Yayinlar/{{ $post->imageurl }}" class="img-responsive " alt="" >
                            </a>
                        </div>

                        <div class="announcement-item-image kitaplartxt">
                            <a href="{{ config("parameters.saray_url") }}yayinlar/kitaplar/{{ $post->id }}" class="announcement-item-image-link">
                                <img src="{{ config("parameters.saray_url") }}front/images/Yayinlar/{{ $post->imageurl }}" class="img-responsive " alt="" >
                            </a>
                        </div>

                        <div class="announcement-item-content">

                            <div class="indirbtn"><a href="{{ config("parameters.saray_url") }}Pdf/{{ $post->url }}" class="announcement-item-more" target="_blank">{{ $post->title_tr }} >> İndir</a></div>
                            <div class="kitaplartxt"><a href="{{ config("parameters.saray_url") }}front/images/Yayinlar/Pdf/{{ $post->url }}" class="announcement-item-more" target="_blank">{{ $post->title_tr }} </a></div>
                        </div>
                    </div>
                </div>
                <!---end yayınlar--->
                @endforeach


            </div>




        </div><!-- end .row -->
   <div class="paginationcontainer"> {{ $post_events->links() }}</div>

        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->







@endif