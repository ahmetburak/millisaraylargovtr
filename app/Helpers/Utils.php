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
