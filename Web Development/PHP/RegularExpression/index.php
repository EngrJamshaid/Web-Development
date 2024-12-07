<?php
echo "<h1>Regular Expression</h1>";
echo"<p>In PHP, a regular expression is a sequence of characters that defines a search pattern. It is used for string matching, searching, and replacing operations.</p>"
;


$string = "The price of 1 apple is $2, and the price of 10 oranges is 15.";
// Finds only the first match in a string.
// Stops searching after the first match is found. while preg match al finds the all match in a string
$exp=preg_match("/apple/",$string);
$pattern ="/\$/"; // Regular expression to search for $2

$matches = [];
$count = preg_match_all($pattern, $string, $matches);

echo "The dollar sign ($) appears $count times in the string.";

die();
if($exp)
{
    echo "A match was found";
}else{
    echo "A match was not found!";
}
?>