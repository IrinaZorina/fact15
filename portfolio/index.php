<?php
    print_r($_POST);
    echo "<br>";
    $loginOne = "admin";
    $passwordOne = md5("qwerty");
    $User = "";
    $link = "";
    $nameLink = "";
    if (isset($_POST["passwordUser"])&&isset($_POST["loginUser"])){
        $_POST["passwordUser"] = md5($_POST["passwordUser"]);
        if (($_POST["passwordUser"]==$passwordOne) && ($_POST["loginUser"]==$loginOne)){
            $User =  "Добро пожаловать, $loginOne, вам доступны все страицы";
            $link = "main.php";
            $nameLink = "На главную";
            header('Location: main.php');
        }
        else{
            echo "данные неверны, введите admin qwerty :)";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>

    <form method="post">
        Login : <input type="text" name="loginUser"><br>
        Password : <input type="password" name="passwordUser"><br>
        <br>
        <input type="submit">
    </form>

    <h1><?=$User?></h1>
    <a href="<?=$link?>"><?=$nameLink?></a>    
</body>
</html>