<?php

namespace App\Http\Controllers\Front;


use App\ContentPages;
use App\koleksiyonlar;
use App\Magazalar;
use App\Shop;
use App\Yayinlar;
use App\sanaltur;

use App;

use App\Events;
use App\Helpers\Utils;
use App\Galleries;
use App\Http\Controllers\Controller;
use App\Sliders;
use App\VisitTimes;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Cookie;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;



class FrontController extends Controller
{


    public function index(Request $slug){
                // $id = $request->query->get("id");
                // $id = $request->request->get("id");
                // $id = $request->input("id");

                $post_contentpages = ContentPages::query()
                    ->where("slug", $slug)
                    ->first();




        $post_etkinlik = Events::query()
            ->take(4)
            ->get();

        $post_shop = Shop::inRandomOrder()
            ->take(12)
            ->get();

        $post_slider_item = Sliders::query()
            ->take(3)
            ->get();








        $datas = [
            "post_etkinlik" => $post_etkinlik,
            "post_contentpages" => $post_contentpages,
            "post_slider_item" => $post_slider_item,
            "post_shop" => $post_shop,
            "dil" => App::getLocale()
        ];



        return view("front.index.main", $datas);

    }

    public function iletisim(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", 'iletisim')
            ->first();
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('<br>', $post_CP);



        $datas = [
            "post_contentpages" => $post_contentpages,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.iletisim.main", $datas);

    }

    public function hakkimizda(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", 'hakkimizda')
            ->first();
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('<br>', $post_CP);



        $datas = [
            "post_contentpages" => $post_contentpages,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.hakkimizda.main", $datas);

    }

    public function ziyaretbilgileri(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", 'ziyaret-bilgileri')
            ->first();


        $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);


        $post_contentpages_bilet = ContentPages::query()
            ->where("slug", 'gezibileti')
            ->first();






        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_contentpages_bilet" => $post_contentpages_bilet,
            "post_contentpages1" => $post_contentpages1,
            "dil" => App::getLocale()



        ];
        return view("front.ziyaretbilgileri.main", $datas);

    }

