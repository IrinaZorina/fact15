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
        <?php session_start();?>

        <nav class="navbar-defaultmenu">
            <div class="container">
                <div class="navbar-collapse">
                    <div class="navbar-nav">
                        <div class="nav-link"> <a href="main.php">Главная страница</a></div>
                        <div class="nav-cycles"> <a href="content-cycles.php">Циклы</a></div>
                        <div class="nav-arrays"> <a href="content-arrays.php">Массивы</a></div>
                        <div class="nav-string"> <a href="content-string.php">Строки</a></div>
                        <div class="nav-get_post"> <a href="content-get_post.php">GET/POST</a></div>

                    </div>
                </div>
            </div>
            <i></i>
        </nav>
    </header>
