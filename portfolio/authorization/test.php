<?php
session_start();
$_SESSION['login'] = $_POST['login'];
?>

<div>
    Странички: <a href="fact.php">Fact</a> и <a href="bitrix.php">Bitrix</a>.<br><br>
</div>

<?php

if (isset($_SESSION['site'])) {
    echo $_SESSION['login'] . ', в последний раз Вы находились на странице: ' . $_SESSION['site'];
} else {
    echo $_SESSION['login'] . ', зайдите на какую-нибудь страницу выше!';
}

?>