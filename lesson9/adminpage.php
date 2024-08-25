<?php session_start(); if (!isset($_SESSION['access'])) die('Вы не админ');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINPAGE</title>
</head>
<body>
    <?php
        echo "Страница админки";
    ?>
</body>
</html>