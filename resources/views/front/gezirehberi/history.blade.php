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
        Gezi Rehberi
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">


                    <div class="contentpages" data-index="2">

                        <h3> {{ $post_contentpages->title_tr}}</h3><br>
                        <p>

                            {!!html_entity_decode($post_contentpages1)!!}

                        </p>
                    </div>




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




                </div>

            </div>
        </div>
    </div>



</section>