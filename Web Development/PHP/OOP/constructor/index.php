<?php
echo "<h1>Contructor and Destructors in php</h1><br>";

class jamshaid{
    public $name,$age;
    //constructor
    public function __construct($a,$b)
    {
    echo   "name is ".$this->name=$a."<br>";  
     echo  "age is ".$this->age=$b;
     echo "<br>";
      echo "contructor function invoke and it is invoke when object is make ";  
    }


    function __destruct()
    {
        echo "<br><h1>Destructuor is called!</h1>";
    }
}

$obj=new jamshaid("jamshaid",21);


?>