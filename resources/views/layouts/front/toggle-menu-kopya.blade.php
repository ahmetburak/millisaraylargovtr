<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:26
 */
?>

<!--start toggle menu-->
<div class="sc-menu">
    <div class="sc-menu-bg">
        <nav class="navbar navbar-default sc-navbar">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right second-right sc-navbar-ul">

                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Koleksiyonlar<span class="caret"></span></a>




                        <ul class="dropdown-menu">
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/tekstil">Tekstil</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/tablo">Tablo</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/sofra-takimlari">Sofra Takımları</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/saat-ve-muzik-aletleri">Saat ve Müzik Aletleri</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/mobilya">Mobilya</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/kitap">Kitap</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/isinma-endustri-ve-isitma-araclari">Isınma, Endüstri ve Isıtma Araçları</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/hat-sanati-ve-yazi-takimlari">Hat Sanatı ve Yazı Takımları</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/hali">Halı</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/dekoratif-eserler">Dekoratif Eserler</a></li>
                            <li><a href="<?PHP echo $path; ?>koleksiyonlar/aydinlatma-araclari">Aydınlatma Araçları</a></li>
                        </ul>
                    
                        
                        
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Fabrikalar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?PHP echo $path; ?>fabrikalar/hereke-hali-ve-ipekli-dokuma-fabrikasi">Hereke Halı ve İpekli Dokuma Fabr.</a></li>
                            <li><a href="<?PHP echo $path; ?>fabrikalar/yidiz-cini-fabrika-i-humayunu">Yıldız Çini Fabrika-i Hümâyûnu</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Tarihî Şahsiyetler<span class="caret"></span></a>
                        <ul class="dropdown-menu">



                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-III-selim">Sultan III. Selim</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-abdulmecid">Sultan Abdülmecid</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-abdulaziz">Sultan Abdülaziz</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-V-murad">Sultan V. Murad</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-II-abdulhamid">Sultan II. Abdülhamid</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-V-mehmed-resad">Sultan V. Mehmed Reşad</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-VI-mehmed-vahideddin">Sultan VI. Mehmed Vahideddin</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/sultan-abdulmecid-efendi">Sultan Abdülmecid Efendi</a></li>
                            <li><a href="<?PHP echo $path; ?>tarihi-sahsiyetler/mustafa-kemal-ataturk">Mustafa Kemal Atatürk</a></li>




                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Restorasyon<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>


                                <ul class="res-first-list">
                                    <div class="res-title">Teknik Atölyeler</div>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/cam">Cam Atölyesi</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/demir-atolyesi">Demir Atölyesi</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/kalemisi-ve-altin-varak">Kalemişi ve Altın Varak</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/kursun-atolyesi">Kurşun Atölyesi</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/marangoz-atolyesi">Marangoz Atölyesi</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/parke-cila">Parke Cila</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/stuccon-atolyesi">Stuccon Atölyesi</a></li>
                                </ul>
                            </li>
                            <li>

                                <ul class="res-second-list">
                                    <div class="res-title">Obje Restorasyon Atölyeleri</div>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/porselen-cam">Porselen-Cam Atölyesi</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/ahsap-torna">Ahşap-Torna</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/cilt">Cilt</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/cilingir">Çilingir</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/cini-soba">Çini Soba</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/hali-kilim">Halı-Kilim</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/metal-restorasyon">Metal Restorasyon</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/saat-restorasyon">Saat Restorasyon</a></li>
                                    <li><a href="<?PHP echo $path; ?>atolyeler/tekstil-restorasyon">Tekstil Restorasyon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Yayınlar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?PHP echo $path; ?>yayinlar/brosurler">Broşürler</a></li>
                            <li><a href="<?PHP echo $path; ?>yayinlar/dergiler">Dergiler</a></li>
                            <li><a href="<?PHP echo $path; ?>yayinlar/kitaplar">Kitaplar</a></li>
                            <li><a href="<?PHP echo $path; ?>yayinlar/kitabevi/dolmabahce-sarayi-kitabevi">Kitabevi</a></li>
                            <li><a href="<?PHP echo $path; ?>yayinlar/bultenler">Bültenler</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Kafeteryalar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/saat-kule-kafeterya">Saat Kule Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/dolmabahce-kafeterya">Dolmabahçe Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/kusluk-kafeterya">Kuşluk Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/harem-kafeterya">Harem Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/beylerbeyi-sarayi-kafeterya">Beylerbeyi Sarayı Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/maslak-kasri-kafeterya">Maslak Kasrı Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/ihlamur-kasri-kafeterya">Ihlamur Kasrı Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/kucuksu-kasri-kafeterya">Küçüksu Kasrı Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/aynalikavak-kasri-kafeterya">Aynalıkavak Kasrı Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/yalova-sinema-kafeterya">Yalova Sinema Kafeterya</a></li>
                            <li><a href="<?PHP echo $path; ?>kafeteryalar/yildiz-teras-kafeterya">Yıldız Teras Kafeterya</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle sc-navbar-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Hizmetler<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?PHP echo $path; ?>hizmetler/gezi-yonetmeligi">Gezi Yönetmeliği</a></li>
                            <li><a href="<?PHP echo $path; ?>hizmetler/yer-ve-mekan-kiralama">Yer ve Mekan Kiralama</a></li>
                            <li><a href="<?PHP echo $path; ?>hizmetler/goruntu-alma-ve-arastirma">Görüntü Alma ve Araştırma</a></li>
                            <li><a href="<?PHP echo $path; ?>hizmetler/staj-islemleri">Staj İşlemleri</a></li>
                            <li><a href="<?PHP echo $path; ?>hizmetler/klasik-turk-sanatlari-merkezi">Klasik Türk Sanatları Merkezi</a></li>
                        </ul>
                    </li>
                    <li><a href="<?PHP echo $path; ?>ihaleler/" class="sc-navbar-toggle">Sanal Tur</a></li>
                    <li><a href="<?PHP echo $path; ?>ihaleler/" class="sc-navbar-toggle">İhale ve Mevzuat</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </nav>
    </div>
</div>
<!-- end toggle menu -->
