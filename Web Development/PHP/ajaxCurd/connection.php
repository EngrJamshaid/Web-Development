<?php
$server="localhost";
$username="root";
$password="";
$dbname="student"; //test table name

$conn=mysqli_connect($server,$username,$password,$dbname)or die("connection failed");
// echo "connection passed";
?>