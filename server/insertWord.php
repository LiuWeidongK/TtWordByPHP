<?php
/**
 * Created by PhpStorm.
 * User: Misaya
 * Date: 2017/4/5
 * Time: 18:56
 */

include_once 'connSQL.php';

$conn = connSQL::getConn();

$unit = $_POST['unit'];
$word = $_POST['word'];

$sql = "INSERT INTO words VALUES ('$unit','$word')";
if(mysqli_query($conn,$sql))
    echo "true";
else echo "false";

