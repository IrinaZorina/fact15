<?php
    session_start();

    $page  ="";
    switch($_SERVER["PHP_SELF"]){
        case "/fact.php":
            $page="fact";
            break;
        case "/bitrix.php":
            $page="bitrix";
            break;
    }
    if ($page<>""){
        setcookie("lastPage",$page,time()+3600*24*7);
    }
    if(isset($_GET["color"])){
        setcookie("colorCookie",$_GET["color"],time()+3600*24*7);
        $defaultColor = $_GET["color"];
    }
    else{
        $defaultColor = (isset($_COOKIE["colorCookie"]))?$_COOKIE["colorCookie"]:"";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Портфолио</title>
</head>
<body>
    <header>

        <nav class="navbar-defaultmenu">
            <div class="container">
                <div class="navbar-collapse">
                    <div class="navbar-nav">
                        <div class="nav-link"> <a href="main.php">Главная страница</a></div>
                        <div class="nav-cycles"> <a href="content-cycles.php">Циклы</a></div>
                        <div class="nav-arrays"> <a href="content-arrays.php">Массивы</a></div>
                        <div class="nav-string"> <a href="content-string.php">Строки</a></div>
                        <div class="nav-get_post"> <a href="content-get_post.php">GET/POST</a></div>
                        <div class="nav-files"> <a href="content-files.php">Работа с файлами</a></div>
                        <div class="nav-OOP"> <a href="content-oop.php">ООП</a></div>
                        <div class="nav-fact"> <a href="fact.php">fact</a></div>
                        <div class="nav-bitrix"> <a href="bitrix.php">bitrix</a></div>

                    </div>
                </div>
            </div>
            <i></i>
        </nav>
    </header>
