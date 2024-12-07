<?php
include "connection.php";

header('Content-Type:application/json');
header('Acess-Control-Allow-Origin: *');
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['id'];
$sql="select *from test where id= {$student_id}";
$run=mysqli_query($conn,$sql)or die('query failed');
if(mysqli_num_rows($run)>0)
{
    $output=mysqli_fetch_all($run,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array('message'=>'no record found', 'status'=>false));
}

?>