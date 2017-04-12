<?php
/**
 * Created by PhpStorm.
 * User: Misaya
 * Date: 2017/4/6
 * Time: 18:46
 */

include_once 'connSQL.php';

$conn = connSQL::getConn();

$unit = $_POST['unit'];

$sql = "SELECT * FROM words WHERE unit = '$unit'";

$result = mysqli_query($conn,$sql);
$arr = array();
while($row = mysqli_fetch_array($result)){
    $arr[] = $row['word'];
}
shuffle($arr);              //将单词表打乱
echo json_encode($arr);