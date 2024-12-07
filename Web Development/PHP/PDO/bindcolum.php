<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=personaldata", "root", "");

    $stmt = $pdo->query("SELECT id, name, age, city FROM student");

    // Bind columns to PHP variables
    $stmt->bindColumn(1, $id); // Bind first column (id)
    $stmt->bindColumn(2, $name); // Bind second column (name)
    $stmt->bindColumn(3, $age); // Bind third column (age)
    $stmt->bindColumn(4, $city); // Bind fourth column (city)
    // $stmt->bindColumn("city", $city); // another way to Bind  column (city)

    // Fetch rows
    while ($stmt->fetch(PDO::FETCH_BOUND)) {
        echo "ID: $id, Name: $name, Age: $age, City: $city<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
