<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "top bar";
        // include 'template2/header.php'; // выдает warning и не останавливает код в случае ошибки
        // require 'template/header.php'; // выдает fatal error и останавлиавет код он не идет дальше
        include_once 'template/header.php'; // подгружает один раз и выводит 
        include_once 'template/header.php'; // эту строчку уже не будет подгружать потому что выше уже было загружено
        require_once 'template/header.php'; // тоже самое только с fatal error
        echo $color . "<br>";
        echo "content"
    ?>
</body>
</html>