    public function gezirehberi(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();

        $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);






        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();

        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_contentpages1" => $post_contentpages1,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "dil" => App::getLocale()


        ];
        return view("front.gezirehberi.main", $datas);

    }

    public function saraylar(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_events_yayinlar = Yayinlar::query()
            ->where("slug", $slug)
            ->Paginate(12);



        $post_contentpages = ContentPages::query()
            ->select()
            ->where("slug", $slug)
            ->first();



        if (App::getLocale()=="tr")
            $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);
        else if (App::getLocale()=="en")
            $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_en);
        else if (App::getLocale()=="arb")
            $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);
        else if (App::getLocale()=="tr")
            $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);
        else if (App::getLocale()=="tr")
            $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);





        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();

        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_contentpages1" => $post_contentpages1,
            "post_events" => $post_events,
            "post_events_yayinlar" => $post_events_yayinlar,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "dil" => App::getLocale()


        ];
        return view("front.saraylar.main", $datas);

    }

    public function fabrikalar(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();

        $post_contentpages1 = str_replace('<br>','<br><br>',$post_contentpages->content_tr);

        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();

        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_contentpages1" => $post_contentpages1,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "dil" => App::getLocale()


        ];
        return view("front.fabrikalar.main", $datas);

    }

    public function koleksiyonlar(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();

        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<br>','<br><br>',$post__CP);



        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_koleksiyonlar = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", "koleksiyonlarslider")
            ->inRandomOrder()
            ->take(7)
            ->get();

        $post_ = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();


        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "post_koleksiyonlar" => $post_koleksiyonlar,
            "dil" => App::getLocale()

        ];
        return view("front.koleksiyonlar.main", $datas);

    }

    public function tarihisahsiyetler(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();

        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<h4>','<br><br><h4>',$post__CP);



        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->first();

        $post_koleksiyonlar = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", "tarihisahsiyetler")
            ->inRandomOrder()
            ->take(7)
            ->get();

        $post_ = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();


        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "post_koleksiyonlar" => $post_koleksiyonlar,
            "dil" => App::getLocale()

        ];
        return view("front.tarihisahsiyetler.main", $datas);

    }

    public function atolyeler(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();

        $post__CP="";
        if (isset($post_contentpages->content_tr)){
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<br>','<br><br>',$post__CP);
        }


        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();


        if ($post_galleries->count() < 1 ){
            $post_galleries->url="empty.jpg";
        }


        $post_koleksiyonlar = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", "koleksiyonlarslider")
            ->inRandomOrder()
            ->take(7)
            ->get();

        $post_ = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();


        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "post_koleksiyonlar" => $post_koleksiyonlar,
            "dil" => App::getLocale()

        ];
        return view("front.atolyeler.main", $datas);

    }

    public function yayinlar(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");








            if ($slug === "brosurler" ){
                $post_events = Yayinlar::query()
                ->where("cat", "1")
                ->Paginate(12);
                $title="Broşürler";
                $slugclass="brosurler";
            }



            if ($slug === "dergiler" ){
                $post_events = Yayinlar::query()
                    ->where("cat", "2")
                    ->Paginate(8);
                $title="Dergiler";
                $slugclass="dergiler";
            }



            if ($slug === "kitaplar" ){
                $post_events = Yayinlar::query()
                    ->where("cat", "3")
                    ->Paginate(8);
                $title="Kitaplar";
                $slugclass="kitaplar";
            }


            if ($slug === "bultenler" ){
                $post_events = Yayinlar::query()
                    ->where("cat", "4")
                    ->Paginate(8);
                $title="Bültenler";
                $slugclass="bultenler";
            }






            if ($slug === "kitabevi" ){
            $post_events = Yayinlar::query()
                ->where("cat", "4")
                ->get();
            }


            $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();


        if ($post_galleries->count() < 1 ){
            $post_galleries->url="empty.jpg";
        }


        $post_koleksiyonlar = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", "koleksiyonlarslider")
            ->inRandomOrder()
            ->take(7)
            ->get();

        $post_ = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_yayinlar = Yayinlar::query()
            ->where("slug", $slug)
            ->get();


        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post_koleksiyonlar" => $post_koleksiyonlar,
            "title" => $title,
            "slugclass" => $slugclass,
            "dil" => App::getLocale()


        ];
        return view("front.yayinlar.main", $datas);


        //return view('user.index', ['users' => $users]);

    }

    public function kitap(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = Yayinlar::query()
            ->where("id", $slug)
            ->first();

        $post_CP= $post_contentpages->description_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<br>','<br><br>',$post_CP);




        $datas = [
            "post_contentpages" => $post_contentpages,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.kitap.main", $datas);

    }

    public function kitabevi(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", "dolmabahce-sarayi-kitabevi")
            ->first();

        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<h4>','<h4>',$post__CP);





        $post_galleries = Galleries::query()
            ->where("slug", "dolmabahce-sarayi-kitabevi")
            ->first();



        $post_sliders = Galleries::query()
            ->where("slug", "dolmabahce-sarayi-kitabevi")
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_galleries" => $post_galleries,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.kitabevi.main", $datas);

    }

    public function kafeteryalar(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();


        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();

        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "dil" => App::getLocale()


        ];
        return view("front.kafeteryalar.main", $datas);

    }

    public function hizmetler(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", $slug)
            ->first();
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('','',$post__CP);



        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->take(12)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();

        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            //s->select(["title_{$this->lang} AS title"])
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        //$post_contentpages->title = $post_contentpages->{"title_{$this->lang}"};

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.hizmetler.main", $datas);

    }

    public function ihale(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("id", $slug)
            ->first();




        $datas = [
            "post_contentpages" => $post_contentpages,
            "dil" => App::getLocale()



        ];
        return view("front.ihale.main", $datas);

    }

    public function ihaleler(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", "ihale")
            ->Paginate(12);




        $datas = [
            "post_contentpages" => $post_contentpages,
            "dil" => App::getLocale()



        ];
        return view("front.ihaleler.main", $datas);

    }

    public function etkinlik(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = Events::query()
            ->where("id", $slug)
            ->first();

        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('fafewfeafgeraggefeefaef3434', $post_CP);
        $post__CP = str_replace('<h4>','<br><br><h4>',$post__CP);



        $post_events = Events::query()
            ->where("slug", $slug)
            ->take(4)
            ->get();

        $post_galleries = Galleries::query()
            ->where("slug", $slug)
            ->first();

        $post_koleksiyonlar = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();

        $post_galleries_slider = Galleries::query()
            ->where("slug", "tarihisahsiyetler")
            ->inRandomOrder()
            ->take(7)
            ->get();

        $post_ = koleksiyonlar::query()
            ->where("slug", $slug)
            ->get();


        $post_visittimes = VisitTimes::query()
            ->where("slug", $slug)
            ->first();

        $post_sliders = Sliders::query()
            ->where("slug", $slug)
            ->take(3)
            ->get();



        //dd($post_events);

        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_events" => $post_events,
            "post_galleries" => $post_galleries,
            "post_galleries_slider" => $post_galleries_slider,
            "post_visittimes" => $post_visittimes,
            "post_sliders" => $post_sliders,
            "post__CP" => $post__CP,
            "post_koleksiyonlar" => $post_koleksiyonlar,
            "dil" => App::getLocale()

        ];
        return view("front.etkinlik.main", $datas);

    }

    public function magazalarimiz(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", "magazalar")
            ->first();





        $post_magazalar = Magazalar::query()
            ->get();



        $datas = [
            "post_contentpages" => $post_contentpages,
            "post_magazalar" => $post_magazalar,
            "dil" => App::getLocale()



        ];
        return view("front.magazalar.main", $datas);

    }

    public function magaza(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_shop = Shop::query()
            ->where("slug", $slug)
            ->Paginate(20);


        $slug_txt=$slug;



        $datas = [
            "post_shop" => $post_shop,
            "slug_txt" => $slug_txt,
            "dil" => App::getLocale()



        ];
        return view("front.magaza.main", $datas);

    }

    public function bilet(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", 'hakkimizda')
            ->first();
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('<br>', $post_CP);



        $datas = [
            "post_contentpages" => $post_contentpages,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.bilet.main", $datas);

    }

    public function rezervasyon(Request $request){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_contentpages = ContentPages::query()
            ->where("slug", 'hakkimizda')
            ->first();
        $post_CP= $post_contentpages->content_tr;
        $post__CP=Explode('<br>', $post_CP);



        $datas = [
            "post_contentpages" => $post_contentpages,
            "post__CP" => $post__CP,
            "dil" => App::getLocale()


        ];
        return view("front.rezervasyon.main", $datas);

    }

    public function sanaltur(Request $request, $slug){
        // $id = $request->query->get("id");
        // $id = $request->request->get("id");
        // $id = $request->input("id");

        $post_sanaltur = sanaltur::query()
            ->where("slug", $slug)
            ->get();


        $slug_txt=$slug;



        $datas = [
            "post_sanaltur" => $post_sanaltur,
            "slug_txt" => $slug_txt,
            "dil" => App::getLocale()



        ];
        return view("front.sanaltur.main", $datas);

    }





}