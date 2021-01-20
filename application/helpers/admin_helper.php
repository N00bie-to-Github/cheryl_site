<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('uniqueCommaList')) {

    function uniqueCommaList($string) {
        $keywords = $s2 = preg_replace('/\s+/', ', ', preg_replace('/,/', ' ', $string));
        $unique_keywords_array = array_unique(explode(',', $keywords));
        $unique_keywords = join(',', $unique_keywords_array);
        
        return $unique_keywords;
    }

}