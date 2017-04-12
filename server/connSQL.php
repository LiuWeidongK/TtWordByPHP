<?php

/**
 * Created by PhpStorm.
 * User: Misaya
 * Date: 2017/4/5
 * Time: 18:57
 */
class connSQL
{
    static function getConn()
    {
        //$conn = new mysqli("localhost" , "root" , "0000" , "dictionary");
        $conn = new mysqli("bdm264098108.my3w.com" , "bdm264098108" , "liu123456" , "bdm264098108_db");
        return $conn;
    }
}