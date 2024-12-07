<?php
include "connection.php";

// Check if the POST request contains the required keys
if (isset($_POST['firstnamee']) && isset($_POST['lastnamee'])) {
    $firstname = $_POST['firstnamee'];
    $lastname = $_POST['lastnamee'];

    // Query to insert data
    $myquery = "INSERT INTO test(f_name, l_name) VALUES('$firstname', '$lastname')";
    $result = mysqli_query($conn, $myquery) or die("Query failed: " . mysqli_error($conn));

    // Return response
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo "Missing required data.";
}
?>
