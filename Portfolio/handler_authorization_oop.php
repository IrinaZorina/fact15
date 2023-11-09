<?php
session_start();
require_once 'Class/Authorization.php';

//$_SESSION['login'] = isset($_POST['login']) ? $_POST['login'] : '';
$SessionLogin = isset($_POST['login']) ? $_POST['login'] : '';
$_SESSION['password'] = isset($_POST['password']) ? $_POST['password'] : '';

$localhost = 'localhost';
$username = 'fact';
$password = '123';
$dbname = 'project';

$conn = mysqli_connect($localhost, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

$arr = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM users"), MYSQLI_ASSOC);

$pass_hash = md5($_SESSION['password']);

$auth = new Authorization();
$auth->verification_data($arr, $SessionLogin, $pass_hash);

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
    <p>Введите login и password:</p>
    <p>Login: <input type="text" name="login"></p>
    <p>Password: <input type="password" name="password"></p>
    <input type="submit">
</form>
</body>
</html>
