
<!-- start section#slider -->

<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<section id="slider">

    <div class="container-fluid">


        <div class="row">



            <div class="owl-carousel page-slider">

            @foreach ($post_galleries_slider as $post)


                    <div class="slider-item" style="background-image:url('<?PHP echo $path; ?>front/images/Saraylar/{{ $post->url }}');">
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

