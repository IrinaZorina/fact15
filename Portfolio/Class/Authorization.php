<?php
$localhost = 'localhost';
$username = 'fact';
$password = '123';
$dbname = 'project';

$conn = mysqli_connect($localhost, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

$arr = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM users"), MYSQLI_ASSOC);

class Authorization
{
    public function verification_data(array $arr, string $SessionLogin, string $pass_hash)
    {
        foreach ($arr as $value) {
            if ($SessionLogin === $value['login'] && $pass_hash === $value['password']) {
                echo 'login и password верны!!!';
            }
        }

        if (!($SessionLogin === $value['login']) && !($pass_hash === $value['password'])) {
            echo 'не верные login и password !!!';
        }

    }
}
