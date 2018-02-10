<style>
.main-slider  {
    z-index: 9999 !important;
}
</style>
<?PHP $path = "http://bidiapp.com/millisaraylar.gov.tr1/";?>

<!-- start section#slider -->
<section id="slider">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel main-slider">


                @foreach ($post_slider_item as $post)

                    <div class="slider-item" style="background-image:url('{{ config("parameters.saray_url") }}front/images/Banner/{{ $post->url }}');">
                        <div class="slider-item-title" data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">
                            <div class="slider-item-title-first">{{ $post->text1 }}</div>
                            <div class="slider-item-title-second">{{ $post->text2 }}</div>
                            <div class="slider-item-title-third" data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">
                                <a href="{{ config("parameters.saray_url") }}{{ $post->link }}" class="slider-item-title-link">
                                   {{ $post->linktext }}
                                </a>
                            </div>
                        </div>
                        <div class="slider-item-image">
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
</section>


<script src="<?PHP echo $path;?>front/js/script.js"></script>
