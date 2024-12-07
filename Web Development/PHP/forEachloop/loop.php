<?php
echo "<h1>For each loop in php</h1> ";
// foreach loop is used to print the array in easy way it can print the indexed and associative array easily.
$fruits = ["Apple", "Banana", "Cherry", "Date"];
foreach($fruits as $res)
{
    echo $res;
    echo "<br>";
}

echo "<h2>Associative array print using for each loop</h2>";
$employee = [
    "id" => 123,
    "name"=>"jamshaid",
    "department" => "Sales",
    "salary" => 50000
];

foreach($employee as $key=>$emp)
{
    echo $key."=>".$emp;
    echo "<br>";
}




?>