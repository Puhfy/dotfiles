<head>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
    $conn = new mysqli("localhost", "puhfy","1234", "wbdatabase");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "couldnt connect";
    }
    echo "Connected successfully";
?>
