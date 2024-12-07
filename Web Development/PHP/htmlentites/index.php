
<?php
// htmlentites is used to save from sql injetion by adding the some values in special characters.
$str="My name is <b>jamshiad</b> and i am 'software enginer' ";
// echo $str."<br>";

$enc= htmlentities($str,ENT_QUOTES);  //it convert the special charactes also quotes
echo $enc;
echo "<br>";

echo html_entity_decode($enc);

?>