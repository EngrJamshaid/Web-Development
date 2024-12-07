<?php

// variables are used to store and hold the data 

// in php variable alays start with $ symbol
$age=12;
echo $age;

echo "<br>";
$mydata="<h1>My name is jamshaid dasti i live in muzaffrabad i am software engneer</h1>";
echo $mydata;
echo "<br>";
echo "_____________________________________<br>";
echo "We can check the datatype by using var_dum function in php".var_dump($age);
echo "<br>";  //for line break it is br is html tag.

// Constant in php
// we can change the value of a variable if use constant we cannot change the value
// it can take the three parameters constant name , value and caseSesensitive.
// it is a global variable
// if we defeine we cannot redeclare of . we cannot use the $ when using constant
// it is casesensitive if value is true then its case sensitivity die
define("num",500);  
echo num;

?>