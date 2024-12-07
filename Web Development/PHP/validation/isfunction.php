<?php
echo "is functions for validation of value and datatype! and it return only boolen value";
echo "<br>";
$var=23;

echo is_int($var)."<br>";  //1
echo is_integer($var)."<br>";  //1
echo is_long($var)."<br>";  //1
echo is_float($var)."<br>";  //0
echo is_double($var)."<br>";  //0
// echo is_real($var)."<br>";  //1
echo is_numeric($var)."<br>";  //1
echo is_null($var)."<br>";  //0
echo is_string($var)."<br>";  //0
echo is_array($var)."<br>";  //0
echo is_bool($var)."<br>";  //0



echo "<h2>Filter validate</h2>";

// it si used to validate the email,url,ip address,mac address
$email="jamshiaddasti29@gmail.com";
$url="https//:google.com";
echo filter_var($email,FILTER_VALIDATE_EMAIL);
echo filter_var($url,FILTER_VALIDATE_URL);



?>