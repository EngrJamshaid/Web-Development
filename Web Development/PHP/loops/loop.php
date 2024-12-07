<?php
echo "<h1 style='color:red';>Loops in php</h1>";
echo "<p style='color:blue';>There are three types of loop avilable in php while loop, for loop and do while loop.</p>";
echo "<h1 style='color:red;'>While loop in php</h1>";
// loops are used to iterate the value in php.
$a=1;
// while loop
while($a<=10)
{
    echo $a."<br>";
    $a++;
}

echo "<h1 style='color:red;'>Do while loop in php</h1>";
$b=1;
do {
   
  echo $b;
  echo "<br>";
  $b++;
//   the difference between while and do while loop is that in while loop conditon is checked first and the execute the statment and in do-while loop first statment is execute and the conditon is checked
} while ($b <= 10);

// for loop
echo "<h1 style='color:red;'>For loop in php</h1>";
for ($i=1; $i <=10 ; $i++) { 
  echo $i;
echo "<br>";
}

echo "<h1 style='color:red;'>nested loop in php</h1>";
// nested loop 
// loop inside loop is called nested loop
for($c=0;$c<5;$c++)
{
    for($d=2;$d<8;$d++)
    {
        echo $c;
    }echo "<br>";
}

?>