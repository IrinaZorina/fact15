<?php
session_start();
$_SESSION['task_session'] = isset($_GET['task_session']) ? $_GET['task_session'] : '';

$_SESSION['task_session_time'] = date("Y-m-d H:i:s");

$name = isset($_GET['name']) ? $_GET['name'] : '';
setcookie('name', $name, time() + 3600);
setcookie('time', date("Y-m-d H:i:s"), time() + 3600);
$count = isset($_COOKIE['count']) ? ++$_COOKIE['count'] : 0;
setcookie('count', $count, time() + 3600);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_task.css">
</head>
<body>
<div class="main-container ">
    <div class="wrapper">
        <h1>Слайд 12 --- Задачи на куки</h1>
        <div class="wrapperOne">
            <div class="wrapperOne">
                <div class="task">Задание 1</div>
                <form method="GET">
                    <input type="text" name="name" value="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>">
                    <input type="submit">
                </form>
                <div>Hello <?= $_COOKIE['name'] ?></div>
            </div>
            <div class="wrapperTwo">
                <div class="task">Задание 2</div>
                <form method="GET">
                    <input type="text" name="time">
                </form>
                <?=
                "Время входа: " . isset($_COOKIE['time']) ? $_COOKIE['time'] : '';
                ?>
            </div>
            <div class="wrapperTree">
                <div class="task">Задание 3</div>
                <div>Вы посетили наш сайт <?= isset($_COOKIE['count']) ? $_COOKIE['count'] : '' ?> раз!</div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <h1>Слайд 12 --- Задачи на сессии</h1>
        <div class="wrapperOne">
            <div class="wrapperTree">
                <div class="task">Задание 1</div>
                <form action="hello.php" method="GET">
                    <input type="text" name="task_session">
                    <input type="submit">
                </form>
            </div>
            <div class="wrapperOne">
                <div class="task">Задание 2</div>
                <form method="GET">
                    <input name="task_session_time">
                </form>
                <?= "Время входа: " . $_SESSION['task_session_time'];
                ?>
            </div>
            <div class="wrapperOne">
                <div class="task">Задание 3</div>

            </div>
        </div>
    </div>
</div>

<div class="main-container ">
    <div class="wrapper">
        <h1>Слайд 13 --- Домашнее задание</h1>
        <div class="wrapperOne">
            <div class="wrapperOne">
                <div class="task">Задание 1</div>
                <?php
                echo 'session_destroy();';
                session_destroy();
                ?>
            </div>
            <div class="wrapperTree">
                <div class="task">Задание 3</div>
                <?php
                if (isset($_GET['color'])) {
                    setcookie('colorCoolie', $_GET['color'], time() + 3600 * 24);
                    $defaultColor = $_GET['color'];
                } else {
                    $defaultColor = (isset($_COOKIE['colorCookie'])) ? $_COOKIE['colorCookie'] : '';
                }
                ?>
                <p style="background-color:<?php echo $defaultColor ?>"></p>
                <form>
                    Выберите цвет фона <select name="color" style="backdrop-color:<?= $defaultColor ?>">
                    <?php
                    $arrayColor = ['#00FA9A', '#48D1CC', '#FFFF00'];
                    foreach ($arrayColor as $color) {
                        echo ($color == $defaultColor) ? "<option selected=\"selected\" value=\"$color\" style=\"background-color:$color \"\>$color</option>" : "<option value=\"$color\" style=\"background-color:$color \">$color</option>";
                    }
                    ?>
                    </select>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>

