



<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda " >
        @lang('sozluk.koleksiyonlartitle')

    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">


                    <div class="page-content-item" data-index="2">

                        <h3><span class="bgok">&nbsp;</span>{{ object_get($post_contentpages, "title_{$dil}" )}}</h3><br>
                        <p>

                            {!! object_get($post_contentpages, "content_{$dil}" )!!}

                        </p>
                    </div>



                </div>

            </div>
        </div>
    </div>



</section>