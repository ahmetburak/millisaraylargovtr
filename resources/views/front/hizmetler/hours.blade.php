



<!-- start section#hours -->
<section id="hours">
    <div class="hours-top"></div><!-- end .footer-top -->
    <div class="container">
        <div class="row">
            <div class="hours-big-title">
                <h1> Ziyaret Saatleri</h1>
            </div><!-- end .hours-big-title -->
            <div class="hours-info-box">
                <div class="hours-info-box-icon">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div><!-- end .hours-info-box-icon -->
                <span>Açılış-Kapanış saatleri mekanlar arasında farklılıklar göstermektedir.</span>
            </div><!-- end .hours-info-box-->

            <div class="col-md-12 hours-box">

                <ul class="hours-box-list">
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            Pazartesi
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->group1))
                                {{ $post_visittimes->group1 }}
                            @endif


                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            Salı-Cuma
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->group2))
                                {{ $post_visittimes->group2 }}
                            @endif




                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            Cumartesi
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->group2))
                                {{ $post_visittimes->group3 }}
                            @endif


                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            <div class="hours-box-li-days hours-blue">
                                Pazar
                            </div>
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->group4))
                                {{ $post_visittimes->group4 }}
                            @endif


                        </div>

                    </li>
                </ul><!-- end .hours-box-list -->
            </div><!-- end .col-md-6 -->






        </div><!-- end .row -->
    </div><!-- end .cotnainer-fluid -->
</section>
<!-- end section#hours -->
