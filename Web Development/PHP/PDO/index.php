<?php
echo "<h1>PDO-> Php data object</h1>";
// pdo support the different databases and it is more scure and faster than object oriented and procedural programing in php

// there are three steps to connect pdo with database

// make connetion,run sql query,and close connection

include "connection.php";
$result=$conn->query("select *from student");
// while($row=$result->fetch(PDO::FETCH_OBJ))
// {
//     // echo "<pre>";
//     // print_r($row); 
//     // fetch style by index array
//     // echo "id is {$row[0]} name is {$row[1]} and its city is {$row[3]} <br>";


//     // fetch style by object
//     // echo "id is {$row->id} name is {$row->name} and its city is {$row->city} <br>";  
// }

$ok=$result->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($ok);
// echo $ok[1]['name'];
foreach($ok as $row)
{
    echo "city:".$row['city']."<br>";
}




?>