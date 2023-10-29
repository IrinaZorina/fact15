<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашняя работа по теме GET/POST</h1>

        <h2>Слайд №15</h2>

        <h3>3.Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</h3>
        <p>Реализованно на странице index.php этого проекта</p>


        <h3>4.Создайте форму генерации ссылки с параметром:
            Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
            При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.</h3>
        <form method="GET">
            <!-- Login : <input type="text" name="loginUser"><br>
            Password : <input type="password" name="passwordUser"><br> -->

            <label for="lab">Выберите лабораторную работу</label>
            <select id="lab" name="l">
                <option value=1>Лаб1</option>
                <option value=2>Лаб2</option>
                <option value=3>Лаб3</option>
                <option value=4>Лаб4</option>
            </select>

            <br>
            <input type="submit">
        </form>


        <h2>Слайд №16</h2>
        <h3>3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
            Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
            если она оказалась более 15, то результат: «У Вас покладистый характер»;
            если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
            если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
            Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
        </h3>

        <form action="" method="post">
            Имя : <input type="text" name="name" id=""><br>
            Вопрос №1 :<br>
            <input type="radio" checked name="item[0]" id="" value=1>Да <br>
            <input type="radio" name="item[0]" id="" value=0>Нет <br>
            Вопрос №2 :<br>
            <input type="radio" checked name="item[1]" id="" value=1>Да <br>
            <input type="radio" name="item[1]" id="" value=0>Нет <br>
            Вопрос №3 :<br>
            <input type="radio" checked name="item[2]" id="" value=1>Да <br>
            <input type="radio" name="item[2]" id="" value=0>Нет <br>
            Вопрос №4 :<br>
            <input type="radio" checked name="item[3]" id="" value=1>Да <br>
            <input type="radio" name="item[3]" id="" value=0>Нет <br>
            Вопрос №5 :<br>
            <input type="radio" checked name="item[4]" id="" value=1>Да <br>
            <input type="radio" name="item[4]" id="" value=0>Нет <br>
            Вопрос №6 :<br>
            <input type="radio" checked name="item[5]" id="" value=1>Да <br>
            <input type="radio" name="item[5]" id="" value=0>Нет <br>
            Вопрос №7 :<br>
            <input type="radio" checked name="item[6]" id="" value=1>Да <br>
            <input type="radio" name="item[6]" id="" value=0>Нет <br>
            Вопрос №8 :<br>
            <input type="radio" checked name="item[7]" id="" value=1>Да <br>
            <input type="radio" name="item[7]" id="" value=0>Нет <br>
            Вопрос №9 :<br>
            <input type="radio" checked name="item[8]" id="" value=1>Да <br>
            <input type="radio" name="item[8]" id="" value=0>Нет <br>
            Вопрос №10 :<br>
            <input type="radio" checked name="item[9]" id="" value=1>Да <br>
            <input type="radio" name="item[9]" id="" value=0>Нет <br>
            Вопрос №11 :<br>
            <input type="radio" checked name="item[10]" id="" value=1>Да <br>
            <input type="radio" name="item[10]" id="" value=0>Нет <br>
            Вопрос №12 :<br>
            <input type="radio" checked name="item[11]" id="" value=1>Да <br>
            <input type="radio" name="item[11]" id="" value=0>Нет <br>
            Вопрос №13 :<br>
            <input type="radio" checked name="item[12]" id="" value=1>Да <br>
            <input type="radio" name="item[12]" id="" value=0>Нет <br>
            Вопрос №14 :<br>
            <input type="radio" checked name="item[13]" id="" value=1>Да <br>
            <input type="radio" name="item[13]" id="" value=0>Нет <br>
            Вопрос №15 :<br>
            <input type="radio" checked name="item[14]" id="" value=1>Да <br>
            <input type="radio" name="item[14]" id="" value=0>Нет <br>
            Вопрос №16 :<br>
            <input type="radio" checked name="item[15]" id="" value=1>Да <br>
            <input type="radio" name="item[15]" id="" value=0>Нет <br>
            Вопрос №17 :<br>
            <input type="radio" checked name="item[16]" id="" value=1>Да <br>
            <input type="radio" name="item[16]" id="" value=0>Нет <br>
            Вопрос №18 :<br>
            <input type="radio" checked name="item[17]" id="" value=1>Да <br>
            <input type="radio" name="item[17]" id="" value=0>Нет <br>
            Вопрос №19 :<br>
            <input type="radio" checked name="item[18]" id="" value=1>Да <br>
            <input type="radio" name="item[18]" id="" value=0>Нет <br>
            <br>
            <input type="submit">
        </form>

        <?php
            echo "массив POST : ";
            print_r($_POST);
            echo "<br>";
            if (isset($_POST["name"])&& isset($_POST["item"])){
                // print_r($_GET["item"]);
                $arrYes = [3,9,10,13,14,19];
                $arrNo = [1,2,4,5,6,7,8,11,12,15,16,17,18];
                $sum = 0;
                foreach($_POST["item"] as $key=>$value){
                    if((array_search($key+1, $arrYes)!==false)&&($value==1)){
                        $sum++;
                    }
                    elseif((array_search($key+1, $arrNo)!==false)&&($value==0)){
                        $sum++;
                    }
                }
                echo "Вы набрали : $sum баллов <br>";
                if($sum>=15){
                    echo "У Вас покладистый характер";
                }
                elseif(($sum>=8)&&($sum<15)){
                    echo "Вы не лишены недостатков, но с вами можно ладить";
                }
                else{
                    echo "Вашим друзьям можно посочувствовать";
                }
            }
        ?>


        </div>
</div>


<?php require_once "inc/footer.php" ?>