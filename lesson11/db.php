<?php

$db = @mysqli_connect('192.168.1.7','root','','company') or die('Ошибка подключения к базе данных');
mysqli_set_charset($db,'utf8') or die('Не правильная кодировка');