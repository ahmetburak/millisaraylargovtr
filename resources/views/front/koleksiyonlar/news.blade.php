
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







            <h3>Etkinlikler</h3>
        </div>



        <div class="row">

            <div class="denemeler" data-aos="fade-down" data-aos-duration="1000">


            <?php $i=0; ?>
                @foreach ($post_events as $post)
                    <?php $i++; ?>

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber<?php echo $i; ?>" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="{{ config("parameters.saray_url") }}front/images/Haberler/{{ $post->imagesurl }}" class="img-responsive" alt="">



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




{{--

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12"  data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber2.jpeg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">
                                Dolmabahçe Saray Konferansları'nın bu haftaki konuğu "Fahreddin Paşa ve Sonuna Kadar Savaş: Medine Müdafaası" başlıklı konferansı ile Doç. Dr. Mesut Uyar olacak.
                                4 Ocak Perşembe günü saat 16:00'da...



                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber3" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber3.jpeg" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">

                                Dolmabahçe Saray Konferansları'nın konukları "Osmanlı'dan Günümüze Tezhip Sanatı" başlıklı konferansları ile  Nilüfer Kurfeyz ve Selim Sağlam olacak.
                                28 Aralık Perşembe günü saat 16:00'da...

                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->

                <!---start Haber--->
                <div class="col-md-3 col-sm-6 col-xs-12" id="haber4" data-wow-delay=".8s" data-wow-animations="1.5s">
                    <div class="announcement-item">
                        <div class="announcement-item-title-alt">

                        </div>
                        <div class="announcement-item-image">
                            <a href="#" class="announcement-item-image-link">
                                <img src="/front/images/Haberler/Haber4.png" class="img-responsive" alt="">
                            </a>
                        </div>

                        <div class="announcement-item-content">
                            <div class="announcement-item-content-text">

                                Dolmabahçe Saray Konferansları'nın bu haftaki konuğu "Rusya'da Devlet ve Saray" başlıklı konferansı ile  Yrd. Doç. Dr. Mustafa Tanrıverdi olacak.
                                21 Aralık Perşembe günü saat 16:00'da...
                            </div>
                            <a href="#" class="announcement-item-more">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <!---end Haber--->
--}}










            </div>




        </div><!-- end .row -->


        <!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#activities -->
@endif