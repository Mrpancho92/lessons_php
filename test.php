<?php
error_reporting(-1); // Включить отображение всех ошибок.
// echo "test";
// print "test 2";

// Переменные в php
//любые переменные начинаются со значка $ далее имя переменной
// Переменная не должна начинаться с цифры!

$name = "Alex";
// Конкатиниция строк в php c помощью точки.
// Либо запихнуть в двойные кавычки с текстом.
echo "My name is: $name<br>"; 
echo 'My name is: ' . $name. '<br>'; 
echo "My \"name\" is: {$name}<br>";

// Задать константу
define("NAME", "Petro");
echo NAME . '<br>';
// Если название константы совпадает с зарезервирванным в языке свойством то можно сделать так:
define("echo", "Cris");
echo constant("echo");
