




<style>

    .hours-big-title {

        margin-top: -100px !important;

    }

    #place-images{
        color: #bfa387;

    }

    .hours-big-title {
        color: #bfa387;
    }

    #place-images > divw > div {
        margin-left: 15px !important;
    }

    .hours-info-box {
        font-weight: lighter !important;
    }


</style>


    <!-- start section#place-images -->
    <section id="place-images">
        <div class="place-images-top"></div>
        <divw class="container-fluid">
            <div class="row">
                <div class="place-images-content">


                    <div class="hours-big-title">
                        <h1>
                            <?if (App::getLocale() != 'tr'){?>
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <?}?>
                            @lang('sozluk.iletisimformu')</h1>
                    </div><!-- end .hours-big-title -->




                    <div class="hours-info-box">

                        <?if (App::getLocale() == 'tr'){?>
                            <div class="hours-info-box-icon">
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                            </div><!-- end .hours-info-box-icon -->
                            <span>@lang('sozluk.iletisimformuinfo')</span>
                        <?}?>
                    </div><!-- end .hours-info-box-->

                    <div class="col-md-12 hours-box">

                        <ul class="hours-box-list row">


                            <form>
                                <div class="container">
                                    <div class="row">

                                <div class="form-group col-lg-4 col-xs-12">
                                    <label for="exampleInputEmail1">@lang('sozluk.formadsoyad')</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" width="200px">
                                    <small id="emailHelp" class="form-text text-muted">
                                        <?if (App::getLocale() == 'tr'){?>
                                            @lang('sozluk.forminfo1')
                                        <?}?>
                                    </small>
                                </div>

                                <div class="form-group col-lg-4 col-xs-12">
                                    <label for="exampleInputEmail1">@lang('sozluk.formmail')</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    <small id="emailHelp" class="form-text text-muted">
                                        <?if (App::getLocale() == 'tr'){?>
                                            @lang('sozluk.forminfo2')
                                        <?}?>
                                    </small>

                                </div>

                                <div class="form-group col-lg-4 col-xs-12">
                                    <label for="exampleInputEmail1">@lang('sozluk.formtelefon')</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    <small id="emailHelp" class="form-text text-muted">
                                        <?if (App::getLocale() == 'tr'){?>
                                            @lang('sozluk.forminfo3')
                                        <?}?>
                                    </small>

                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="exampleInputEmail1"></label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-default">@lang('sozluk.formkaydet')</button>
                                </div>

                                    </div></div>











                            </form>
                        </ul><!-- end .hours-box-list -->
                    </div><!-- end .col-md-6 -->






                </div>
        </div><!-- end .row -->
    </divw><!-- end .container-fluid -->
</section>
<!-- end section#place-images -->
