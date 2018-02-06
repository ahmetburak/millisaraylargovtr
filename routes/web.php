<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
/*
App::setLocale(Utils::getLang());
*/



Route::get('/','Front\FrontController@index')->name("index");
Route::get('saraylar/{slug}','Front\FrontController@saraylar')->name("saraylar");
Route::get('muzeler/{slug}','Front\FrontController@saraylar')->name("muzeler");
Route::get('hakkimizda/','Front\FrontController@hakkimizda')->name("hakkimizda");
Route::get('ziyaret-bilgileri/','Front\FrontController@ziyaretbilgileri')->name("ziyaretbilgileri");
Route::get('gezi-rehberi/{slug}','Front\FrontController@gezirehberi')->name("gezirehberi");
Route::get('iletisim/','Front\FrontController@iletisim')->name("iletisim");
Route::get('koleksiyonlar/{slug}','Front\FrontController@koleksiyonlar')->name("koleksiyonlar");
Route::get('tarihi-sahsiyetler/{slug}','Front\FrontController@tarihisahsiyetler')->name("tarihisahsiyetler");
Route::get('fabrikalar/{slug}','Front\FrontController@fabrikalar')->name("fabrikalar");
Route::get('atolyeler/{slug}','Front\FrontController@atolyeler')->name("atolyeler");
Route::get('yayinlar/{slug}','Front\FrontController@yayinlar')->name("yayinlar");
Route::get('yayinlar/kitaplar/{slug}','Front\FrontController@kitap')->name("kitap");
Route::get('yayinlar/kitabevi/dolmabahce-sarayi-kitabevi','Front\FrontController@kitabevi')->name("kitabevi");
Route::get('kafeteryalar/{slug}','Front\FrontController@kafeteryalar')->name("kafeteryalar");
Route::get('hizmetler/{slug}','Front\FrontController@hizmetler')->name("hizmetler");
Route::get('ihale/{slug}','Front\FrontController@ihale')->name("ihale");
Route::get('ihaleler/','Front\FrontController@ihaleler')->name("ihaleler");
Route::get('etkinlikler/{slug}','Front\FrontController@etkinlik')->name("etkinlik");
Route::get('magazalarimiz/','Front\FrontController@magazalarimiz')->name("magazalarimiz");
Route::get('magaza/{slug}','Front\FrontController@magaza')->name("magaza");






Route::get('/emre/{name}','Front\FrontController@test')->name("isimler");
