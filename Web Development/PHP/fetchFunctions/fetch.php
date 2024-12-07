<?php
echo "<h1>My sqli fetch function</h1>";
echo "<h2>Fetch assoc </h2>";
echo "<p>it return associative array and fetch single record from database and we can see all the records using loop.</p>";

include "connection.php";

$sql="select *from test";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);  //it return associative array
// $row=mysqli_fetch_row($result);  //it return index array
// $row=mysqli_fetch_array($result,MYSQLI_BOTH);  //it return both assocaiative and index array it take one more optional parameter  mysqli_assoc, mysqli_num, both->WHICH IS BY DEFAULT


// $row=mysqli_fetch_all($result); //it can fetch data and make 2d array it have also one paramenter same like above fetch array

// $row=mysqli_fetch_field($result); //it can fetch information of colums in database. it is mostly used in conditional programing.

echo "<pre>";
print_r($row);

echo "<br>";
echo "<h1>mysqli affected rows</h1>";
// it can use to show how many rows are affected when apply the updat,select and delete the record in a database;
$myquery="delete from test where f_name='hamid'";
$res=mysqli_query($conn,$myquery)or die("query failed");
$affect=mysqli_affected_rows($conn);
echo mysqli_error($conn);  //check the error in sql command
echo $affect;
?>