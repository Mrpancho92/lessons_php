<?php

// $db = @mysqli_connect('192.168.1.7','root','','company');  // @ - чтобы не палить информацию об ошибки подробно
// if (!$db) die(mysqli_connect_error()); выводим ошибку подключения как текст

// $db = @mysqli_connect('192.168.1.7','root','','company') or die('Ошибка подключения к базе данных');
// mysqli_set_charset($db,'utf8') or die('Не правильная кодировка');
require_once 'db.php';
// echo '<pre>';
// var_dump($db);
$name = mysqli_real_escape_string($db,"Andy's"); // если внутри есть кавычки нужно строку пропускать через функцию mysqli_real_escape_string() 
$insert = "INSERT INTO `team` (`name`, `email`, `date`) VALUES ('$name', 'bill@mail.ru', '2024-07-01')"; // если совпадает в базе данных с зарезервированными словами то надо оборачивать в обратные кавычки ``
$update = "UPDATE `team` SET `text` = 'hello' WHERE `id` = 5";
$delete = "DELETE FROM team WHERE id = 5";
// $select = "SELECT * FROM team "; // * - это брать все доступные поля. SELECT - получение данных.
$select = "SELECT `id`, `name`, `email`, `date` FROM `team`"; // * - это брать все доступные поля. SELECT - получение данных. "SELECT `id`, `name`, `email`, `date` FROM `team` LIMIT 3" - LIMIT достать только 3 элемента. LIMIT 3,2 - берем с 3 позиции 2 элемента.

$query = mysqli_query($db,$select); 
$team = mysqli_fetch_all($query, MYSQLI_ASSOC);
if ($query) { ?>
    <h2>Наша команда</h2>
    <style>
        td {
            padding: 10px;
        }
    </style>
    <table style="text-align: center; border: 1px;">
        <thead style="background: #f5f5f5;">
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>DATE</td>
            <td>DELETE</td>
        </thead>
    <?php
    foreach($team as $member) { ?>
        <tr>
            <td><?php echo $member['id']; ?></td>
            <td><?php echo $member['name']; ?></td>
            <td><?php echo $member['email']; ?></td>
            <td><?php echo $member['date']; ?></td>
            <td><a href="delete.php?id_member=<?php echo $member['id'] ?>">Delete</a></td>
        </tr>
 <?php } ?>
</table>
<?php
}
?>
<h2>Добавить члена команды</h2>
<form action="add.php" method="POST">
    <p><input type="text" name="name"/><br></p>
    <p><input type="text" name="email"/><br></p>
    <p><input type="text" name="date"/><br></p>
    <p><button type="submit">Submit</button></p>
</form>




<?php
// echo '<pre>'; 
// var_dump(mysqli_fetch_all($query, MYSQLI_ASSOC)); // MYSQLI_ASSOC чтобы вывод был в ассоциативном массиве
// echo '</pre>';
// if ($query) echo "Успешно";
// else echo "Ошибка";

// if ($query) var_dump($query); // вывод полученных данных
// else echo "Ошибка";
// echo mysqli_error($db); // вывести подробную ошибку чтоб знать где искать и что искать
?>