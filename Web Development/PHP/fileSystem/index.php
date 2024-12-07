<?php
echo "<h1>File put content and Get content</h1>";
// insert data into file
// echo file_put_contents("readme.txt","\nthis is new text" ,FILE_APPEND);


// read file from file
// it have a 5 parameter filename, include path,context,start,max_lenght 4 parameter are optional
echo file_get_contents("readme.txt" ,FALSE,NULL,0,50);
// FLASE INI FILE 0,50 LENGHT

?>