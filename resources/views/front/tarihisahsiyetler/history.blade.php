



<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda " >
       Tarihî Şahsiyetler
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">









                    <divvv class="row">







                            @if ( $post_galleries->slug === "mustafa-kemal-ataturk" || $post_galleries->slug === "sultan-II-abdulhamid" || $post_galleries->slug === "sultan-III-selim" )
                                    <div class="col-md-2 koleksiyonlarimaj">
                            @else
                                    <div class="col-md-4 koleksiyonlarimaj">
                            @endif

                                <img src="{{ config("parameters.saray_url") }}front/images/Tarihisahsiyetler/{{ $post_galleries->url }}" />
                            </div>



                                            @if ( $post_galleries->slug === "mustafa-kemal-ataturk" || $post_galleries->slug === "sultan-II-abdulhamid" || $post_galleries->slug === "sultan-III-selim" )
                                <div class="col-md-10">
                            @else
                                <div class="col-md-8">
                            @endif


                            <div class="page-content-item" data-index="2">

                                <h3><span class="bgok">&nbsp;</span>{{ $post_contentpages->title_tr}}</h3><br>
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