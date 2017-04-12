<?php
/**
 * Created by PhpStorm.
 * User: Misaya
 * Date: 2017/4/5
 * Time: 19:37
 */

include_once 'Translate.php';

$word = $_POST['word'];
echo json_encode(Translate::getBasic($word));