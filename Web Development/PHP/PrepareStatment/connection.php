<?php
$username="root";
$server="localhost";
$password="";
$dbname="user";

$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$con->connect_error);
}else{
    // echo "Connection sucessful";
}

?>