<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:34
 */
?>
<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>

<!-- start section#announcement -->
<section id="announcement">
    <div class="announcement-top">

    </div><!-- end announcement-top -->
    <div class="container-fluid announcement-content">
        <div class="announcement-title"><br>
            <h3>Haberler & Duyurular</h3>
        </div>
        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">



                <?php $i=0; ?>
                @foreach ($post_etkinlik as $post)
                    <?php $i++; ?>


                    <!---start Haber--->
                        <div class="col-md-3 col-sm-6 col-xs-12" data-wow-delay=".8s" data-wow-animations="1.5s">
                            <div class="announcement-item">
                                <div class="announcement-item-title-alt">

                                </div>
                                <div class="announcement-item-image">
                                    <a href="<?PHP echo $path; ?>etkinlikler/{{ $post->id }}" class="announcement-item-image-link">

                                        <img src="<?PHP echo $path; ?>front/images/Haberler/{{ $post->imagesurl }}" class="img-responsive" alt="">
                                    </a>
                                </div>

                                <div class="announcement-item-content">
                                    <div class="announcement-item-content-text">
                                        {{ $post->content_tr }}


                                    </div>
                                    <a href="#" class="announcement-item-more">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                        <!---end Haber--->

                @endforeach






            </div>


        </div><!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#announcement -->
