<?php
    $host = 'localhost';
    $dbname = 'attendance_management';
    $user = 'hoanle112';
    $password = '123';
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    } catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    function pdo(PDO $pdo, string $sql, array $arguments = null)
    {
        if (!$arguments) {                   // If no arguments
            return $pdo->query($sql);        // Run SQL and return PDOStatement object
        }
        $statement = $pdo->prepare($sql);    // If arguments prepare statement
        $statement->execute($arguments);     // Execute statement
        return $statement;                   // Return PDOStatement object
    }
?>