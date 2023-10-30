<?php
setcookie('name', 'User', time() + 3600); // 1 задание

$date = date('H:i');
// setcookie('name', $_POST["login"], time() + 3600); // 2 задание
// setcookie('date', $date, time() + 3600); // 2 задание

require_once 'inc/header.php';
?>

<main class="page-main">
    <p class="font">Слайд 12</p>
    <p class="font">Задачи на куки</p>
    <p> 1. Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User". После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки)
    </p>

    <?

    // echo 'Hello ' . $_COOKIE['name'];

    ?>

    <p>2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.
    </p>

    <?

    if ($_COOKIE) {
        echo 'Привет, ' . $_COOKIE['name'] . '<br>';
        echo 'Время последнего захода на страницу: ' . $_COOKIE['date'];
    } else {
        echo 'Введите свой логин ниже!';
    }

    ?>

    <? if (empty($_COOKIE)) : ?>
        <form method="post">
            Логин: <input type="text" name="login">
            <input type="submit">
        </form>
    <? endif; ?>

    <p>3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</p>

    <?

    if (!isset($_COOKIE['count'])) {
        $count = 0;
    } else {
        $count = $_COOKIE['count'];
        $count++;
    }
    setcookie('count', $count);
    echo $_COOKIE['name'] . ', Вы посетили наш сайт ' . $_COOKIE['count'] . ' раз!';
    ?>


    <p class="font">Задачи на сессии</p>
    <p>1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".
    </p>

    <?
    session_start();
    $_SESSION['login'] = $_POST['login'];

    ?>

    <form method="post">
        Логин: <input type="text" name="login">
        <input type="submit">
    </form>

    <p>2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран.</p>

    <?
    session_start();
    $date = date('H:i');
    $_SESSION['date'] = $date;
    echo $_SESSION['date'];

    ?>

    <p>3. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.</p>

    <?
    session_start();
    $date = time();
    setcookie('date', $date);
    $_SESSION['date'] = $date;

    echo $_SESSION['date'] - $_COOKIE['date'];


    ?>


</main>



<?php require_once 'inc/footer.php' ?>