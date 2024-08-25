<?php

// $_SESSION

session_start();  // вощвращает true если сессия создалась и false если какие то проблемы   
// $_SESSION['myName'] = "Alex";
// unset($_SESSION['myName']); // удаление из сессии значения данных
// session_unset(); // удаляет все сессии
// session_destroy(); // удаляет полностью файл
// var_dump($_SESSION);
define("ADMINPASS", "12345");

if (!empty($_POST['password_acces'])){
    if ($_POST['password_acces'] === ADMINPASS) {
        $_SESSION['access'] = true;
        setcookie('access','admin', time() + 5, '/');
        $_SESSION['errors'] = "Вы авторизованы";
    } else {
        $_SESSION['errors'] = "Пароль не верный";
    }
}

if (!empty($_COOKIE['access'])) {
    $_SESSION['access'] = true;
    $_SESSION['errors'] = "Вы авторизованы";
} else {
    $_SESSION['access'] = false;
    $_SESSION['errors'] = "Вы не авторизованы";
}

if (isset($_GET['logout']) && $_GET['logout'] == 1 ) {
    session_unset();
    setcookie('access','admin', time() - 3600, '/');
    header("Location: index.php");
}

if (isset($_SESSION['errors']) && $_SESSION['access'] && $_SESSION['errors'] !== "Пароль не верный") {
    echo $_SESSION['errors'];
    echo '<a href="index.php?logout=1">Logout</a>';
} else {

?>

<form action="" method="POST">
    <input type="password" name="password_acces" placeholder="inter password">
    <button type="submit" name="send" value="1">Login</button>
</form>

<?php }  ?>
