<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// 06. Предопределенные функции в PHP для работы со строками и датой и временем [skladchik.org]
// trim удаляет пробелы из строки по обестороны
// ltrim удаляет пробела слева
// rtrim удаляет пробелы справа
// strip_tags удаляет html теги из строки
// htmlspecialchars защищает от xss атак заменяет символы <,>,',",& на &lt,&gt,&#039,&quot,&amp - в док-ции глянуть 
// htmlspecialchars_decode наоборот из &lt,&gt,&#039,&quot,&amp превращает в читаемый для браузера код
// htmlentities тоже самое почти что и htmlspecialchars только есть еще второй параметр flags где можно задавать более подробные настройки htmlentities(string,flags) например ENT_QUOTES преобразует как двойные так и одинарные кавычки
// str_replace(text || array, text || array, исходный текст) меняет в строке символы пример ниже. Функция регистро чувствительная.
// str_ireplace - Фкнкция не чувствительная к регистру
// strtoupper(строка) - преобразует строку в верхний регистор
// strtolower(строка) - преобразует строку в нижний регистор
// strlen - возвращает количество байт т.е. 1 символ латиницы 1 байт на кирилице 2 байта остальные вроде по 1 байту
// mb_strlen(строка, кодировка) - возвращает длину строки (прям количество символом) 2-параметр кодировка например'utf-8'
// strpos / mb_strpos - поиск символа или куска строки на какой позиции он есть в строке
// substr / mb_substr(строка, '7', 3) - находим строки по позиции(2 параметр) и количетво символов(3 параметр)
// phpinfo() - выведет все настройки интепритатора php.
// echo phpinfo();
// microtime(bool $as_float = false): string|float - возвращает текущую метку времени Unix с микросекундами. as_float
// Если указано и установлено в true, microtime() возвратит число с плавающей точкой (float) вместо строки (string), как описано в разделе возвращаемых значений ниже.


$start = microtime(true);
$message = "   Hello, World!";
    var_dump($message);
echo("<br>");

$result = trim($message);
$result = rtrim($message, "!"); // удалить символ "!" справа строки 
    var_dump($result);


$message2 = " <h1><strong>Hello</strong>, World.</h1>";  
echo $message2;
$result2 = strip_tags($message2);
// $result2 = strip_tags($message2, "<h1>"); //разрешить исполоьзовать h1 тег 
// $result2 = strip_tags($message2, ['h1','strong']); //разрешить исполоьзовать теги h1 и strong переданные в виде массива
echo $result2 . "<br>";

$message3 = " <h1><strong>Hello</strong>, World.<script>alert('test')</script></h1>";  
// echo $message3;
$result3 = htmlspecialchars($message3); // защита работает 
echo $result3 . "<br>";

$new = "&lt;strong&gt;Text&lt;/strong&gt";
echo $new . "<br>";
echo htmlspecialchars_decode($new); // декод успешно отработал


$message4 = "[i]Hello[/i], [b]World[/b]";
// $result4 = str_replace('Hello','Privet', $message4);
// $result4 = str_replace('[b]', '<b>', $message4);
// $result4 = str_replace('[/b]', '</b>', $result4);

$bb_code = ['[b]','[/b]','[i]','[/i]'];
$html_code = ['<b>','</b>','<em>','</em>'];

$result4 = str_replace($bb_code, $html_code, $message4);
echo $result4 . "<br>";


$message5 = "hello";
$result5 = strpos($message5, 'h');
if ($result5 !== false) {
    echo "Наша буква находится на позиции:" . $result5. "<br>";
} else {
    echo "в нашей строке не найдена позиция для этой буквы.";
}  
// var_dump($result5);

$message6 = "привет мир";
$result6 = mb_substr($message6, '7', 2);
$result6 = mb_substr($message6, '-3'); // отрицательные значения тоже можно задавать с конца строки будет газовать
var_dump($result6);
echo "<br>";


// Даты
echo date("Y-m-d H:i:s", time());
echo "<br>";
echo date("Y-m-d H:i:s", time() - 60*60*24) . "<br>"; // отнять 1 день и вывести
echo date_default_timezone_get() . "<br>"; // получение часового пояса
date_default_timezone_set('Europe/Moscow'); // установка часового пояса
echo date("Y-m-d H:i:s", time()). "<br>";
date_default_timezone_set('Pacific/Saipan'); // установка часового пояса
echo date_default_timezone_get() . "<br>";  // получение часового пояса
echo date("Y-m-d H:i:s", time());
echo "<br>";
// echo time(); // Возвращает количество секунд, прошедших с начала эпохи Unix (1 января 1970 00:00:00 GMT) до текущего времени.
$end= microtime(true);
echo $end - $start;
?>

</body>
</html>

