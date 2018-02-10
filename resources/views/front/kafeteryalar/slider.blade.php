
<!-- start section#slider -->




<section id="slider">

    <div class="container-fluid">


        <div class="row">



            <div class="owl-carousel page-slider">

            @foreach ($post_galleries_slider as $post)


                    <div class="slider-item" style="background-image:url('{{ config("parameters.saray_url") }}front/images/kafeteryalar/{{ $post->url }}');">
                        <div class="slider-item-image">


                            <!-- <img src="images/earth.jpg" alt=""> -->
                        </div><!-- end .slider-image -->

                    </div><!-- end .slider-item -->


                @endforeach






            </div><!-- end .main-slider -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
<!-- end section#slider -->

