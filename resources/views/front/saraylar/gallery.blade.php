<?php $a=0; ?>
@foreach ($post_galleries as $post)
    <?php $a++;?>
@endforeach



@if( !empty($a))






    <!-- start section#place-images -->
    <section id="place-images">
        <div class="place-images-top"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="place-images-content">
                    <div class="activities-title announcement-title ResimGalerisiTitle">

                        <h2>&nbsp;@lang('sozluk.fotografgaleri')</h2>
                    </div>

                    <div id="swipeboxExample">




                    <?php $i=0; ?>
                    @foreach ($post_galleries as $post)
                    <?php $i++; ?>

                    <a href="{{ config("parameters.saray_url") }}front/images/Saraylar/{{ $post->url }}" id="resim<?php echo $i; ?>" class="swipeboxExampleImg" rel='gal'>
                        <img src="{{ config("parameters.saray_url") }}front/images/Saraylar/{{ $post->url }}" />
                    </a>


                    @endforeach




                </div><!-- end #swipeboxExample -->
            </div>
        </div><!-- end .row -->
    </div><!-- end .container-fluid -->
</section>
<!-- end section#place-images -->
@endif