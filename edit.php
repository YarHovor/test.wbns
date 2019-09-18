<?php

include_once("connection.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $first_name=$_POST['first_name'];
    $second_name=$_POST['second_name'];
    $email=$_POST['email'];

    $result = mysqli_query($db, "UPDATE table_info SET first_name ='$first_name',second_name='$second_name',email='$email' WHERE id=$id");
    header("Location: index.php");
}

?>

<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php"><input type="submit" value="Главная"></a>
    <br/><br/>
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>First name</td>
                <td><input type="text" name="first_name" value="<?php echo $first_name;?>"></td>
            </tr>
            <tr>
                <td>Second name</td>
                <td><input type="text" name="second_name" value="<?php echo $second_name;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Обновить"></td>
            </tr>
        </table>
    </form>
</body>
</html>