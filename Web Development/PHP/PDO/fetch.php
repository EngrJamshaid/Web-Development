<?php
echo "<h1>PDO advanced fetch styles</h1>";
include "connection.php";

// there are 5 fetch styles in pdo
// (PDO::FETCH_COLUMN);
// (PDO::FETCH_UNIQUE);
// (PDO::FETCH_GROUP);
// (PDO::FETCH_KEYPAIR);
// (PDO::FETCH_CLASS);

$sql=$conn->prepare("select name, city from student");

$sql->execute();
// (PDO::FETCH_COLUMN);  it can used the extract the specific colum easily 
// $result=$sql->fetchAll(PDO::FETCH_COLUMN,1);

// (PDO::FETCH_UNIQUE);  it can used for unique values
// $result=$sql->fetchAll(PDO::FETCH_UNIQUE);

// (PDO::FETCH_GROUP);  it can usedfor group the data when conditon apply in it
// $sql = $conn->prepare("SELECT id, name, city FROM student");
// $result=$sql->fetchAll(PDO::FETCH_GROUP);

// (PDO::FETCH_KEYPAIR);  it is used to make a key and value in sql
// $sql=$conn->prepare("select name, city from student");  then use it 
// $result=$sql->fetchAll(PDO::FETCH_KEY_PAIR);

// (PDO::FETCH_CLASS); it is similar to fetch object
// $result=$sql->fetchAll(PDO::FETCH_CLASS);

echo "<pre>";
print_r($result);


// echo$sql->reocount(); it is used to check how many numbers or records in database of table

// echo exec() it is used to check how many record are afected by update insert and delte  and select is not work with it.

// echo $conn->lastInsertid() is used to check the last insert id number easily get

?>