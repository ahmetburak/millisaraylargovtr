
<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title">
        {{  object_get($post_contentpages, "title_{$dil}" ) }}
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">


                    <div class="contentpages" data-index="2">

                        <h3><span class="bgok">&nbsp;</span>
                            {{  object_get($post_contentpages, "title_{$dil}" ) }}</h3><br>
                        <p>

                            {!!html_entity_decode($post_contentpages1)!!}

                        </p>
                    </div>


                </div>

            </div>
        </div>
    </div>



</section>