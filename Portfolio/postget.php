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
    <div class="wrapper postget">
        <h1>Слайд 15</h1>
        <div class="wrapperOne">
            <div class="task">Задание 1</div>
            <?php
            print_r('Вывод input: ' . $_GET['input']);
            echo '<br>';
            echo 'Вывод textarea: ' . $_GET['textarea'];
            echo '<br>';
            echo 'Вывод radio: ' . $_GET['radio'];
            echo '<br>';
            echo 'Вывод checkbox: ' . $_GET['checkbox'];
            echo '<br>';
            echo '<br>';
            ?>
            <form method="get">
                <input type="text" name="input">
                <textarea name="textarea"></textarea>
                <fieldset>
                    <label>
                        <input type="radio" name="radio">
                    </label>
                    <label>
                        <input type="radio" name="radio">
                    </label>
                    <label>
                        <input type="radio" name="radio">
                    </label>
                </fieldset>
                <input type="checkbox" name="checkbox">
                <input type="checkbox" name="checkbox">
                <input type="checkbox" name="checkbox">
                <input type="submit">
            </form>

        </div>
        <div class="wrapperTwo">
            <div class="task">Задание 2</div>
            <?php
            echo '<br>';
            print_r($_POST['login']);
            echo '<br>';
            print_r($_POST['password']);
            echo '<br>';
            $hash_pass = md5($_POST['password']);
            $_POST['password'] = $hash_pass;
            echo '<br>';
            print_r($_POST['password']);
            ?>

            <form method="POST">
                Login: <input type="text" name="login">
                Password: <input type="password" name="password">
                Отправить: <input type="submit" name="submit" value="Отправить">
            </form>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 3</div>
            <?php
                $login = 'admin';
                $pass = '1';

                if ($_POST['login'] == $login && $_POST['password'] === $hash_pass) {
                    echo "Доступ к секретным страницам открыт!";
                } else {
                    echo 'Данные не верны!';
                };
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 4</div>
                <form method="get">
                    <select name="I">
                        <option value="1">Лаб1</option>
                        <option value="2">Лаб2</option>
                        <option value="3">Лаб3</option>
                        <option value="4">Лаб4</option>
                    </select>
                    <input type="submit" value="Отправить">
                </form>
        </div>
    </div>

    <div class="wrapper postget">
        <h1>Слайд 16</h1>
        <div class="wrapperOne">
            <div class="task">Задание 1</div>
            <form method="POST">
                <p>Логин:<input type="text" name="login"></p>
                <p>Комментарии:<input type="text" name="comments"></p>
                <input type="submit">
            </form>
            <?php
            $login = $_POST['login'];
            $comments = $_POST['comments'];

            $to = '\OpenServer\userdata\temp\email';
            $subject = "Test";
            $message = 'Login ' . htmlspecialchars($login) . ' ' . 'Comments ' . htmlspecialchars($comments);
            $headers = "From Test";
            mail($to, $subject, $message, $headers);
            ?>
        </div>
        <div class="wrapperTwo">
            <div class="task">Задание 2</div>
            <form method="POST">
                <p>Логин:<input type="text" name="login"></p>
                <p>Пароль:<input type="text" name="password"></p>
                <input type="submit">
            </form>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 3</div>

        </div>
    </div>
</div>

</body>
</html>

