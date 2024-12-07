<?php 
echo "OOP is a object oriented programing <br>";
echo "<br>";
// it object oriente programing techineque that is used in big project it cannot prefer in smaller project we can use simple approcahes to performa a task because it based on classes and objects which can be reusable to perform a task.

class Calculator{
    public $a,$b,$c;
// every class in oop have a properties and methods $a,$,$c are ptoperties of a class calculator and methods are sum(), sub() and $this is the instance of a variable
    function sum()
    {
        $this->c=$this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c=$this->a - $this->b;
        return $this->c;
    }
}

$obj=new Calculator();  //object 1
// $obj is object variable and calculator is a object 
$obj->a=50;
$obj->b=20;

echo "The Sum of two values is ".$obj->sum()."<br>";
echo "The subtraction of two values is ".$obj->sub()."<br>";
echo "=====================================<br>";

$obj2=new Calculator();  //object 2
$obj2->a=150;
$obj2->b=210;
echo "The Sum of two values is ".$obj2->sum()."<br>";
echo "The subtraction of two values is ".$obj2->sub()."<br>";

?>