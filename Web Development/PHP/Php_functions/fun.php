<?php
echo "<h1>Function in php</h1>";
echo "<p>Functions are reusable piece of code </p>";
// simple function
echo "<h1 style='background-color:blue; color:white;'>simple funciton</h1>";
function hello()  //function defination
{
    echo "Hello function";
}
hello();  //calling the function



echo "<h1 style='background-color:blue; color:white;'>parametrized funciton</h1>";

function name($fname,$lname)  //paass the paramenters
{
    echo "My name is $fname $lname";
}

name('jamshiad','dasti');  //pass the arguments


echo "<h1 style='background-color:blue; color:white;'>Return a value funciton</h1>";

function jmd()
{
    return 'my name is jamshaid';
}

echo jmd();
function sum($a,$b)
{
    $c=$a+$b;
    return $c;
    
}
echo "<br>";
echo sum(4,6);
echo "<br>";
echo sum(4,63);

echo "<h1 style='background-color:blue; color:white;'>Variable funciton</h1>";
$sayhello= function()
{
    echo "my name is jamshaid";
};
echo $sayhello();

function myname($a)
{
    return $a;
}
echo "<br>";
$d=myname('jamshaid Dasti');
echo $d;


echo "<h1 style='background-color:blue; color:white;'>fuction argument pass by refrence funciton</h1>";
// pass by refrence
function num(&$mynum)
{
   $mynum+=5;
}
$number=10;
num($number);
echo "$number";
echo "<h1 style='background-color:blue; color:white;'>
Resursive Function</h1>";
// resursive function
function factorial($n)
{
    if($n==0)
    {
        return 1;
    }else{
        return ($n*factorial($n-1));

    }
}
echo factorial(4);


?>