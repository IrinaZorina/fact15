<?php
if (isset($_COOKIE['Page'])?$_COOKIE['Page']:'');
setcookie('Page', $_SERVER['PHP_SELF'], time()+3600);
session_start();
session_unset();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>XAYC</title>
  </head>

  <body>
    <!-- HEADER -->
    <?php require_once 'header.php' ?>

    <!-- MAIN -->
    <main id="main" class="main">
      <div class="container">
        <div class="get_post">
          <div class="get_post-one">
            <p>Slide No. 15 / Task No. 3, lesson 11-12 PHP:</p>
            <br>
            <p>Создать страницу для ввода имени пользователя (login) и пароля (passwd).<br> Если пользователь вводит правильную пару (login/passwd),<br> то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. <br>Login предлагается выбирать из списка.</p>
            <br>
            <p>Answer: <br>
            <a href="/assets/answer_get_post/task_3.php">Решение</a>
            </p>
          </div>
          <br>
          <div class="get_post-two">
            <p>Slide No. 15 / Task No. 4, lesson 11-12 PHP:</p>
            <br>
            <p>Создайте форму генерации ссылки с параметром:<br>
               Создайте форму и в ней добавьте поле со списком выбора –<br> Лаб1, Лаб2, Лаб3, Лаб4<br>
               При нажатии на кнопку должно быть сформирована ссылка <br>следующего вида: phpcourse.php?l=3 ,<br> где 3 – это номер выбранной лабораторной работы.
              </p>
            <br>
            <p>Answer: <br>
            <a href="/assets/answer_get_post/task_4.php">Решение</a>
          </div>
          <div class="get_post-three">
          <p>Slide No. 16 / Task No. 3, lesson 11-12 PHP:</p>
            <br>
            <p>Создайте анкету на форме. Ответ на каждый из вопросов<br> представьте с помощью переключателя («да» или «нет»).<br> По умолчанию задайте везде значение «да».<br>
            Напишите сценарий обработки анкеты: поставьте 1 балл,<br> если был ответ «да» в вопросах с номерами<br> 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15,<br> 16, 17, 18. Подсчитайте сумму набранных баллов:<br>
            если она оказалась более 15, то результат:<br> «У Вас покладистый характер»;<br>
            если сумма в интервале от 8 до 15, то результат:<br> «Вы не лишены недостатков, но с вами можно ладить»;<br>
            если сумма менее 8 баллов, то результат:<br> «Вашим друзьям можно посочувствовать».<br>
            Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
            </p>
            <br>
            <p>Answer: <br>
            <a href="/assets/answer_get_post/task_3-2.php">Решение</a>
            </p>
          </div>
          <div class="get_post-four"></div>
          <div class="get_post-five"></div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>