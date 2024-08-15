<?php
$message = '';
if (isset($_GET['value']) && $_GET['value'] === 'pressed') {
    $message = "The value 'pressed' was received, and this message is displayed!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Value Pressed</title>
</head>
<body>
    <!-- Anchor tag that sends the value 'pressed' -->
    <a href="?value=pressed">Click me to send the value 'pressed'</a>

    <!-- PHP block to display the message if the value is set and matches -->
     <?php
    if ($message) {
    echo $message;
}
?>
</body>
</html>
