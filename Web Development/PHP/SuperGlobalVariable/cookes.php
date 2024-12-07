<?php

// The main uses of $_COOKIE in PHP are:
// Store Small Data: Save user-specific data (e.g., preferences, settings) in the browser.
// Session Persistence: Maintain user sessions by storing unique session IDs.
// User Authentication: Save login tokens for "Remember Me" functionality.
// Track User Activity: Record browsing behavior, like recently viewed items.
// Personalized Experience: Customize the website based on user preferences (e.g., themes, languages).

$cookename = "jamshaid"; // Removed the space
$cookevalue = "this is cookie";

// Setting the cookie
setcookie($cookename, $cookevalue, time() + (3600 * 20), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <?php
    // Checking if the cookie is set
    if (isset($_COOKIE[$cookename])) {
        echo "Welcome engr, " . $_COOKIE[$cookename];
    } else {
        echo "Cookie not set";
    }
    ?>
</body>
</html>
