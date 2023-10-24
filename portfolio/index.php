<?php
    setcookie("login",(isset($_POST["loginUser"]))?$_POST["loginUser"]:"",time()+3600*24*7);

    $access = false;
    $message = "";
    if (isset($_POST["passwordUser"])&&isset($_POST["loginUser"])){
        $_POST["passwordUser"] = md5($_POST["passwordUser"]);
        switch($_POST["loginUser"]){
            case "admin":
                $access = $_POST["passwordUser"]==md5("qwerty");
                break;
            case "user":
                $access = $_POST["passwordUser"]==md5("user");
                break;
            case "guest":
                $access = $_POST["passwordUser"]==md5("");
                break;
        }

        if ($access){
            header('Location: main.php');
        }
        else{
            $message =  "данные неверны, можете зайти как гость, пароль пустой :)";
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
    <h1>Добро пожаловать на страницу авторизации</h1>
    <br>
    <br>

    <form method="post">
        Login : <select name="loginUser" id="">
            <option value="admin">admin</option>
            <option value="user">user</option>
            <option value="guest">guest</option>
        </select><br>
        Password : <input type="password" name="passwordUser"><br>
        <br>
        <input type="submit">
    </form>


    <br>
    <br>
    <p><?=$message?></p>
</body>
</html>