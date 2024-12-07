<?php
echo '<h1 style="color: #ffffff; background-color: #0000ff;"> simple Array in Php</h1>';

// array can store the multiple type of data
$color=['red','blue',235,67,true];
// echo $color[0];
echo "<ul type='square'>";
for($i=0;$i<=4;$i++)
{
    echo "<li> $color[$i] </li>";
//   $color[$i];
//     echo "</li>";
//     // echo "<br>";
}

echo "</ul>";

// another way to print the array in php
echo "<pre>";
print_r($color);


echo '<h1 style="color: #ffffff; background-color: #0000ff;">Associative Array in Php</h1>';

$bioData=[
    "fname"=>'jamshaid',
   "lname"=>'Dasti',
    "city"=>'MZD',
    'age'=>21,
    4=>45
];
print_r($bioData);



?>