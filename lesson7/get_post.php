<?php
// echo var_dump($_POST);
print_r($_POST);
$name = htmlspecialchars($_POST['name'] ?? ""); // если есть ключ name то в переменную $name запишутся данные если нет то "" пустота
echo "Вы передали первое значение: " . $name . "<br>";

$id = (int) (strip_tags($_POST['id'] ?? ""));
echo "Ваш ID: " . $id;


?>

<form method="POST" action="">
    <input type="text" name="name">
    <input type="text" name="id">
    <input type="text" name="name3">
    <button>Send</button>
</form>
