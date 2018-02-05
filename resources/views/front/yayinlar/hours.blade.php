

<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<!-- start section#hours -->
<section id="hours">
    <div class="hours-top"></div><!-- end .footer-top -->


    <div class="container">


<br>




        <div class="place-images-content">
            <dwiv class="activities-title announcement-title ResimGalerisiTitle">

                <h2>&nbsp;Fotoğraf Galerisi</h2>
            </dwiv>

            <div id="swipeboxExample">




                <?php $i=0; ?>
                @foreach ($post_galleries as $post)
                    <?php $i++; ?>

                    <a href="<?PHP echo $path; ?>front/images/Atolyeler/{{ $post->url }}" id="resim<?php echo $i; ?>" class="swipeboxExampleImg" rel='gal'>
                        <img src="<?PHP echo $path; ?>front/images/Atolyeler/{{ $post->url }}" />
                    </a>


                @endforeach




            </div><!-- end #swipeboxExample -->
        </div>






    </div><!-- end .cotnainer-fluid -->
</section>
<!-- end section#hours -->
