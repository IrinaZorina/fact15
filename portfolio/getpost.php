<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Слайд 15 задание 2</p>
<p>Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST</p>
<form method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Войти">
    <br>
    <br>
    <a class="button" href="secret.php">Ссылка на 3 задание 15 слайд</a>
</form>
<br>
<p>Слайд 15 задание 4</p>
<p>Создайте форму генерации ссылки с параметром:
    Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
    При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы
</p>
<br>
<br>
<form action="" method="GET">
    <label for="lab">Выберите лабораторную работу:</label>
    <select name="lab" id="lab">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
        <option value="4">Лаб4</option>
    </select>
    <br>
    <input type="submit" value="Сгенерировать ссылку">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashedPassword = md5($password);
    $_POST["hashed_password"] = $hashedPassword;
    echo "Имя пользователя: " . $username . "<br>";
}
if (isset($_GET['lab'])) {
    $selectedLab = $_GET['lab'];
    $link = "phpcourse.php?l=" . $selectedLab;
    echo "Сгенерированная ссылка: <a href='$link'>$link</a>";
}
?>
<br>
<br>
<br>
<a class="button" href="anketa.php">Ссылка на 3 задание 16 слайд</a>
</body>
</html>
