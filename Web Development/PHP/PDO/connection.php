<?php
try {
    $password="";
    $username="root";
    $dbname= "mysql:host=localhost;dbname=personaldata";
    $conn=new PDO($dbname,$username,$password);
    if($conn)
    {
        // echo "Connection sucessful";
    }else{
        echo "connection failed";
    }
} catch (PDOException $error) {
    //throw $th;

    echo $error->getMessage();
     
}







?>