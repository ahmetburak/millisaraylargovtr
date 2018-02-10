
<!-- start section#slider -->



<style>
    #slider > div > div > div > div.owl-stage-outer > div{
        padding-top: 100px !important;
    }


    @media only screen and (max-width: 992px) {
        #slider > div > div > div > div.owl-stage-outer > div{
            padding-top: 0px !important;
        }
    }


</style>


<section id="slider">

    <div class="container-fluid">


        <div class="row">



            <div class="owl-carousel page-slider">

            @foreach ($post_sliders as $post)


                    <div class="slider-item" style="background-image:url('{{ config("parameters.saray_url") }}front/images/Saraylar/{{ $post->url }}');">
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

