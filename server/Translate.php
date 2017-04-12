<?php

/**
 * Created by PhpStorm.
 * User: Misaya
 * Date: 2017/4/5
 * Time: 18:46
 */
class Translate
{
    const keyfrom = 'TYNsWord';
    const key = '92609876';
    const type = 'data';
    const doctype = 'json';
    const version = '1.1';

    static function getBasic($q)
    {
        $url = "http://fanyi.youdao.com/openapi.do?keyfrom=".self::keyfrom."&key=".self::key."&type=".self::type."&doctype=".self::doctype."&version=".self::version."&q=".$q;
        $json = json_decode(file_get_contents($url));
        return $json->{'basic'};
    }
}