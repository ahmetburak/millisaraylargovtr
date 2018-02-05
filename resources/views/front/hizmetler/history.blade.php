<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>
<style>
    .koleksiyonlarimaj2 {
        padding-top: 50px;
        text-align: center;
    }
    .koleksiyonlarimaj2>img {

        max-width: 500px;

    }

    #place-map > div.place-map-top {
        top: 1px !important;
    }

    .yonetmelik {
        width: 700px;
        margin: auto;
    }



</style>

<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda ">
        {{ $post_contentpages->title_tr}}
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">


                    <div class="row">


                        <div class="">
                            <div class="page-content-item" data-index="2">

                                <br>
                                <p>


                                    {!!  $post_contentpages->content_tr  !!}

                                </p>
                            </div>
                        </div>


                    </div><!-- end .row -->


                </div>

            </div>
        </div>
    </div>


</section>
