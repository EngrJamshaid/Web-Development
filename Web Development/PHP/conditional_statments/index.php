<?php
echo "<h1>Conditional Statments in php</h1>";
echo "<p>There are different types of conditonal statment that are use in php if,if-else,switch and ternary operator similar to if else</p>";



// if statment
$num=34;
if(true)
{
    echo "if condition run and statment execute<br>";
}
// if-else statment

if($num==39)
{
    echo "if condition run and statment execute<br>";
}else{
    echo "if condition is not run because number is not 34";
}
echo "<br>";
// switch statment
$day=1;
switch ($day) {
    case 1:
     echo "Monday";
        break;
    
    case 2:
     echo "Tuesday";
       break;
    
    default:
       echo "invalid";
        break;
}



// ternaary operator
$age=18;
echo "<br>";
echo ($age<20)?"You are child":"You are not child";
?>