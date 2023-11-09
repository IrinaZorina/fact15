<?php
session_start();

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
