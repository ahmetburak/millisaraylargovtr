<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>
<style>
    .koleksiyonlarimaj2 {
        padding-top: 50px;
        text-align: center;
    }
    .koleksiyonlarimaj2>img {

        max-width: 350px;

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


                    <divvv class="row">


                        <div class="col-md-4 koleksiyonlarimaj2">


                            <img src="{{ config("parameters.saray_url") }}front/images/Saraylar/{{ $post_galleries->url }}"/>
                        </div>


                        <div class="col-md-8">


                            <div class="page-content-item" data-index="2">

                                <h3><span class="bgok">&nbsp;</span>{{ $post_contentpages->title_tr}} Açıldı</h3><br>
                                <p>

                                    {!!html_entity_decode($post__CP[0])!!}

                                </p>
                            </div>
                        </div>


                    </divvv><!-- end .row -->


                </div>

            </div>
        </div>
    </div>


</section>