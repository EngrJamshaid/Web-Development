<?php
echo "<h1>Countinue and Break Statment in php also Goto statment in php</h1>";
// breake statment is use to terminate the code  it is mostly used in loops
echo "<h2>Break statment</h2>";
for ($i=1; $i <=10 ; $i++) { 
    echo $i;
    echo "<br>";
    if($i==5)
    {echo "break statment run";
        break;
    }

}
echo "<h2>Break statment</h2>";
for ($i=1; $i <=10 ; $i++) { 
  
    echo "<br>";
    if($i==5)
    {echo "Continue statment run";
        continue;
        
    }
    echo $i;
}

echo "<h2>Goto statment</h2>";
for ($i=1; $i <=10 ; $i++) { 
  
    echo "<br>";
    if($i==5)
    {
        goto abc;
        
    }
    echo $i;
}
echo "hello";
abc:
echo "Goto statment run it can change the program execution flow by skipping the code.";

?>