<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

/**
* Auth: quyet@webviet.vn
* Date: 26/05/2018
* Des : Helper process data input
**/
class InputHelper
{

    /**
     * Author      : quyet@webviet.vn
     * Date        : 26/05/2018
     * Description : Xử lý chuỗi trước khi lưu vào DB
     *
     * Params
     *      string $string
     *      string $objectType
     *      string $default
     * Return
     *      string
     */
    public static function safeInput($arrData)
    {
        $arrData = trim($arrData);
        $arr_regex = array(
            '#<script(.*?)>#is',
            '#<style(.*?)>#is',
            '#<\/script(.*?)>#is',
            '#<\/style(.*?)>#is',
            '#<link(.*?)>#is',
            '#<\/link(.*?)>#is');
        $arr_replace = 	array('', '', '', '');

        if (empty($arrData)) {
            return '';
        }

        if (!is_array($arrData) && !empty($arrData)){
            $arrData = preg_replace($arr_regex,
                $arr_replace,
                $arrData);
        }elseif (is_array($arrData) && !empty($arrData)){	//case array
            foreach ($arrData as $key => $value){
                $value = preg_replace($arr_regex,
                    $arr_replace,
                    $value);
                $arrData[$key] = $value;
            }
        }

        return $arrData;
    }


    /**
     * Author      : quyet@webviet.vn
     * Date        : 26/05/2018
     * Description : truncate string
     *
     * Params
     *      string  $string
     *      int     $len
     *      boolen  $dots
     * Return
     *      string
     */
    public static function truncate($string, $len = 100, $dots = true) {
        if (empty($string)) {
            return $string;
        }

        $retVal     = $string;
        $encoding   = mb_detect_encoding($string, "auto");
        $strlen     = mb_strlen($string, $encoding);
        $delta      = $strlen - $len;

        if ($delta > 0) {
            $shortText  = "";
            $shortText  = mb_substr($string, 0, $len, $encoding);
            $breakPos   = $len;
            $breakPatten = array(" ", ",", ".", ":", "_", "-", "+");

            foreach ($breakPatten as $id => $breakKey) {
                if (mb_strrpos($shortText, $breakKey, $encoding)) {
                    if ($id == "0") {
                        $breakPos = mb_strrpos($shortText, $breakKey, $encoding);
                    } else {
                        $breakPos = ($breakPos > mb_strrpos($shortText, $breakKey, $encoding)) ? $breakPos : mb_strrpos($shortText, $breakKey, $encoding);
                    }
                }
            }

            $shortText = mb_substr($shortText, 0, $breakPos, $encoding);

            if ($dots)
                $shortText .= "...";

            $retVal = $shortText;
        }

        return $retVal;
    }


    public static function trimInput($input) {
        foreach ($input as $key => $value) {
            if (!is_array($value)) {
                $input[$key] = trim($value);
            } else {
                foreach ($value as $k => $v) {
                    $input[$key][$k] = trim($v);
                }
            }
        }

        return $input;
    }

}
