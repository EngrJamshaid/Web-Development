<?php
echo "===========Operators=================<br>";
echo "===========Aritmmetic Operators=================";
// the arithmetic operators are +,-,*,%,and /
$firstNumber=12;
$secondNumber=3;
echo "<br>";
echo "Sum is ".$firstNumber+$secondNumber."<br>";
echo "Subtraction is ".$firstNumber-$secondNumber."<br>";
echo "Multiply is ".$firstNumber*$secondNumber."<br>";
echo "divide is ".$firstNumber/$secondNumber."<br>";
echo "Modulas is ".$firstNumber%$secondNumber."<br>";


 echo "<br>===========Assignment Operators=================<br>";
//  assignment operators are =,+=,-=,*=,%=
$a=10;
$b=7;
$c=$a+$b;
echo $c;
echo "<br>";  
echo $a+=$b;
echo "<br>";
echo $a-=$b;
echo "<br>";
echo $a*=$b;

echo "<br>===========comprision Operators=================<br>";
//  comprision operators are <,>,<=,>=,==,===,!=,<>
// it can reurn boolen value 1 for true and flase mean 0

$x=10;
$y=12;
echo $x." is less than ".$y.$x<$y."<br>";
echo $x." is grater than ".$y.$x>$y."<br>";
echo $x." is lessthan or equal to ".$y.$x<=$y."<br>";
echo $x." is less gratethen or equla to  ".$y.$x>=$y."<br>";
echo $x." is equal to  ".$y.$x==$y."<br>";
echo $x." is check datatype or value to  ".$y.$x===$y."<br>";
echo $x." is not equal to  ".$y.$x!=$y."<br>";


echo "<br>===========logical Operators=================<br>";
//  logical operators are 
// it can reurn boolen value 1 for true and flase mean 0
$num1=45;
$num2=56;
if(($num1<23) && ($num1>45))
{
    echo "condition satisfy";
}else{
    echo "not satisfy";
}
echo "<br>";
if(($num1<=45) || ($num1>45))
{
    echo "condition satisfy";
}else{
    echo "not satisfy";
}
echo "<br>";
if (!($num2>=36))
{
    echo "condition satisfy";
}else{
    echo "not satisfy";
}
echo "<br>";
if (($num1<10) xor ($num1>90))
{
    echo "condition satisfy";
}else{
    echo "not satisfy";
}


echo "<br>===========string Operators=================<br>";
$jmd=200;
echo $jmd."jamshaid dasti";

echo "<br>";
$he="Hello ";
$he .="world";
$he .=" i love php programing";
echo $he;

?>