<?php

// Супер глобальные переменные $_GET / $_POST / $_SERVER / $_FILES

// print_r($_FILES);

// move_uploaded_file перемещает файлик из временного хранилища в постоянное
if (!empty($_FILES)){
    move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name']); // перемещает файлик из временного хранилища в постоянное
}
if (file_exists('uploads/Вопросы HTML CSS JS .txt')) echo "Файл существует"; // Проверка на существование файла
if (file_exists('../text.txt')) {
    echo "ok"; 
}


// rename Работает не только с файлами но и с каталогами
rename('uploads/Вопросы HTML CSS JS .txt', 'uploads/1.txt'); // Функция переименования файла
rename('uploads/1.txt', '2.txt'); // Если не указать каталок расположение то файлик переместится и переименуется
// rename('uploads', 'uploads2'); // Переименовать каталог

// mkdir создании каталога (папки)
// mkdir('folder'); // создает каталог folder
if (mkdir('folder2/img', 0777, true)){ // Создаем folder2/img вложенные каталоги, 0777 - права доступа конкретно 0777 дают полный доступ на чтение запись, true - параметр recursive если указано значение true, то все родительские каталоги для указанного параметра directory также будут созданы, с теми же разрешениями.
    echo 'folder2/img created';
}

// rmdir удаление каталога только если внутри больше ничего нет
if (rmdir('folder2/img')) {
    echo 'folder2 removed';
}

// copy копирование файлов, если название файла уже есть то будет перезапись 
if (copy('uploads/uploads.txt', '3.jpg')) {
    echo 'файл скопирован';
}

// unlink удаление файла. Можно прописать каталог и название файла и функция его удалит в каталоге.
if (unlink('3.jpg')) {
    echo 'файл удален';
}

// is_dir и is_file проверка на каталог и на файл.
if (is_dir('2.txt')) {
    echo 'это директория';
} else {
    echo 'это не деректория';
}
if (is_file('2.txt')) {
    echo 'это файл';
} else {
    echo 'это не файл';
}

// file_get_contents возвращает содержимое фала в виде строки. У нее есть 5 параметров. Инфа есть на сайте.
echo '<br>';
$text = file_get_contents('../text.txt');
// echo $text;
echo nl2br($text); // nl2bt Вставляет HTML-код разрыва строки перед каждым переводом строки
// $text2 = file_get_contents('https://www.php.net/manual/ru/function.mkdir.php'); // можно обратиться к странице ифункция вернкт html код.
// echo htmlspecialchars($text);




// file возвращает масив
$text3 = file('../text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // FILE_IGNORE_NEW_LINES убрать переносы строк FILE_SKIP_EMPTY_LINES - убрать пустые строки
var_dump( $text3);
// $text4 = file('https://www.php.net/manual/ru/function.mkdir.php');
// foreach ($text4 as $num => $line) {
//     echo $num . ": ". htmlspecialchars($line)."<br>";
// }

// file_put_contents вписать в файл. Возвращает количество байт вписаных. В противном случае false. По умолчаю переписывает весь файл новой инфой если не задать параметры.
$file = '../text.txt';
$var = "hello man\n"; // если хотим добавить перенос строки чтоб писалось с новой строки то надо \n
// file_put_contents($file,$var);  
// $bytes = file_put_contents($file,$var, FILE_APPEND | LOCK_EX); // FILE_APPEND константа на добавление данных. LOCK_EX чтобы не могли одновременно несколько скриптов обращаться к файлику и работать с ним дает нам очередность работы с файлом чтобы не было конфликтов.
// echo  $bytes . '<br>'; 


// filesize показывает размер файлика
$file2 = filesize('../text.txt');
echo $file2 . "<br>";

// fopen, fwrite, fread, fclose 
$handle = fopen($file, 'a+'); // открыли поток на чтение файла 'r'
$text5 = fread($handle, filesize($file));
fwrite($handle, 'GGFFFGGGFF');
fclose($handle);
echo $text5;

?>

<form method="POST" action="" enctype="multipart/form-data">
        <p><input type="text" name="title"></p>
        <p><input type="file" name="file"></p>
        <button type="submit">Submit</button>
</form>