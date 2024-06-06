<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Message</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Function to display message as header
        function displayMessage(message, isSuccess) {
            var header = document.createElement('div');
            header.className = isSuccess ? 'success-header' : 'error-header';
            header.textContent = message;
            document.body.insertBefore(header, document.body.firstChild);
            setTimeout(function() {
                header.remove();
            }, 5000); // Remove the header after 5 seconds
        }
    </script>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "puhfy","1234", "wbdatabase");
    if ($conn->connect_error) {
        echo "<script>displayMessage('Connection failed: " . $conn->connect_error . "', false);</script>";
    } else {
        echo "<script>displayMessage('Connected successfully', true);</script>";
    }
?>
</body>
</html>
