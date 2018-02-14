





@if( !empty($post_visittimes))





    <!-- start section#hours -->
<section id="hours">
    <div class="hours-top"></div><!-- end .footer-top -->
    <div class="container">
        <div class="row">
            <div class="hours-big-title">
                <h1>
                    <?if (App::getLocale() != 'tr'){?>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <?}?>

                    @lang('sozluk.ziyaretsaatleri')</h1>
            </div><!-- end .hours-big-title -->
            <div class="hours-info-box">

                    <?if (App::getLocale() == 'tr'){?>
                        <div class="hours-info-box-icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div><!-- end .hours-info-box-icon -->
                        <span>
                            @lang('sozluk.ziyaretinfo')
                    <?}?>
                </span>
            </div><!-- end .hours-info-box-->

            <div class="col-md-12 hours-box">

                <ul class="hours-box-list">
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            @lang('sozluk.pazartesi')
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun1))
                                {{ $post_visittimes->gun1 }}
                            @endif


                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            @lang('sozluk.sali')
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun2))
                                {{ $post_visittimes->gun2 }}
                            @endif




                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            @lang('sozluk.carsamba')
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun3))
                                {{ $post_visittimes->gun3 }}
                            @endif


                        </div>
                    </li>
                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            <div class="hours-box-li-days hours-blue">
                                @lang('sozluk.persembe')
                            </div>
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun4))
                                {{ $post_visittimes->gun4 }}
                            @endif


                        </div>

                    </li>


                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            <div class="hours-box-li-days hours-blue">
                                @lang('sozluk.cuma')
                            </div>
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun5))
                                {{ $post_visittimes->gun5 }}
                            @endif


                        </div>

                    </li>


                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            <div class="hours-box-li-days hours-blue">
                                @lang('sozluk.cumartesi')
                            </div>
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun6))
                                {{ $post_visittimes->gun6 }}
                            @endif


                        </div>

                    </li>


                    <li class="hours-box-li">
                        <div class="hours-box-li-days">
                            <div class="hours-box-li-days hours-blue">
                                @lang('sozluk.pazar')
                            </div>
                        </div>
                        <div class="hours-box-li-times">


                            @if( !empty($post_visittimes->gun7))
                                {{ $post_visittimes->gun7 }}
                            @endif


                        </div>

                    </li>



                </ul><!-- end .hours-box-list -->
            </div><!-- end .col-md-6 -->






        </div><!-- end .row -->
    </div><!-- end .cotnainer-fluid -->
</section>
<!-- end section#hours -->
@endif