<style>

    .place-images-content {

        padding-left: 63px !important;
    }

    

</style>


<?php $a=0; ?>
@foreach ($post_galleries as $post)
    <?php $a++;?>
@endforeach

<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>

@if( !empty($a) && $post->url != "empty.jpg" )






    <!-- start section#place-images -->
    <section id="">
        <div class="place-images-top"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                <div class="place-images-content">
                    <div class="activities-title announcement-title ResimGalerisiTitle1">

                        <h2>&nbsp;Fotoğraf Galerisi</h2>
                    </div>

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
        </div><!-- end .row -->
            </div>
    </div><!-- end .container-fluid -->
</section>
<!-- end section#place-images -->
@endif