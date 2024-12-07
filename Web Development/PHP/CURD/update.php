<?php
include "connection.php";


if(isset($_POST['send']))
{
$editid=$_POST['id'];
// echo $editid;
// die();
$nameis=$_POST['myname'];
$emailis=$_POST['mymail'];
$ageis=$_POST['myage'];
    $sql="UPDATE curd_table SET name='{$nameis}', email='{$emailis}', age='{$ageis}' WHERE id={$editid}";

    $result=mysqli_query($conn,$sql)or die("query failed");
    header("location:index.php");  //redirect the index.php
    mysqli_close($conn);
}
?>