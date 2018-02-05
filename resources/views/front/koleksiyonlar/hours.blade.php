

<?PHP $path="http://bidiapp.com/millisaraylar.gov.tr1/";?>


<!-- start section#hours -->
<section id="hours">
    <div class="hours-top"></div><!-- end .footer-top -->



    <div class="container">


<br>


        <h1 class="koleksiyonlarpad">&nbsp;&nbsp;Koleksiyondan Seçmeler</h1>

            <?php $i=0; ?>
            @foreach ($post_koleksiyonlar as $post)
                <?php $i++; ?>
                    <divvv class="row">
                    <div class="col-md-4 koleksiyonlarimaj">
                    <img src="<?PHP echo $path; ?>front/images/Koleksiyonlar/{{ $post->imageurl }}" />
                    </div>

                    <div class="col-md-8">
                    <div class="page-content-item" data-index="2">

                        <h3><span class="bgok">&nbsp;</span>{{ $post->producttitle_tr}}</h3><br>
                        <p>

                            {!!  $post->productdetail_tr!!}

                        </p>
                    </div>
                    </div>





        </divvv><!-- end .row -->


            @endforeach











    </div><!-- end .cotnainer-fluid -->
</section>
<!-- end section#hours -->
