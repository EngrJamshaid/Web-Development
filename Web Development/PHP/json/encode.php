<?php
// include "connection.php";
// header('Content-Type: application/json'); // Ensure the content type is JSON

// $sql="select *from test";
// $result=mysqli_query($conn,$sql)or die("query failed");
// $output=mysqli_fetch_all($result);
// // print_r($output);

// echo json_encode($output);

$string_json="myjson.json";
$jsondata=file_get_contents($string_json);
$arr=json_decode($jsondata,true);
echo "<pre>";
print_r($arr);



?>