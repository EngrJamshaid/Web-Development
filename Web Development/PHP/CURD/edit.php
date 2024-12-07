<?php
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<h1>Update data</h1> 
<?php 
$updateid=$_GET['id'];
$sql="SELECT * FROM curd_table WHERE id=$updateid";
$result=mysqli_query($conn,$sql)or die("query failed");

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{


?>
<form action="update.php" method="post">

 <label for="01">
     Name:
 </label>
 <input type="text" name="myname" value="<?php echo $row['name'];?>">
 <input type="hidden" name="id" id="01" value="<?php echo $row['id'];?>">
 <br><br>
 <label for="02" >
     Email:
 </label>
<input type="email" name="mymail" id="02"  value="<?php echo $row['email'];?>" >
 
 <br><br>
 <label for="03">
     Age:
 </label>

 <input type="number" name="myage" id="03"  value="<?php echo $row['age'];?>" >
<br><br>
 <input type="submit" value="Update" name="send">
</form> 

<?php }}?>
</body>
</html>