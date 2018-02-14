<style>

</style>



<!--start big menu-->
<div class="big-menu">


    <nav class="navbar navbar-default">


        <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ config("parameters.saray_url") }}hakkimizda/">@lang('sozluk.menu.hakkimizda')</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.saraykosk')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/ayvalikavak-kasri">Ayvalıkavak Kasrı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/beykoz-kasri">Beykoz Kasrı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/florya-ataturk-deniz-kosku">Florya Atatürk Deniz Köşkü</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/ihlamur-kasirlari">Ihlamur Kasırları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/kucuksu-kasri">Küçüksu Kasrı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/maslak-kasirlari">Maslak Kasırları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/yalova-ataturk-koskleri">Yalova Atatürk Köşkleri</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/dolmabahce-sarayi">Dolmabahçe Sarayı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/beylerbeyi-sarayi">Beylerbeyi Sarayı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}saraylar/yildiz-sarayi-sale">Yıldız Sarayı Şale</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.muzeler') <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}muzeler/aynalikavak-musiki-muzesi">Aynalıkavak Musiki Müzesi</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}muzeler/dolmabahce-saat-muzesi">Dolmabahçe Saat Müzesi</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}muzeler/saray-koleksiyonlari-muzesi">Saray Koleksiyonları Müzesi</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.ziyaret')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}ziyaret-bilgileri">@lang('sozluk.menu.ziyaret')</a></li>

                        <?if (App::getLocale() == 'tr'){?>
                        <li><a href="{{ config("parameters.saray_url") }}gezi-rehberi/esaslar">@lang('sozluk.menu.gezirehberi')</a></li>
                        <?}?>


                    </ul>
                </li>

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.magaza')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}magazalarimiz/">@lang('sozluk.menu.magazalarimiz')</a></li>


                        <?if (App::getLocale() == 'tr'){?>
                        <li><a href="{{ config("parameters.saray_url") }}magaza/hediyelik-urunler">@lang('sozluk.menu.hediyelik')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}magaza/yildiz-porselen-urunleri">@lang('sozluk.menu.yildizurunler')</a></li>
                        <?}?>

                    </ul>
                </li>


                <li><a href="{{ config("parameters.saray_url") }}rezervasyon/" >@lang('sozluk.menu.rezervasyon')</a></li>



                <?if (App::getLocale() == 'tr'){?>
                <li><a href="https://www.youtube.com/millisaraylartbmm" target="_blank">@lang('sozluk.menu.konferanslar')</a></li>
                <?}?>




                <li><a href="{{ config("parameters.saray_url") }}iletisim" class="mdesktop">@lang('sozluk.menu.iletisim')</a></li>


                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.koleksiyonlar')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/tekstil">Tekstil</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/tablo">Tablo</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/sofra-takimlari">Sofra Takımları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/saat-ve-muzik-aletleri">Saat ve Müzik Aletleri</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/mobilya">Mobilya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/kitap">Kitap</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/isinma-endustri-ve-isitma-araclari">Isınma, Endüstri ve Isıtma Araçları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/hat-sanati-ve-yazi-takimlari">Hat Sanatı ve Yazı Takımları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/hali">Halı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/dekoratif-eserler">Dekoratif Eserler</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}koleksiyonlar/aydinlatma-araclari">Aydınlatma Araçları</a></li>
                    </ul>
                </li>




                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.fabrikalar')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}fabrikalar/hereke-hali-ve-ipekli-dokuma-fabrikasi">Hereke Halı ve İpekli Dokuma Fabr.</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}fabrikalar/yidiz-cini-fabrika-i-humayunu">Yıldız Çini Fabrika-i Hümâyûnu</a></li>
                    </ul>
                </li>
                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.tarihisahsiyetler')<span class="caret"></span></a>
                    <ul class="dropdown-menu">



                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-III-selim">Sultan III. Selim</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-abdulmecid">Sultan Abdülmecid</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-abdulaziz">Sultan Abdülaziz</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-V-murad">Sultan V. Murad</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-II-abdulhamid">Sultan II. Abdülhamid</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-V-mehmed-resad">Sultan V. Mehmed Reşad</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-VI-mehmed-vahideddin">Sultan VI. Mehmed Vahideddin</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/sultan-abdulmecid-efendi">Sultan Abdülmecid Efendi</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}tarihi-sahsiyetler/mustafa-kemal-ataturk">Mustafa Kemal Atatürk</a></li>




                    </ul>
                </li>
                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.restorasyon')<span class="caret"></span></a>
                    <ul class="dropdown-menu">




                        <?if (App::getLocale() == 'tr'){?>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cam">@lang('sozluk.menu.cam')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/demir-atolyesi">@lang('sozluk.menu.demir')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/kalemisi-ve-altin-varak">@lang('sozluk.menu.kalemisi')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/kursun-atolyesi">@lang('sozluk.menu.kursun')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/marangoz-atolyesi">@lang('sozluk.menu.marangoz')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/parke-cila">@lang('sozluk.menu.parke')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/stuccon-atolyesi">@lang('sozluk.menu.stuccon')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/porselen-cam">@lang('sozluk.menu.porselen')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/ahsap-torna">@lang('sozluk.menu.ahsap')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cilt">@lang('sozluk.menu.cilt')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cilingir">@lang('sozluk.menu.cilingir')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cini-soba">@lang('sozluk.menu.cinisoba')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/hali-kilim">@lang('sozluk.menu.halikilim')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/metal-restorasyon">@lang('sozluk.menu.metalrestorasyon')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/saat-restorasyon">@lang('sozluk.menu.saatrestorasyon')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/tekstil-restorasyon">@lang('sozluk.menu.tekstilrestorasyon')</a></li>
                        <?}?>


                        <?if (App::getLocale() != 'tr'){?>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/marangoz-atolyesi">@lang('sozluk.menu.marangoz')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/parke-cila">@lang('sozluk.menu.parke')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/porselen-cam">@lang('sozluk.menu.porselen')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/ahsap-torna">@lang('sozluk.menu.ahsap')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cilingir">@lang('sozluk.menu.cilingir')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/cini-soba">@lang('sozluk.menu.cinisoba')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/hali-kilim">@lang('sozluk.menu.halikilim')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/saat-restorasyon">@lang('sozluk.menu.saatrestorasyon')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/tekstil-restorasyon">@lang('sozluk.menu.tekstilrestorasyon')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/chandelier">@lang('sozluk.menu.avize')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/furnishing">@lang('sozluk.menu.döseme')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/mother-of-pearl">@lang('sozluk.menu.pearl')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/painting-restoration">@lang('sozluk.menu.resim')</a></li>
                            <li><a href="{{ config("parameters.saray_url") }}atolyeler/tailor-curtain-atelier">@lang('sozluk.menu.terzi')</a></li>
                        <?}?>











                    </ul>
                </li>
                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.yayinlar')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}yayinlar/brosurler">@lang('sozluk.menu.brosurler')</a></li>


                        <?if (App::getLocale() == 'tr'){?>
                        <li><a href="{{ config("parameters.saray_url") }}yayinlar/dergiler">@lang('sozluk.menu.dergiler')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}yayinlar/kitaplar">@lang('sozluk.menu.kitaplar')</a></li>


                        <li><a href="{{ config("parameters.saray_url") }}yayinlar/kitabevi/dolmabahce-sarayi-kitabevi">@lang('sozluk.menu.kitapevi')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}yayinlar/bultenler">@lang('sozluk.menu.bultenler')</a></li>
                        <?}?>


                    </ul>
                </li>
                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.kafeteryalar')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/saat-kule-kafeterya">Saat Kule Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/dolmabahce-kafeterya">Dolmabahçe Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/kusluk-kafeterya">Kuşluk Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/harem-kafeterya">Harem Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/beylerbeyi-sarayi-kafeterya">Beylerbeyi Sarayı Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/maslak-kasri-kafeterya">Maslak Kasrı Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/ihlamur-kasri-kafeterya">Ihlamur Kasrı Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/kucuksu-kasri-kafeterya">Küçüksu Kasrı Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/aynalikavak-kasri-kafeterya">Aynalıkavak Kasrı Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/yalova-sinema-kafeterya">Yalova Sinema Kafeterya</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}kafeteryalar/yildiz-teras-kafeterya">Yıldız Teras Kafeterya</a></li>
                    </ul>
                </li>






                <?if (App::getLocale() == 'tr'){?>
                <li class="dropdown smenu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('sozluk.menu.hizmetler')<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}hizmetler/gezi-yonetmeligi">@lang('sozluk.menu.geziyonetmeligi')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}hizmetler/yer-ve-mekan-kiralama">@lang('sozluk.menu.yermekan')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}hizmetler/goruntu-alma-ve-arastirma">@lang('sozluk.menu.goruntualma')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}hizmetler/staj-islemleri">@lang('sozluk.menu.staj')</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}hizmetler/klasik-turk-sanatlari-merkezi">@lang('sozluk.menu.klasikturksanatları')</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="" class="smenu mresponsive" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">@lang('sozluk.menu.sanaltur') <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/dolmabahce-sarayi">Dolmabahçe Sarayı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/beylerbeyi-sarayi">Beylerbeyi Sarayı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/ayvalikavak-kasri">Ayvalıkavak Kasrı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/kucuksu-kasri">Küçüksu Kasrı</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/ihlamur-kasirlari">Ihlamur Kasırları</a></li>
                        <li><a href="{{ config("parameters.saray_url") }}sanal-tur/yildiz-sarayi-sale">Yıldız Sarayı</a></li>
                    </ul>
                </li>


                <li><a href="{{ config("parameters.saray_url") }}ihaleler/" class="smenu mresponsive">@lang('sozluk.menu.ihale')</a></li>
                <?}?>



                <li><a href="{{ config("parameters.saray_url") }}iletisim" class="smenu mresponsive">@lang('sozluk.menu.iletisim')</a></li>


            </ul>
        </div>

    </nav>

</div>
<!-- end big-menu -->
