<?php
echo "super global variable ->file in php";
echo "<p>This superglobal in PHP is used to handle file uploads via HTTP POST. It contains an associative array of items uploaded to the server.</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">

   choose file: <input type="file" name="myfile" id="">

   <input type="submit" value="send" name="sendfile">
    </form>
</body>
</html>

<?php
echo "<pre>";
// print_r($_FILES);

if(isset($_FILES['myfile']))
{
    $filename=$_FILES['myfile']['name'];
    $filepath=$_FILES['myfile']['tmp_name'];
    $type=$_FILES['myfile']['type'];

    move_uploaded_file($filepath,"images/".$filename);

}


?>