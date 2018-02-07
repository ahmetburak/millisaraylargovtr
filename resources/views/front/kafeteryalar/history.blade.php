<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>
<style>
    .koleksiyonlarimaj2 {
        padding-top: 50px;
        text-align: center;
    }
    .koleksiyonlarimaj2>img {

        max-width: 500px;

    }

    @media only screen and (max-width: 1111px) {

        .koleksiyonlarimaj2>img {

            max-width: 350px;
            float: left;

        }
    }

    #place-map > div.place-map-top {
        top: 1px !important;
    }

</style>

<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title page-content-title-hakkimizda ">
        Kafeteryalar
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">


                    <divvv class="row">

                        <div class="col-md-6 koleksiyonlarimaj2">
                        @foreach ($post_galleries_slider as $post)


                                <img src="<?PHP echo $path; ?>front/images/kafeteryalar/{{ $post->url }}"/>




                        @endforeach
                        </div>

                        <div class="col-md-6">
                            <div class="page-content-item" data-index="2">

                                <h3><span class="bgok">&nbsp;</span>{{ $post_contentpages->title_tr}}</h3><br>
                                <p>

                                    {!! $post_contentpages->content_tr !!}

                                </p>
                            </div>
                        </div>


                    </divvv><!-- end .row -->


                </div>

            </div>
        </div>
    </div>


</section>