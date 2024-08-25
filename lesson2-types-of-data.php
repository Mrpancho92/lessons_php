<?php 
// String
// integer
// float
// boolean
// null
// Array
// object
// resource

$name = "Alex Socha"; // string
$name2 = "Алекс Соха"; // string
$int = 10; // integer
$float = 76.5; // float
$bool = true; // boolean
$null = null; // null
$args = ['Alex Socha', 10, 76.5, true]; // Array новое написание (НУМЕРОВАННЫЙ МАССИВ)
$args2 = array(); // Array старое написание
$fruits = ['apple', 'orange', 'banana', 'pineapple'];
$args3 = array(
    "name" => "Alex Socha", 
    "age" => 10, 
    "height" => 76.5, 
    "is_male" => true,
    "fruits" => $fruits
); // Ассоциативный массив

// object
$user = new stdClass; // object
$user -> name = "Alex";
var_dump($user);
echo "<br>";

// resource
$file = fopen('text.txt', 'r'); // Тип resource
var_dump($file);
echo "<br>";


$names = 'Alex, Cris, Elena';
//echo - это вывод строки
$args6 = explode(',', $names); // вернет массив знаачений с разделителем ","
$names = implode(" ", $args6); // вернет строку слепив элементы массива через пробел. 
echo $names;
echo "<br>";
print_r($args6); 
echo "<br>";
echo is_array($fruits); // проверка является ли массивом значение в переменной $fruits.
echo "<br>";
$args5 = array_reverse($fruits); // перевернуть массив
var_dump($args5);
echo "<br>";
$args4 = array_merge($fruits, $args);
var_dump($args4);
echo "<br>";
// array_unshift($fruits, "mango", "watermelon"); // добовляет элементы в начало массива 
array_push($fruits, "mango", "watermelon");  // добовляет элементы в конец массива 
asort($fruits); // сортирует по возрастанию по алфавиту
// arsort($fruits); // сортирует наоборот по убыванию по алфавиту наоборот
var_dump($fruits); 
echo "<br>";
print_r($fruits); // выводит массив в чистом виде без типов и длины
echo "<br>";
echo $args3["name"]; // вывод по ключу "name" элемента ассоциативного массива
echo "<br>";
echo $fruits[0]; // вывод 0 элемента массива 
echo "<br>";
echo count($fruits); // count - функция возвращает длину колличество элементов массива есть аналог sizeof
echo "<br>";
var_dump($args3);
echo "<br>"; 
var_dump($args);
echo "<br>"; 
echo $name . "<br>";
echo $int + $float;
echo "<br>"; 
var_dump($name2); // выводит string(19) "Алекс Соха"
echo "<br>"; 
var_dump($int); // выводит int(10)
echo "<br>";
var_dump($int + $float); // float
echo "<br>";
var_dump($int + intval($float)); // intval приведение типа в int
echo "<br>";
echo gettype($int);
echo "<br>";
echo gettype($name2);
echo "<br>";
echo gettype($float); // float и double один и тот же тип
echo "<br>";
settype($float, "int"); // Поменять тип переменной
echo gettype($float); // Получить тип переменной
echo "<br>";
echo $float; 
echo "<br>";
echo is_int($int); // Вывод 1 так как тип у $int - integer
echo "<br>";
echo is_string($name); 
echo "<br>";
var_dump(isset($name)); // isset проверяет существует ли переменная
echo "<br>";
var_dump(isset($null)); // null переменная в даннмоу случае false так как в ней пустота null
