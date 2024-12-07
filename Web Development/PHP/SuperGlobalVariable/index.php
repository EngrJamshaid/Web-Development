<?php
echo "<h1>Super Global Variable</h1>";
echo "<p>Superglobal variables in PHP are built-in variables that are always accessible, regardless of scope (global or local). You can use them anywhere in your script without explicitly declaring them as global. They are primarily used to manage data coming from various sources, such as forms, sessions, cookies, or server information.</p>";
echo "<ul>";
echo "<li>Get</li>";
echo "<li>Post</li>";
echo "<li>Request</li>";
echo "<li>session</li>";
echo "<li>Cookies</li>";
echo "<li>File</li>";
echo "<li>Server</li>";
echo "</ul>";

echo "<pre>";
print_r($_GET);

echo "Name is ".$_GET["myname"];
echo " and Age is ".$_GET["mynum"];
echo "<br>";
echo "<br>";
echo "<br>";

echo "<pre>";
print_r($_SERVER);
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER["HTTP_REFERER"]."<br>";



// The `$_SERVER` superglobal in PHP is used for:

// 1. Current Script Name: Access via `$_SERVER['PHP_SELF']` for self-processing forms.

// 2. Server Name:Retrieve the domain/hostname with `$_SERVER['SERVER_NAME']`.  
// 3. Request Method: Check the HTTP method (GET, POST) using `$_SERVER['REQUEST_METHOD']`.

// 4. Client IP Address: Get the user's IP address with `$_SERVER['REMOTE_ADDR']`.

// 5. Referer URL:** Track the previous page using `$_SERVER['HTTP_REFERER']` (if available).

?>