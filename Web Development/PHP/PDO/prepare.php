<?php
echo "<h1>PDO with prepare statment</h1>";
include "connection.php";
$username="Hassan";
$cityis="Multan";


$sql=$conn->prepare("select *from student where name=? and city=?");
$sql->bindParam(1,$username,PDO::PARAM_STR);
$sql->bindParam(2,$cityis,PDO::PARAM_INT);
// FIRST PARAMETE INDEICATE THE placeholder which and second indicate the value and third dtatype
// bind pram is similar to bind value
// if we give the dtatype in bind param then it is more scure technique
// if we want to bind value in execute function then the syntax is
// $sql->execte(arrat($username,$city));

// we can give name to placeholder by :city :id
// $sql->execute(arrat(':city'=>$city,':id'=>$id));
$sql->execute();
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);


// there are 

?>