<? require_once 'globalFunction.php';
// Проверяем и устанавливаем куки
if (isset($_GET['color'])) {
    setcookie('color', $_GET['color'], time() + 3600 * 24 * 7);
}
// Проверяем условия и меняем цвет подвала
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $value) {
        if ($value == 'green') 
        {
            echo "<link rel='stylesheet' href='stylesFooter/styles_green.css'>";
        } 
        elseif ($value == 'yellow')
         {
            echo "<link rel='stylesheet' href='stylesFooter/styles_yellow.css'>";
         }
         elseif ($value == 'blue')
         {
            echo  "<link rel='stylesheet' href='stylesFooter/styles_blue.css'>";
         }
         elseif ($value == 'red')
         {
            echo  "<link rel='stylesheet' href='stylesFooter/styles_red.css'>";
         }
         elseif ($value == 'violet')
         {
            echo  "<link rel='stylesheet' href='stylesFooter/styles_violet.css'>";
         }
         elseif ($value == 'orange')
         {
            echo  "<link rel='stylesheet' href='stylesFooter/styles_orange.css'>";
         }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/styles_day.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Michroma&family=Noto+Sans+KR&family=Roboto+Condensed:ital,wght@0,400;1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php
    $date = date("H");
    theme($date);
    ?>
</head>

<body>
    <header>
        <div class="navigation">
            <a href="index.php">
                <div class="logotip"></div>
            </a>
            <nav class="nav">
                <div><a href="cycle.php" target="_blank" class="">Циклы</a> </div>
                <div><a href="array.php" target="_blank" class="">Массивы</a> </div>
                <div><a href="string.php" target="_blank" class="">Строки</a> </div>
                <div><a href="function.php" target="_blank" class="">Функции</a> </div>
                <div><a href="get_post.php" target="_blank" class="">GET||POST</a> </div>
                <div><a href="cookie_session.php" target="_blank" class="">COOKIE/SESSION</a></div>
                <div><a href="files.php" target="_blank" class="">Работа с файлами</a> </div>
                <div><a href="authorization/authorization.php" target="_blank" class="">Авторизация</a> </div>
            </nav>
        </div>
    </header>