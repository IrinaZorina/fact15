<?php
session_start();
$_SESSION['login'] = isset($_POST['login'])?$_POST['login']:'';
$_SESSION['password'] = isset($_POST['password'])?$_POST['password']:'';

$pass_hash = md5($_SESSION['password']);
$_SESSION['password'] = $pass_hash;

$login = 'Alex';
$password = '1';

if($_SESSION['login'] === $login && $_SESSION['password'] === $pass_hash){
    header('Location: hello_authorization.php');
} else {
    echo 'Введите login и password';
}

//Задание 2

$page = '';
switch ($_SERVER['PHP_SELF']) {
    case '/Portfolio/fact.php':
        $page = 'fact';
        break;
    case '/Portfolio/bitrix.php':
        $page = 'bitrix';
        break;
}

if ($page != '') {
    setcookie('lastPage', $page, time() + 3600 * 24);
}

?>

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
    <form method="POST">
        <p>Login: <input type="text" name="login"></p>
        <p>Password: <input type="password" name="password"></p>
        <input type="submit">
    </form>
    <a href="bitrix.php">Bitrix Page</a>
    <?= '<br>'?>
    <a href="fact.php">Fact Page</a>
</body>
</html>
