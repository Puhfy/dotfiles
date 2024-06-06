<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Connection Status</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "puhfy", "1234", "wbdatabase");
        if ($conn->connect_error) {
            echo "<h1>Connection failed: " . $conn->connect_error . "</h1>";
        } else {
            echo "<h1>Connected successfully</h1>";
        }
    ?>
</body>
</html>
