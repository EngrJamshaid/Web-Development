<?php
echo "<h1>Exception handling in php</h1>";
// Exception handling in PHP is a mechanism for managing errors or unexpected conditions that occur during the execution of a script. Instead of halting the program abruptly, PHP allows you to "catch" these exceptions and respond to them gracefully, such as logging the error or displaying a user-friendly message.

try {
    // Code that might throw an exception
    $number = 10;
    if ($number > 5) {
        throw new Exception("The number is too large!");
    }
    echo "This will not execute if an exception is thrown.";
} catch (Exception $e) {
    // Code to handle the exception
    echo "Caught exception: " . $e->getMessage();
} finally {
    echo "<br>Finally block executed.";
}
?>
