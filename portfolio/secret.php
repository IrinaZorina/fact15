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
<p>Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка(Admin/qwerty)</p>

<form method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Войти">
    <br>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredLogin = $_POST['username'];
    $enteredPassword = $_POST['password'];
    $expectedLogin = 'admin';
    $expectedPassword = 'qwerty';

    if ($enteredLogin === $expectedLogin && $enteredPassword === $expectedPassword) {
        header('Location: secret2.php');
        exit();
    } else {
        echo "Неправильный логин или пароль. Попробуйте снова.";
    }
}
?>
</body>
</html>
