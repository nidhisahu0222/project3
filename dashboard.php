<?php

session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];

if (!isset($_SESSION['name'])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello <?php echo $name ?>
</body>
</html>