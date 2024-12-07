<?php
echo "<h1 style='background-color: red; color: white; padding: 12px;'>Array functions in PHP</h1>";

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>Array count()</p>";

$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grape", "Honeydew", "Ice Cream Bean"];

$vegetables = ["Broccoli", "Carrot", "Cauliflower", "Cucumber", "Kale", "Okra", "Potato", "Spinach", "Zucchini"];
// Return the number of elements in an array:
echo count($fruits);   //9

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>Array size()</p>";
echo sizeof($fruits);
echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>inarray()</p>";
// Search for the value "Glenn" in an array and output some text:
    echo in_array("Banana",$fruits);  //it return true and flase 1or 0


    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>push()</p>";
    // add the value in end of an array using push function
  
    array_push($fruits,"blue","yellow");
    echo "<pre>";
print_r($fruits);

    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>pop()</p>";
    // remove the last element in an array
    array_pop($fruits);
    print_r($fruits);
    echo "<pre>";

    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>shift()</p>";
    // it can remove the value in start of an array
    array_shift($vegetables);
    print_r($vegetables);
    echo "<pre>";

    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>unshift()</p>";
    //it can delete the element in end of an array
    array_unshift($vegetables,"jamshiad");
    print_r($vegetables);
    echo "<pre>";

    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>slice()</p>";
    //it can extract the element in array
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2));

    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>splice()</p>";
    // Remove,insert,add elements from an array and replace it with new elements:
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"purple","b"=>"orange");
    array_splice($a1,0,2,$a2);
    print_r($a1);

    // Replace the values of the first array ($a4) with the values from the second array ($a3):
    echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>replace()</p>";
    $a4=array("red","green");
$a3=array("blue","yellow");
print_r(array_replace($a4,$a3));
// blue yellow output

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_values()</p>";
// return all the values of an array not key
$jmd=array(
"Name"=>"jamshaid",
"Age"=>"41",
"Country"=>"pk");
print_r(array_values($jmd));


echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_keys()</p>";
// return the keys of an array
$cara=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($cara));

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_merge()</p>";
// merge two arrays
$j1=array("red","green");
$j2=array("blue","yellow");
print_r(array_merge($j1,$j2));


echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_key_exist()</p>";
// key exist or not
$cars=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$cars))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
 

  echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_flip()</p>";
//   Flip all keys with their associated values in an array:

$a6=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a6);
print_r($result);

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>array_intersect()</p>";
// Compare the values of two arrays, and return the matches:
$color1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$color2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($color1,$color2);
print_r($result);


echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>sort()</p>";
// Sort the elements of the $cars array in ascending alphabetical order:
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>shuffle()</p>";
// it can randomize the order of an array
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>explode()</p>";
// 1. Splits a string into an array.
// 2. Breaks a string into substrings using a specified delimiter.
$str="my name is jamshiad";
echo var_dump($str);
$newArr=explode(' ',$str);
print_r($newArr);

echo "<p style='text-align: center; text-decoration: underline; font-size:20px;'>implode()</p>";

// 1. Joins multiple array elements into a single string.
// 2. Concatenates array elements using a specified glue (separator) string.

$name=['jamshiad','Dasti'];
echo var_dump($name);
$newstr=implode(',',$name);
echo $newstr;

?>