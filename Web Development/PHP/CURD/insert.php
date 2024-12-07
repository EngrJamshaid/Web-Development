<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   <h1>Insert data</h1> 

   <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <label for="01">
        Name:
    </label>

    <input type="text" name="myname" id="01">
    <br><br>
    <label for="02">
        Email:
    </label>
<input type="email" name="mymail" id="02">
    
    <br><br>
    <label for="03">
        Age:
    </label>

    <input type="number" name="myage" id="03">
<br><br>
    <input type="submit" value="Insert" name="send">
   </form>
</body>
</html>

<?php
// dubging
// echo "<pre>";
// print_r($_POST);
// die();


if(isset($_POST['send']))
{
$nameis=$_POST['myname'];
$emailis=$_POST['mymail'];
$ageis=$_POST['myage'];
    $sql="INSERT INTO curd_table(name,email,age) VALUES('$nameis','$emailis','$ageis')";
    $result=mysqli_query($conn,$sql)or die("query failed");
    header("location:index.php");  //redirect the index.php
    mysqli_close($conn);
}


?>