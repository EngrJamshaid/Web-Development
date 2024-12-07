<?php

include "database.php";

$object1=new CURD();

// insert work start here
// $object1->insert('test',['name'=>"Noman",'age'=>15,'city'=>'bimber']);
// echo "insert id:";
// print_r($object1->getResult());


// update work start here
// $object1->update('test',['name'=>"Bilal Ahmad",'age'=>25,'city'=>'bimber'],'id="3"');
// echo "update id:";
// print_r($object1->getResult());

// Delete work start here
// $object1->delete('test','id="4"');
// echo "delete result is:";
// print_r($object1->getResult());


// // select work start here
// ECHO "<PRE>";
// $object1->read("SELECT *FROM test");

// echo "Read result is:";
// print_r($object1->getResult());
// select 2nd way work start here
ECHO "<PRE>";
$object1->select('test','*',null,null,'name',2);
// tablename,*,join,where,orderby,and limit

echo "select result is:";
print_r($object1->getResult());
echo "pagination <br>";
ECHO "<PRE>";
$object1->pagination('test',null,null,2);
// tablename,*,join,where,orderby,and limit

// echo "pagination result is:";
// print_r($object1->getResult());
?>