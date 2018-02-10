



<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda " >
        Rezervasyon Modülü
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">
                    <div class="owl-carousel page-content-slider">

Yapım Aşamasında


                    </div><!-- end .page-content-slider -->


                    <div class="page-content-custom">

                        <?php $a=0; ?>
                        @foreach ($post__CP as $post)
                            <?php $a++;?>
                        @endforeach



                        @if( $a > 2)




                        <a class="page-content-prev"></a>
                        <a class="page-content-next"></a>

                        @endif




                    </div><!-- end .page-content-custom -->
                </div>

            </div>
        </div>
    </div>



</section>