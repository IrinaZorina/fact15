<?php require_once 'inc/header.php' ?>
<main>
    <div class="name">
        <h1>Шахрай Александр</h1>
    </div>
    <div class="about-container-grid">
        <div class="photo">
        </div>
        <div class="about_me">
            <h2>Обо мне</h2>
            <p>
                <?
                // Текст первой фразы окрасить в произвольный цвет
                $about_me = 'Всем привет. Меня зовут Александр. Мне 31 год.';
                $arr_about_me = explode('. ', $about_me);
                // print_r($arr_about_me);
                echo str_replace($arr_about_me[0], "<span style='color:blue'>  $arr_about_me[0]  </span>", $about_me);
                ?>
            </p>
            <i>
                <p>Я начинаю путь в новое для себя направление веб-разработки и хочу рассказать о том, чем
                    занимаюсь:
                </p>
            </i>
            <ul>
                <li>
                    Моя основная сфера деятельности связана с ритейлом. В послледнее время работал менеджером по
                    логистике.
                </li>
                <li>
                    Любимые увлечения - это чтение книг, спорт, видеоигры, выезды на природу.
                </li>
                <li>
                    Программирование изучаю c 2022 года. Пробовал сам изучать Java, HTML, CSS. Надеюсь в
                    дальнейшем
                    сделать программирование своим основным видом деятельности. Выбирал между вашем курсом и
                    компанией Хекслет.
                    После окончания курса хотел бы устроиться в Факт или в компании партнёры на программиста.
                </li>
            </ul>
        </div>
        <div class="feedback">
            <h2>О курсе</h2>
            <p>
                <?
                //Каждое четное слово окрасить в первый цвет, каждое нечетное слово окрасить во второй цвет. 
                $feedback_me = 'Мнение о курсе сложно составить по нескольким урокам, на данный момент могу отметить небольшое
                количество учащихся, что позволит проработать индивидуально ошибки. Понравился формат обучения и
                внимательность преподавателя к каждому человеку, заставляет включаться в процесс. Надеюсь, что и
                последующие уроки будут проходить для меня комфортно, а материал усваиваться легко и быстро. <strong>P.S Тяжело даются математические задачи.</strong>';
                $arr_feedback_me = explode(' ', $feedback_me);
                // print_r($arr_feedback_me);
                foreach ($arr_feedback_me as $key => $value) {
                    if ($key % 2 == 0) {
                        echo "<span style='color:#A018FF'> $value </span>" . ' ';
                    } else {
                        echo "<span style='color:green'> $value </span>" . ' ';
                    }
                }
                ?>
            </p>
        </div>
    </div>
    </section>
    <section class="kino">
        <div class="kino-name">
            <h1>Мои любимые фильмы</h1>
            <hr>
        </div>
        <div class="kino-flex-container">
            <img src="img/truman.jpg" class="item" alt="#" height="350px" width="250px">
            <img src="img/fightclub_1.jpg" class="item" alt="#" height="350px" width="250px">
            <img src="img/Silicon_Valley.png" class="item" alt="#" height="350px" width="250px">
            <img src="img/mrrobot_21.jpg" class="item" alt="#" height="350px" width="250px">
        </div>
    </section>
    <section class="book">
        <h1>Мои любимые книги</h1>
        <hr>
        <div class="book-grid-container">
            <div class="">
                <img src="img/tekst.jpg" class="item" alt="#" height="300px" width="250px">
            </div>
            <div class="">
                <img src="img/2.jpg" class="item" alt="#" height="300px" width="250px">
            </div>
            <div class="">
                <img src="img/3.jpeg" class="item" alt="#" height="300px" width="250px">
            </div>
            <div class="">
                <img src="img/4.jpg" class="item" alt="#" height="300px" width="250px">
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php' ?>