<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>



<style>

    .boldconcept{
        font-size: 20px;
        font-weight: bolder;
    }


</style>



<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda " >
        {{ $post_contentpages->title_tr}}
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">
                    <div class="owl-carousel page-content-slider">

                        @if( !empty($post__CP[0]))
                        <div class="page-content-item" data-index="2">

                            <h3>

                                <span class="bgok">&nbsp;</span>
                                {{ $post_contentpages->title1_tr}}



                            </h3><br>
                            <p>

                                {!! $post__CP[0]!!}

                            </p>
                        </div>
                        @endif

                        @if( !empty($post__CP[1]))
                        <div class="page-content-item" data-index="2">

                            <h3>&nbsp;</h3><br>
                            <p>

                                {!! $post__CP[1] !!}

                            </p>
                        </div>
                        @endif


                        @if( !empty($post__CP[2]))
                        <div class="page-content-item" data-index="3">
                            <h3>&nbsp;</h3><br>
                            <p>

                                {!! $post__CP[2] !!}

                            </p>
                        </div>
                        @endif


                        @if( !empty($post__CP[3]))
                        <div class="page-content-item" data-index="4">
                            <h3>&nbsp;</h3><br>
                            <p>

                                {!! $post__CP[3] !!}

                            </p>
                        </div>
                        @endif


                            @if( !empty($post__CP[4]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!! $post__CP[4] !!}

                                    </p>
                                </div>
                            @endif

                            @if( !empty($post__CP[5]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!! $post__CP[5] !!}

                                    </p>
                                </div>
                            @endif

                            @if( !empty($post__CP[6]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!! $post__CP[6] !!}

                                    </p>
                                </div>
                            @endif



                    </div><!-- end .page-content-slider -->




                    <div class="row  hakkimizdamenurow">
                        <div class="col-xs-12 col-md-6  pad" >



                            <div class="container">
                                <a href="<?PHP echo $path; ?>gezi-rehberi/esaslar" id="hakkimizdamenu">
                                    <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;Ziyaret Esasları ve Bilgilendirmeler

                                </a>
                                <div class="overlay1">

                                </div>
                            </div>


                        </div>
                        <div class="col-xs-12 col-md-6  pad" >


                            <div class="container">

                                <a href="<?PHP echo $path; ?>gezi-rehberi/cocuklar-icin-dolmabahce-gezi-rehberi" class="" id="hakkimizdamenu"> <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;
                                    Çocuklar için Dolmabahçe Sarayı Gezi Rehberi
                                </a>
                                <div class="overlay1">

                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 col-md-6 pad" >


                            <div class="container">
                                <a href="<?PHP echo $path; ?>gezi-rehberi/cocuklar-icin-beylerbeyi-gezi-rehberi" id="hakkimizdamenu"> <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;
                                    Çocuklar için Beylerbeyi Sarayı Gezi Rehberi
                                </a>
                                <div class="overlay1">

                                </div>
                            </div>


                        </div>
                        <div class="col-xs-12 col-md-6 pad" >


                            <div class="container" >
                                <a href="<?PHP echo $path; ?>gezi-rehberi/ogretmenler-icin-dolmabahce-gezi-rehberi" id="hakkimizdamenu">
                                    <img src="<?PHP echo $path; ?>front/images/hkmenu1.png">&nbsp;&nbsp;
                                    Dolmabahçe Sarayı Öğretmenler için Rehber Metin
                                </a>
                                <div class="overlay1">

                                </div>
                            </div>


                        </div>

                    </div>



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