

<style>
    .hours-big-title{

        margin-top: -80px !important;

    }

</style>
















<!-- start section#hours -->
<section id="hours">
    <div class="hours-top"></div><!-- end .footer-top -->
    <div class="container">
        <div class="row"><br><br><br><br>
            <div class="hours-big-title">

            </div><!-- end .hours-big-title -->
            <div class="hours-info-box">
                <div class="hours-info-box-icon">
                    <i class="fa  fa-ticket" aria-hidden="true"></i>
                </div><!-- end .hours-info-box-icon -->
                <span>{{  object_get($post_contentpages_bilet, "title_{$dil}" ) }}</span>
            </div><!-- end .hours-info-box-->



            {!!   object_get($post_contentpages_bilet, "content_{$dil}" )  !!}























        </div><!-- end .row -->
    </div><!-- end .cotnainer-fluid -->
</section>
<!-- end section#hours -->
