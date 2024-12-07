<?php
echo "preg replace in php"."<br>";

$string="PHP  is web scripting langauge of choice thats way we want to use PHP";

$pattren="/PHP/i";
$replacment="JavaScript";
echo preg_replace($pattren,$replacment,$string);

?>