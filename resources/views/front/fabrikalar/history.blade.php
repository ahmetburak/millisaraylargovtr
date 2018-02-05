
<div class="page-content-top">

</div><!-- end .page-content-top -->

<section id="page-content">

    <div class="page-content-title">
        {{ $post_contentpages->title_tr}}
    </div><!-- end .page-content-title -->

    <div class="container-fluid">
        <div class="row">
            <div class="page-content">
                <div class="col-md-12">
                    <div class="owl-carousel page-content-slider ">


                        @if( !empty($post__CP[0]))
                        <div class="page-content-item" data-index="2">

                            <h3><span class="bgok">&nbsp;</span>Tarihçe</h3><br>
                            <p>

                                {!!html_entity_decode($post__CP[0])!!}

                            </p>
                        </div>
                        @endif

                        @if( !empty($post__CP[1]))
                        <div class="page-content-item" data-index="2">

                            <h3>&nbsp;</h3><br>
                            <p>

                                {!!html_entity_decode($post__CP[1])!!}

                            </p>
                        </div>
                        @endif


                        @if( !empty($post__CP[2]))
                        <div class="page-content-item" data-index="3">
                            <h3>&nbsp;</h3><br>
                            <p>

                                {!!html_entity_decode($post__CP[2])!!}

                            </p>
                        </div>
                        @endif


                        @if( !empty($post__CP[3]))
                        <div class="page-content-item" data-index="4">
                            <h3>&nbsp;</h3><br>
                            <p>

                                {!!html_entity_decode($post__CP[3])!!}

                            </p>
                        </div>
                        @endif


                            @if( !empty($post__CP[4]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!!html_entity_decode($post__CP[4])!!}

                                    </p>
                                </div>
                            @endif

                            @if( !empty($post__CP[5]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!!html_entity_decode($post__CP[5])!!}

                                    </p>
                                </div>
                            @endif

                            @if( !empty($post__CP[6]))
                                <div class="page-content-item" data-index="4">
                                    <h3>&nbsp;</h3><br>
                                    <p>

                                        {!!html_entity_decode($post__CP[6])!!}

                                    </p>
                                </div>
                            @endif



                    </div><!-- end .page-content-slider -->
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