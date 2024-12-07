<?php
echo "<h1>MultiDimensional Array in php</h1>";
$employees = [
    ["id" => 101, "name" => "John Doe", "department" => "Sales"],
    ["id" => 102, "name" => "Jane Doe", "department" => "Marketing"],
    ["id" => 103, "name" => "Bob Smith", "department" => "IT"]
];
$numbers = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];
echo $numbers[1][2];  //60
echo "<h3>2d index array</h3>";
foreach($numbers as $frs)
{
    foreach($frs as $res)
    {
        echo $res." ";
       
    } echo "<br>";
}

echo "<h3>2d associative array</h3>";
foreach($employees as $key=>$frst)
{
    foreach($frst as $key=>$jmd)
    {
        echo $jmd." ";
    }
    echo "<br>";
}


// for each loop with list tutorial
echo "<h2>For each loop with list tutorial</h2>";
foreach($numbers as list($a,$b,$c))
{
    echo $a." ".$b." ".$c."<br>";
}
echo "<h2>For each loop with list tutorial Associative array</h2>";
foreach($employees as list("id"=>$id,"name"=>$name,"department"=>$department))
{
    echo $id." ".$name." ".$department."<br>";
}

?>