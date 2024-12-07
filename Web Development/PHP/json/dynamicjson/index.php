<?php


$conn = mysqli_connect("localhost", "root", "", "user") or die("connection failed");

$sql = "SELECT * FROM test";
$run = mysqli_query($conn, $sql) or die('query failed');
$output = mysqli_fetch_all($run, MYSQLI_ASSOC);
$json_data = json_encode($output,JSON_PRETTY_PRINT);

// Define the directory and filename
$directory = "myjson";
$filename = "jamshaid.json";

// Check if the directory exists, if not, create it
if (!is_dir($directory)) {
    mkdir($directory, 0777, true); // Create the directory with permissions
}

// Try to write the JSON data to the file
if (file_put_contents("$directory/$filename", $json_data)) {
    echo "$filename file created";
} else {
    echo "Cannot insert into JSON file";
}




?>