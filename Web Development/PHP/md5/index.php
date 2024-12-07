<?php
echo "<h1>Md5 and sha1 algorithm in php</h1>";
echo "<p>It is used to convert the passwords and strings into binary and hexdecimal format and store in database to dave from hackers. if md5 and sha1 second parameter is true than convert into binary otherwise hexdeciaml</p>";
$mypassword="jamshaid123";
echo $mypassword."<br>";
echo md5($mypassword);  //32 characters limit
// 2e0e1442178f932879fe92da2cf5e099
echo "<br>";
echo sha1($mypassword);  //40characters
// fd85eef277bcabc1eea381974e0ccab59ca1e2f1


echo "<h2>uuecode and uudecode</h2>";
echo "<p>the difference btween sha1,md5 and uuencode is that sha1,md5 have a particular limit 32,40 while uuencode have no particular limit ,mean more than or less depends on string</p>";
$en= convert_uuencode($mypassword);
echo $en;
echo "<br><br>";
echo convert_uudecode($en);

echo "<h1>Hextobin and binto hex</h1>";
$str="hello world";
echo $str."<br>";
$res=bin2hex($str);
echo $res."<br>";

echo hex2bin($res);
echo "<br>";

echo "<h3>Asscai value</h3>";
echo ord('j');

echo "<h2>striptags and wordwrap</h2>";
$wo="my name is <b>jamshaid</b> dasti i live in mzd";
echo strip_tags($wo);
echo "<br>";

echo wordwrap($wo,3,"<br>",true);
// it can wrap the word in 3charactes if valueis true and word warp length is 3


?>