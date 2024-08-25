<?php


if (!function_exists('sum')) {  // Проверка на существование функции в коде запись по короче для создания функции.
    function sum($a=1, $b=1) {
        return $a + $b;
    }
}
if (!function_exists('minus')) {  // Проверка на существование функции в коде запись по короче для создания функции.
    function minus($a=1, $b=1) {
        echo $a - $b;
        echo "<br>";
    }
}

// function sum($a=1, $b=1) {
//     return $a + $b;
// }

// function minus($a=1, $b=1) {
//     echo $a - $b;
//     echo "<br>";
// }