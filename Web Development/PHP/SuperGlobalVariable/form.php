<?php
echo "form";
echo "<br>";
echo "<br>";
echo "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="index.php" method="get">
        <!-- The action attribute in an HTML <form> element specifies the URL or endpoint where the form data will be sent after it is submitted. -->

        <!-- The method attribute is  The method attribute in an HTML <form> element specifies how the form data will be sent to the server. -->


        <!-- by default get but it shown the send data in url -->
         <!-- post is used to send data on server but data is not shown in url and it is scure for password -->

        Name:<input type="text" name="myname" id=""><br><br>
        age:<input type="number" name="mynum" id=""><br><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>