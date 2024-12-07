<?php
include "connection.php";
// echo "delete ";

$delid=$_GET['id'];
$sql="DELETE FROM curd_table WHERE id={$delid}";
$result=mysqli_query($conn,$sql)or die("query failed");
header("location:index.php");
mysqli_close($conn);

?>
