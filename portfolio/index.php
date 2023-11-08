<?php
    include "inc/identUser.php";

    $entry = new identUser();
    $conn = $entry->existDatabase();

    setcookie("login",(isset($_POST["loginUser"]))?$_POST["loginUser"]:"",time()+3600*24*7);

    $access = false;
    $message = "";
    if (isset($_POST["passwordUser"])&&isset($_POST["loginUser"])){
        $_POST["passwordUser"] = md5($_POST["passwordUser"]);
        if ($entry->identification($_POST["loginUser"],$_POST["passwordUser"])){
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
            <?php 
                foreach($entry->listOfUsers() as $val){
                    echo "<option value=$val[0]>$val[0]</option><br>";
                }
            ?>
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

<?php     $entry->outputBase(); ?>