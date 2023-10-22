<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_tas.css">
</head>
<body>
<div class="main-container ">
    <div class="wrapper postget">
        <h1>Слайд 15</h1>
        <div class="wrapperOne">
            <div>Задание 1</div>
            <?
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
            <div>Задание 2</div>
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

            <form method="post">
                Login: <input type="text" name="login">
                Password: <input type="password" name="password">
                Отправить: <input type="submit" name="submit" value="Отправить">
            </form>
        </div>
        <div class="wrapperTree">
            <div>Задание 3</div>
            <?
                $login = 'admin';
                $pass = 1;

                if ($_POST['login'] === $login && $_POST['password'] === $hash_pass) {
                    echo "Доступ к секретным страницам открыт!";
                } else {
                    echo 'Данные не верны!';
                };
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 4</div>
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
</div>

</body>
</html>

