<?php
/**
 * Speaker.php
 * Just a demo for composer
 *
 * @author  wangchaojie <wangchaojie@huoban.com>
 * @date    2018-09-06 14:36:07
 * @version $Id$
 */
namespace wangcj\helloworld;

class helloworld {


    private static $current_course = 'http://www.apilayer.net/api/live?access_key=68e1b343cdb9f93c52d56c2476905b33';
    public static $curr_array = ['UAH', 'EUR', 'CNY', 'PLN', 'RUB'];

    public static function td($to, $from = 'USD'){
        $currency = $from . $to;
        $date = file_get_contents(self::$current_course);
        $courses = json_decode($date, true);
        return $courses['quotes'][$currency];
    }


   public static function redirect_to($location = NULL) {
        if($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

}
