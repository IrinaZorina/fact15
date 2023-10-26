<?php require_once 'inc/header.php' ?>

<main class="page-main">
    <p class="font">Слайд 15</p>
    <p class="font">1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.
    </p>

    <!-- Создам поля ввода -->
    <form action="" method="post">
        <p>
            <input type="text" name="name" id=""><br>
            <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
            <input type="radio" name="radio" value="1" id="">1<br>
            <input type="radio" name="radio" value="2" id="">2<br>
            <input type="checkbox" name="check[]" value="HTML" id="">HTML <br>
            <input type="checkbox" name="check[]" value="CSS" id="">CSS <br>
            <button type="submit">Отправить</button>
        </p>
    </form>
    <!-- выводим массив -->
    <?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    ?>

    <p class="font">2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST</p>

    <!-- Создам поля ввода -->
    <form action="" method="post">
        <p>
            Логин <input type="text" name="name" id=""><br>
            Пароль <input type="password" name="password" id=""><br>
            <button type="submit">Отправить</button>
        </p>
    </form>
    <!-- Выводим масиив -->
    <?php
    // $_POST['password'] = md5($_POST['password']);
    // echo '<pre>';
    // print_r($_POST);
    // echo '<pre>';
    ?>

    <p class="font">3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
    </p>
    <!-- создаю форму ??? -->
    <form action="" method="post">
        <label>
            Выберите логин
            <select name="select" id="">
                <option value="login">login</option>
                <option value="aleksandr">aleksandr</option>
            </select>
        </label>
        <label><input type="text" name="login" placeholder="Введите логин из списка"></label>
        <label>Пароль: <input type="text" placeholder="Введите пароль" name="password"></label>
        <label><input type="submit" name="Отправить" id=""></label>
    </form>
    <pre>
    <?php
    echo "<br>";
    if (isset($_POST['login']) || isset($_POST['password'])) {
        $login = isset($_POST["login"]) ? $_POST['login'] : 1;
        $password = isset($_POST["password"]) ? $_POST['password'] : 1;
        foreach ($_POST as $key => $value) {
            //сравниваю значения которые ввЁл пользователь
            if ($_POST["login"] == 'login' || $_POST["login"] == 'aleksandr' && $_POST["password"] == 'password') {
                echo "Доступ к данным открыт! ";
            } else {
                echo "Ошибка доступа! ";
            }
        }
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
    }
    ?>
</pre>


    <p class="font">4. Создайте форму генерации ссылки с параметром:
        Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
        При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.</p>
    <form action="phpcourse/phpcourse.php" method="get">
        <select name="lab">
            <option value="l1">
                <a href="phpcourse/phpcourse.php?l=1" target="_blank">Лаб1</a>
            </option>
            <option value="l2">
                <a href="phpcourse/phpcourse.php?l=2" target="_blank"> Лаб2</a>
            </option>
            <option value="l3">
                <a href="phpcourse/phpcourse.php?l=3" target="_blank">Лаб3</a>
            </option>
            <option value="l4">
                <a href="phpcourse/phpcourse.php?l=4" target="_blank">Лаб4</a>
            </option>
        </select>
        <p>
            <input type="submit" value="отправить">
        </p>
    </form>

    <p class="font">Слайд 16</p>
    <p class="font">3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
        Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
        если она оказалась более 15, то результат: «У Вас покладистый характер»;
        если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
        если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
        Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
    </p>
    <!-- СоздаЁм форму -->
    <h3>Анкета</h3>
    <form class="form" action=" " method="post">
        <input type="text" name="name" placeholder="Введите имя">
        <input type="text" name="family" placeholder="Введите Фамилию">
        <p>1.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>2.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>3.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>4.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>5.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>6.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>7.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>8.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>9.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>10.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>11.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>12.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>13.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>14.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>15.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>16.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>17.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>18.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>19.
            да <input type="checkbox" name="answer[]" value="0">
            нет <input type="checkbox" name="answer[]" value="1">
        </p>
        <p>
            <input type="submit" name="submit" value="Отправить">
        </p>
    </form>
<?
    $family = $_POST['family'];
    $name = $_POST['name'];
    // print_r($_POST['name']);
    $sum = 0;
    if (isset($_POST['answer'])) {
    $value = isset($_POST['value']) ? $_POST['value'] : 0;
    $answer = isset($_POST['answer']) ? $_POST['answer'] : 0;
    foreach ($answer as $value) {
    $sum = $sum + (int) $value;
    }
    }
    echo "Число баллов = $sum <br>";

     // проверяем условия 
if ($sum > 15) {
        echo  "$name $family У вас покладистый характер!<br>";
    } elseif ($sum > 8 and $sum <= 15) {
        echo  "$name $family Вы не лишены недостатков, но с Вами можно ладить!<br>";
    } elseif ($sum > 0 and $sum <= 8) {
        echo  "$name $family Вашим друзьям можно посочувствовать!<br>";
    }
    echo '<br>';
?>
</main>