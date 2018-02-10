


<style>
    #page-content > div.container-fluid > div > div > div > divvv > div.col-md-4.kitaplarimaj > img {
        padding-top: 50px;
        border: 5px;
    }
</style>

<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda " >
       Kitaplar
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">









                    <divvv class="row">








                                <div class="col-md-4 kitaplarimaj">
                                <img src="{{ config("parameters.saray_url") }}front/images/Yayinlar/{{ $post_contentpages->imageurl }}" />
                            </div>




                                <div class="col-md-8">

                            <div class="page-content-item" data-index="2">

                                <h3><span class="bgok">&nbsp;</span>{{ $post_contentpages->title_tr}}</h3><br>
                                <p>

                                    {!!  $post_contentpages->description_tr !!}

                                    <br><br>
                                <h4><a href="{{ config("parameters.saray_url") }}yayinlar/kitaplar" class="announcement-item-image-link">Geri Dön</a> </h4>

                                </p>
                            </div>
                        </div>





                    </divvv><!-- end .row -->










                </div>

            </div>
        </div>
    </div>



</section>