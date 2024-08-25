<?php

$a = 1;
$b = '1';
$c = 2;
// Еще по тернарнику
echo ($a) ?: "2"; // тут если $a истино то выведет $a, если ложно то выведет "2" 

// Не равно можно писать как != или <>
// Условие будет истино == сравнивает только значению как в JS
if ( $a == $b ) { ?>
    <!-- echo "Hello"; -->
     <h1>$a == $b True</h1>
<?php }
if ( $a !== $b ) { ?>
    <!-- echo "Hello"; -->
     <h1>$a !== $b True</h1>
<?php }
// Условие будет ложно === сравнивает еще и по типу как в JS
if ( $a === $b ) { ?>
    <!-- echo "Hello"; -->
     <h1>$a === $b True</h1>
<?php } else { ?>
    <!-- echo "false"; -->
     <h1>$a === $b False</h1>
<?php } 

// еще писать можно так

if ( $a === $b ) : ?>
    <!-- echo "Hello"; -->
     <h1>True</h1>
<?php else : ?>
    <!-- echo "false"; -->
     <h1>False</h1>
<?php endif ?>

<?php

// Сокращения 
$result = ($a) ? "True" : "false";
echo $result;
echo "<br>";
// Можно и так если в теле условия по 1 строчке
if (1 < 2) 
        echo "True";
    else 
        echo "False";
echo "<br>";
// elseif
if ($a == 1) {
    echo "a = 1";
} elseif ($a == 2) {
    echo "a == 2";
} elseif ($a == 3) {
    echo "a == 3";
} else {
    echo "a == 4";
}
echo "<br>";
// Операторы and or можно писать && и || как в JS  && - в приоритете над ||. Приоритет можно регулировать скобками.
if ($a == 1 && $b == '1') {
    echo 'True $a and $b';
} 
echo "<br>";
if ($a == 2 || $b == '1') {
    echo 'True $a or $b';
} 
echo "<br>";
if ($a == 2 || $b == '1') {
    echo 'True $a or $b';
} 
echo "<br>";
if (($a == 2 || $b == '1') && $c == 2) {
    echo 'True ($a == 2 || $b == "1") && $c == 2';
} 
// Вложенености условий тоже джопускаются
if ($a === 1 ) {
    if ($b === 1) {
        if ($c === 1) {
            echo "hello";
        }
    }
}
// лучше записать так
if ( $a === 1 && $b === 1 && $c === 1 ) {
    echo "hello";
}

// switch case тут НЕ СТРОГОЕ СРАВНЕНИЕ !!
echo "<br>";
$d = 1;

switch($d) {
    case (1) :
        echo '$d = 1';
        break;
    case (2) :
        echo '$d = 2';
        break;
    case (3) : 
        echo '$d = 3';
        break;
    default :
        echo 'Не попало ни в один кейс';
        break;
}
// еще варик написания
switch($d) :
    case (1) :
        echo '$d = 1';
        break;
    case (2) :
        echo '$d = 2';
        break;
    case (3) : 
        echo '$d = 3';
        break;
    default :
        echo 'Не попало ни в один кейс';
        break;
    endswitch;
    ?>

    <?php
// match тут СТРОГОЕ СРАВНЕНИЕ !!
echo "<br>";
$fruit = 'apple';
$result2 = match($fruit) {
    'apple' => 'В корзине apple',
    'banana' => 'В корзине banana',
    'mango' => 'В корзине mango',
    default => 'unknown status code'
};
echo $result2;
echo "<br>";
$num = 8;
$result3 = match(true) {
    $num <= 7 => 'Меньше равно 7',
    $num <= 10 => 'Меньше равно 10',
    $num <= 20 => 'Меньше равно 20',
    default => 'Больше 20'
};
echo $result3;
echo "<br>";
$num1 = 1;
$num2 = 2;
$num3 = 2;
$result4 = match(2) {
   $num1,$num2,$num3 => "Значение 2",  // при перечислении num1 num2 num3 срабатывает условие или.
   default => "Что то другое",
};
echo $result4;

switch($num1) {  // тут тоже хотябы одно совпадение то выведет echo "Условие совпало";
    case 0 :
        case 1 :
            case 2 :
                echo "Условие совпало";
                break;
}
