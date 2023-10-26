<?php
session_start();

echo 'Приветствую, ' . $_SESSION['login'] . '!';

//var_dump($_SESSION['login']);
//exit();