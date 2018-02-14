<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>
<style>
    .strong {

        font-size: 17px !important;
    }

    .content {
        font-size: 15px;
    }

    .content img{
        width: 350px;
        height: 250px;
        border: 5;
    }

    .boldercontent {
        font-size: larger;
        font-weight: bolder;
    }


</style>

<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda ">
        {{$post_contentpages->title_tr}}
    </div><!-- end .page-content-title -->
<br><br><br><br>
    <div class="container-fluid">
        <div class="row">


            <div class="col-md-2 "></div>
                        <div class="col-md-8 ">

                            <span class="content">{!! $post_contentpages->content_tr !!}</span>


                           <!-- <div class="row">
                                <br><br>

                            @foreach ($post_magazalar as $post)


                                    <div class="col-md-6 content">
                                    <div class="boldercontent"><h4> {{ $post->title }}<br><br>
                                    <img src="{{ config("parameters.saray_url") }}/front/images/magazalar/{{ $post->imageurl }}" border="5">



                                    </div>
                                    </div>


                            @endforeach

                            </div>-->




                            <div class="row">

                                <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


                                <?php $i=0; ?>
                                @foreach ($post_magazalar as $post)
                                    <?php $i++; ?>

                                    <!---start yayınlar--->
                                        <div class="col-md-3 col-sm-4 col-xs-12 "  data-wow-delay=".8s" data-wow-animations="1.5s">
                                            <div class="announcement-item">
                                                <div class="announcement-item-title-alt">

                                                </div>
                                                <div class="announcement-item-image ">
                                                    <a href="" class="announcement-item-image-link" target="_blank">
                                                        <img src="{{ config("parameters.saray_url") }}/front/images/magazalar/{{ $post->imageurl }}" class="img-responsive " alt="" >
                                                    </a>
                                                </div>



                                                <div class="announcement-item-content">

                                                    <div class="indirbtn"><a href="" class="announcement-item-more" target="_blank">{{ $post->title_tr }} >> İndir</a></div>
                                                    <div class="kitaplartxt"><a href="" class="announcement-item-more" target="_blank">{{ $post->title_tr }} </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---end yayınlar--->
                                    @endforeach


                                </div>




                        </div>
            <div class="col-md-2 "></div>




        </div>

        <div class="col-md-2 "></div>
        <div class="col-md-8 ">
        <div class="paginationcontainer"></div>
        </div>
        <div class="col-md-2 "></div>

    </div>


</section>