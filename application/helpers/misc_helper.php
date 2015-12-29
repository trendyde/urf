<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('dd'))
{
    function dd($str=null)
    {
        echo '<pre>';
        var_dump($str);
        echo '</pre>';
        die();
    }
}
if ( ! function_exists('str_limit'))
{
    function str_limit($value, $limit = 100, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
    }
}
if (!function_exists('active_link')){
    function active_link($controller) {
        $CI =& get_instance();
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }
}
function randomBytes($length = 16)
{
    if (PHP_MAJOR_VERSION >= 7) {
        $bytes = random_bytes($length);
    } elseif (function_exists('openssl_random_pseudo_bytes')) {
        $bytes = openssl_random_pseudo_bytes($length, $strong);
        if ($bytes === false || $strong === false) {
            throw new RuntimeException('Unable to generate random string.');
        }
    } else {
        throw new RuntimeException('OpenSSL extension is required for PHP 5 users.');
    }
    return $bytes;
}
if ( ! function_exists('str_random'))
{
    function str_random($length = 16)
    {
        $string = '';
        while (($len = strlen($string)) < $length) {
            $size = $length - $len;
            $bytes = randomBytes($size);
            $string .= substr(str_replace(array('/', '+', '='), '', base64_encode($bytes)), 0, $size);
        }
        return $string;
    }
}

/*
 * Output sanitizing
 */
if ( ! function_exists('e'))
{
    function e($str)
    {
        //TODO: str sanitizing
        return $str;
    }
}
