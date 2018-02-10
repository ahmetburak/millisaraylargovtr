


<?php $a=0; ?>
@foreach ($post_events_yayinlar as $post)
    <?php $a++;?>
@endforeach






@if( !empty($a))






<!-- start section#activities -->
<section class="activities" id="announcement">
    <div class="activities-top"></div>
    <div class="container-fluid activities-content announcement-content">
        <div class="activities-title announcement-title">






        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_events_yayinlar as $post)
                    <?php $i++; ?>

                <!---start yayınlar--->
                <div class="col-md-3 col-sm-4 col-xs-12" id="yayin<?php echo $i; ?>" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image ">
                            <a href="{{ config("parameters.saray_url") }}Pdf/{{ $post->url }}" class="announcement-item-image-link" target="_blank">
                                <img src="{{ config("parameters.saray_url") }}front/images/Yayinlar/{{ $post->imageurl }}" class="img-responsive " alt="" >
                            </a>
                        </div>

                        <div class="announcement-item-image ">
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
   <div class="paginationcontainer"> {{ $post_events_yayinlar->links() }}</div>

        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->







@endif