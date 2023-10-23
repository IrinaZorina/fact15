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
<h2>Вход</h2>
<form method="post">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Войти">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Хешируем пароль с использованием MD5
    $hashedPassword = md5($password);

    // Проверяем, если логин и пароль совпадают с "admin" и "qwerty"
    if ($login === "admin" && $hashedPassword === md5("qwerty")) {
        // Если совпадают, перенаправляем на другую страницу
        header("Location: autho2.php");
        exit();
    } else {
        echo "Неверный логин или пароль. Попробуйте снова.";
    }
}
?>
