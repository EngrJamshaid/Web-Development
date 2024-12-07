<?php
echo "<h1>min max function</h1>";

echo "min value is".min(22,5,8,4,3)."<br>";
echo "min value is".max(22,5,8,4,3)."<br>";


echo "<h1>ceil floor absolute function</h1>";
echo "The ceil value of 4.5 is".ceil(4.5)."<br>";
echo "The floor value of 4.5 is".floor(4.5)."<br>";
echo "The abs value of -4.5 is".abs(-4.5)."<br>";

echo "<h1>sqrt powet indiv function</h1>";
echo "The sqrt value of 49 is".sqrt(49)."<br>";
echo "The power value of 2,3 is".pow(2,3)."<br>";
echo "The intdiv value of 2,3 is".intdiv(2,3)."<br>";


echo "<h1>Rand function</h1>";
echo rand(1,10)."<br>";  //give randowm value
echo mt_rand(2,6);    //also give randowm numbers


?>