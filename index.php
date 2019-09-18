<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
require_once 'connection.php';
require_once 'function.php';
require_once 'delete.php';
//require_once 'edit.php';



/* выбрать базу данных. Если произойдет ошибка - вывести ее */
//mysql_select_db($dbName) or die(mysql_error());
mysqli_select_db($db,$dbName) or die (mysqli_error());

if(!empty($_POST)){
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

if (!empty($_GET['id'])){
    delete_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$messages = get_mess();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница с информацией о людях</title>

</head>
<body>

<form action="index.php" method="post">
    <p>
        <label for="first_name">First name:</label><br>
        <input type="text" name="first_name" id="first_name">
    </p>
    <p>
        <label for="second_name">Second name:</label><br>
        <input type="text" name="second_name" id="second_name">
    </p>
    <p>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id=email>
    </p>
    <button type="submit">Отправить</button>
</form>

<p>Таблица с информацией</p>
<table border="2">
    <thead>
    <tr>
        <th>№</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Email</th>
        <th>Edit | Delete</th>
    </tr>
    </thead>
    <?php foreach($messages as $message): ?>
        <tbody>
        <tr>
            <td><?=$message['id']?></td>
            <td><?=$message['first_name']?></td>
            <td><?=$message['second_name']?></td>
            <td><?=$message['email']?></td>

            <td>

                <a href="edit.php?id=<?php echo $message['id'];?>">Edit</a> |
                <a href="index.php?id=<?php echo $message['id'];?>" onclick="return confirm('Вы точно хотите удалить?');" >Delete</a>
            </td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
</body>
</html>