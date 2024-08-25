<?php require_once 'engine/math.php'; // выносим подключенный файлик как библиотеку?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        
        require_once 'template/header.php';
            // function sum($a=1, $b=1) {
            //     echo $a + $b;
            //     echo "<br>";
            // }

            // if (function_exists('sum')) {  // Проверка на существование функции в коде.
            //     echo "exist";
            // } else {
            //     echo "doesn't exist";
            // }

            if (!function_exists('suma')) {  // Проверка на существование функции в коде запись по короче для создания функции.
                echo "doesn't exist";
                function suma() {
                    echo "hello";
                }
            }

            $result = sum(4,5);
            echo $result;
            echo "<br>";
            minus(4,5);
            suma();

        require_once 'template/footer.php';



    ?>
</body>
</html>

