<?php
echo "<h1>Date and Time functions in php</h1> ";
echo "Date function"."<br>";
echo "current date is ".date('d')."<br>";
echo "current month is ".date('M')."<br>";
echo "current year is ".date('Y')."<br>";
echo "current day is ".date('l')."<br>";
echo "full date is ".date("j/M/Y");
echo "<br>";
echo "<br>";


echo "Time function"."<br>";
echo "current time hour is ".date('h')."<br>";
echo "current time minutes is ".date('i')."<br>";
echo "current time second is ".date('s')."<br>";
echo "current time meridiaus am,pm is ".date('a')."<br>";
echo "current time is ".date('i:s:sa')."<br>";

echo "<br>";

echo "future or previous time zone check or set";
echo "<br>";
$date=date_create("12/3/2026");
echo date_format($date,'l');


echo "<h1>Validate Date in php</h1>";
echo checkdate(2,5,2002);

echo "<h1>Get Date in php</h1>";
$datee=getdate();
echo $datee['weekday'];
echo "<pre>";
print_r($datee);



?>