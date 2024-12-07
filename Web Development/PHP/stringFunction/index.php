<?php
echo "<h1>String Functions in php</h1>";
echo "<h2>string_split convert string to array similar to exploade </h2>";
$name="My name is jamshaid";
echo "<pre>";
print_r(str_split($name,3));
echo "<h2>chunk_split() make chunks for split the string  </h2>";
echo chunk_split($name,2,"...");


echo "<h2>toupper()and tolower  </h2>";
echo " Uppercasr ".strtoupper($name);
echo "<br>";
echo " lowercase ".strtolower($name);


echo "<h2>Strlen()=used to find the length of string and str_word_count() is used to find the numbers of words in string. </h2>";

echo "length is ".strlen($name);
echo "<br>";

echo "Words are ".str_word_count($name);



echo "<h2>strpos()=is used to find the positon of word in string </h2>";
echo strpos($name,'jamshaid');


echo "<h2>strstr()=is used to find the substring in string </h2>";
$str="hello world the world is slice";
echo substr($str,3);


echo "<h2>str_replace()=is used to find and replace  </h2>";
echo str_replace('world','life',$str);




echo "<h2>strcmp()=is used to compare one string with other </h2>";
$str1='hello';
$str2='Hello';
echo strcmp($str1,$str2);  //it return true or flase 0 or 1s



echo "<h2>addslashes()=is used to add the slashes when works in databse mosthly use to save the sql injection</h2>";
$sla="my name is 'jamshiad'";
echo $sla."<br>";
echo addslashes($sla);
echo "<br>";
echo stripslashes($sla);  //remove slashes




echo "<h2>trim() in php</h2>";
$tr="Jamshaid Dasti";
echo trim($tr,'i');
echo "<br>";



echo "<h2>strpad() and strrepeat() in php</h2>";
$he="hello";
echo str_pad($he,10,"--");  //add -- and make hello of 10 characher length
echo "<br>".str_repeat("wo",5);


echo "<h2>strshuffle() and strrevverse() in php</h2>";
echo strrev("jamshaid");
echo "<br>";
echo str_shuffle("jamshaid");
?>