<?php
include "connection.php";

// $sql=$conn->prepare("SELECT *FROM test");
// $sql->execute();
// $result=$sql->get_result();
// echo "<pre>";
// print_r($result);
// fetch function using prepare statment


// while($row=$result->fetch_all(MYSQLI_ASSOC))
// {
//     print_r($row);
//     echo $row[0]['city'];
//     // echo "The name is ".$row['name']."<br>";
// }


// how to use prepare statment in php
$id=1;
$name="jamshaid";
$sql=$conn->prepare("SELECT *FROM test WHERE id=? AND name=?");
$sql->bind_param('is',$id,$name);
$sql->execute();
$result=$sql->get_result();
// print_r($result);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
    }
}else{
    echo "no record found";
}
$conn->close();






?>