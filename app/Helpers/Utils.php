<?php
namespace App\Helpers;

use \Illuminate\Support\Facades\Cookie;

class Utils
{
    /** @var string static $lang **/
    private static $lang = null;

    /**
     * Get Language Abravation From Cookie
     *
     * @return mixed|string
     */
    public static function getLang()
    {
        if(self::$lang !== null)
            return self::$lang;
        $lang = env('LANGUAGE');
        $langCookie = Cookie::get('lang');
        $langCookie = strlen($langCookie) > 2 ? \Crypt::decrypt($langCookie) : $langCookie;
        if($langCookie)
        {
            //Burada cookieden gelen veri gerçek bir dil mi diye bakman lazım
            self::$lang = $language ? $langCookie : env('LANGUAGE');
            return $langCookie;
        }
        self::SetLang($lang);
        return $lang;
    }


    /**
     * Set Cookie Language Code
     *
     * @param $lang
     */
    public static function setLang($lang)
    {
        Cookie::queue('lang', $lang, time() + (10 * 365 * 24 * 60 * 60));
        self::$lang = $lang;
    }
}
