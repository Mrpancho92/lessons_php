<?php
$a = 2 + 2;
$b = 3;
$c = 4;
$d = '4'; 
$f = ($g = 5) + 1; // можно так сначала создаться переменная $g = 5 потом сложение +1 
$c += 10; //так же как в js и -= на вычитание
// все сокращения += -=  *=  /=  %=  **= 
$h = 'text';
// $h = $h . " hello"; // склеивание текста
$h .= " hello"; // склеивание текста короткая запись

$k = 2;
// $l = $k; // в переменной $l будет 2 т.к. на момент создания в $k было 2
$l = &$k; // в переменной $l будет 4 т.к. мы сделали указатель с помощью & это копирование по ссылке получается
$k = 4;
echo $k . " " . $l;

echo '<br>';


echo 2 + 2;
echo $a;
echo $c % $b;
echo $c ** $b; // Возведение в степень а старая запись pow(3,2);
var_dump(+$d); // + превратить строку в число как в том же JS.
echo $c + '3'; // тройку преобразует в число и сложит результат а если $c + '3 fgdg' то возьмет только тройку           а так 'f3gdg' рабоать не будет
echo $f;
echo '<br>';
echo $c;
echo $h;

// инкременты $a++ и ++$a 
// декрименты $a-- и --$a
// $a++  сначала выведет $a потом прибавит 1 и только на воторой итерации будет значение плюсованное
// ++$a  сначала прибавит 1 а потом выведет $a уже прибавленное
echo '<br>';
$z = 1;
// var_dump($z++);
echo '<br>';
var_dump(++$z);

// ЦИКЛЫ
// for($i = 0; $i <= 10; $i++) {
//     echo "Hello<br>";
// }
// можно еще так записать выносить начальное значение и инкремент

// $i = 0;
// for( ; ; ) {
//     echo "Hello<br>";
//     $i++;
//     if ($i === 10) break;
// }
// count($args) - Получение длинны массива
// $args = ['1','2','3','4','5'];
// for($i = 0; $i < count($args); $i++) {
//     echo $args[$i] . "<br>";
// }

// $i = 0;
// while($i < 10) {
//     echo $i . "<br>";
//     $i++;
// }

$row = 3;
$col = 4;

$i = 0;
echo "<table border=\"1\">";
    while($i < $row) {
        echo "<tr>";
            $j = 0;
            while($j < $col) {
                echo "<td>Строка:" . $i . "Столбец: ". $j . "</td>";
                $j++;
            }
        echo "</tr>";
        $i++;
    }
echo "</table <br>";



$year = 1992;
echo "<select>";
    while($year <= 2022) :
        echo "<option value=" .$year .">$year</option>";
        $year++;
    endwhile;
echo "</select>";


// do while

$i = 11;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);

// foreach

$names = ["Alex", "Elena", "Cris", "Tim", "Tom"];
$container = [
    "Магнитофон" => "3",
    "Видеокамера" => "5",
    "Подсигар" => "4",
    "Куртка кожанная" => 10
];

foreach($names as $item) {
    echo $item . "<br>";
}
foreach($container as $key => $item) {
    echo $key . " $item <br>";
}
