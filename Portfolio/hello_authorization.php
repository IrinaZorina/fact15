<?php
session_start();

echo 'Приветствую, ' . $_SESSION['login'] . '!';
echo '<br>';
echo (isset($_COOKIE['lastPage'])) ? 'В прошлый раз вы посещали страницу ' . $_COOKIE['lastPage'] : '';