<?php

// $_COOKIE

setcookie('name', 'Alex');
// setcookie('name2', 'Cris', time()+3600); //  time()+3600 время жизни cookie
// setcookie('name2', 'Cris', time()-3600); для удаления cookie используем отрицательное время
// setcookie('name2', 'Cris', time()+3600, '/'); '/' - cookie доступна от корня во всех каталогах область видимости типа
var_dump($_COOKIE);