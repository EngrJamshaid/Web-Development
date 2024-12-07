<?php
$username="root";
$server="localhost";
$password='';
$dbname='student';

$conn=mysqli_connect($server,$username,$password,$dbname) or die("conneciton failed".mysqli_connect_error());
echo "connection pased";

?>