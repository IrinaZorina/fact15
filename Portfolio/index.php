<?php
function firstSentence($text)
{
    $pos = mb_strlen($text) - 1;
    $posOne = mb_strpos($text, ".");
    $posTwo = mb_strpos($text, "!");
    $posThree = mb_strpos($text, "?");

    (($posOne < $pos) && ($posOne !== false)) ? $pos = $posOne : null;
    (($posTwo < $pos) && ($posTwo !== false)) ? $pos = $posTwo : null;
    (($posThree < $pos) && ($posThree !== false)) ? $pos = $posThree : null;
    $strnew = mb_substr($text, 0, $pos + 1);
    return str_replace($strnew, "<span style=color:#7FFFD4;>" . $strnew . "</span>", $text);
}

function evenWord($string)
{
    $arr = explode(" ", $string);
    $text_new = "";
    for ($i = 0; $i < count($arr); $i++) {
        if ($i % 2 == 0) {
            $text_new .= "<span style=color:#3F888F;> " . $arr[$i] . "</span>";
        } else {
            $text_new .= "<span style=color:#34C924;> " . $arr[$i] . "</span>";
        }
    }
    return $text_new;
}

function numberVowelLetters($array){
    $SumCount = 0;
    foreach($array as $Value){
        preg_match_all ( '#[ауоыиэяюёе]#iu', $Value, $matches);
        $SumCount += count($matches[0]);
    }

    return "Количество гласных букв на странице: $SumCount";
}

function NumberWords($array){
    $SumCount = 0;
    foreach($array as $Value){
        $SumCount += count(explode(' ',$Value));
    }

    return "Количество слов на странице:  $SumCount";
}

function numberDaysBetweenDates (){
    $now = time();
    $your_date = strtotime("1988-11-02");
    $datediff = $now - $your_date;

    return date('d.m.Y', $your_date)." - дата рождения, ".date('d.m.Y', $now)." - текущее значение. Разность - ".intdiv($datediff , (60 * 60 * 24))." дня.<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My resume</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Main container -->
<div class="main-container">
    <!-- Main container section -->
    <div class="main-content-section">
        <!-- About me section -->
        <div class="about-me-section">
            <h2 class="about-me-proffesion">Beginner Frontend Developer</h2>
            <h1 class="about-me-name">Alexey Filonenko</h1>
        </div>

        <!-- My projects section -->
        <div class="my-projects-section">
            <h3 class="main-content-title">Projects</h3>

            <ol class="my-projects-list">
                <li class="my-projects-item">
                        <span class="my-projects-text">
                            <a href="https://alexfilonenko88.github.io/goit-markup-hw-08/" class="my-projects-link">Индивидуальный проект</a>
                            .........
                            <span class="my-projects-bracet">[<span
                                        class="my-projects-bracet"> HTML5, CSS3 </span>]</span>
                        </span>
                </li>
                <li class="my-projects-item">
                        <span class="my-projects-text">
                            <a href="https://sharvashidze.github.io/positiveteam/" class="my-projects-link">Командный проект</a>
                            .........
                            <span class="my-projects-bracet">[<span
                                        class="my-projects-bracet"> HTML5, CSS3 </span>]</span>
                        </span>
                </li>
                <li>
                        <span class="my-projects-text">
                            <a href="https://alexfilonenko88.github.io/dop-practis/" class="my-projects-link">Командный проект</a>
                            ..........
                            <span class="my-projects-bracet">[<span
                                        class="my-projects-bracet"> HTML5, CSS3 </span>]</span>
                        </span>
                </li>
                <li class="my-projects-item">
                        <span class="my-projects-text">
                            <a href="https://alexfilonenko88.github.io/My-resume/"
                               class="my-projects-link">Мое резюме</a>
                            .........
                            <span class="my-projects-bracet">[<span
                                        class="my-projects-bracet"> HTML5, CSS3 </span>]</span>
                        </span>
                </li>
            </ol>


        </div>

        <!-- My work experience section -->
        <div class="my-work-experience-section">

            <!-- Company 3 -->
            <div class="my-work-experience-company-block">
                <h4 class="my-work-experience-position">Учебные задания Факт Академия</h4>
                <a href="controlStructures.php" class="my-work-experience-period">Управляющие констукции (циклы)
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="arrays.php" class="my-work-experience-period">Массивы
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="string.php" class="my-work-experience-period">Строки
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="functions.php" class="my-work-experience-period">Функции
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="postget.php" class="my-work-experience-period">Pos, get запросы
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="cookie-session.php" class="my-work-experience-period">Cookie, session
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <a href="working_files.php" class="my-work-experience-period">Работа с файлами
                    <spam class="my-work-experience-divider">|</spam>
                </a>
                <ul class="my-work-experience-duties">
                    <li class="my-work-experience-duty">Семантически, валидная верска двух проектов (один личный и один
                        камандный проект); при разработке используется адаптивность.
                    </li>
                </ul>
                <h1><a href="handler_authorization.php">Авторизация</a></h1></h1>
                <div>
                    <p>
                        <?php
                        $about_my = 'Привет! Меня зовут Алексей. Изучать программирвоание начал 2 года назад. Первые шаги начались с верстки, javascript, фрейворка react.';
                        echo firstSentence($about_my);
                        ?>
                    </p>
                    <p>
                        <?php
                        $hobby = 'В этом году начала интересовать языком программирвоания php. Узнал что существует фрейморк
                        bitrix.';
                        echo $hobby;
                        ?>
                    </p>
                    <p>
                        <?php
                        $string = 'Записался на обучение bitrix и php в компанию Факт Академия. Курс в компании заинтерсовал своими
                        регулярными живывми вебинарами, возможностью на прямую общаться с преподователем. Занятия
                        проходят системно, материал интерсный, преподователи сложнй материал объясняю несколько раз.';
                        echo evenWord($string);
                        ?>
                    </p>
                    <div>Статистика по странице</div>
                    <div>
                        <?php
                        echo '<br/>';
                        echo numberVowelLetters([$about_my, $hobby, $string]);
                        echo '<br/>';
                        echo NumberWords([$about_my, $hobby, $string]);
                        echo '<br/>';
                        echo numberDaysBetweenDates();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar section -->

    <aside class="sidebar-section">
        <img class="my-photo" src="img/photo1.jpg" loading="lazy " alt="my photo">

        <!-- Contacts section -->
        <div class="contacts-section">
            <h3 class="sidebar-title">Contacts</h3>
            <div>
                <spam class="contacts-section-type">T:</spam>
                <a class="contacts-section-type-link" href="tel:+77777777777">+7 909 468 86 60</a>
            </div>
            <div>
                <spam class="contacts-section-type">E:</spam>
                <a class="contacts-section-type-link"
                   href="mailto:chornyiav@gmail.com">aleksey.filonenko15@yandex.ru</a>
            </div>

        </div>

        <!-- Tech Skills section -->
        <div class="tech-skills-section">
            <h3 class="sidebar-title">Tech Skills</h3>
            <ul class="tech-skills-list">
                <li class="tech-skills-item"><span class="tech-skills-item-text">HTML5</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">CSS3</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">GIT</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">GIT HUB</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">JavaScript</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">PHP</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Bitrix Framework</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Trello</span></li>
                <!-- <li class="tech-skills-item"> <span class="tech-skills-item-text">WebPack</span></li> -->
                <!-- <li class="tech-skills-item"> <span class="tech-skills-item-text">React.js</span></li>
                <li class="tech-skills-item"> <span class="tech-skills-item-text">Node.js</span></li> -->
            </ul>
        </div>

        <!-- Soft Skills section -->
        <div class="tech-skills-section">
            <h3 class="sidebar-title">Soft Skills</h3>
            <ul class="tech-skills-list">
                <li class="tech-skills-item"><span class="tech-skills-item-text">Scrum</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Teamwork</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Пунктуальность</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Организованность</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Ответсвенность</span></li>
            </ul>
        </div>

        <!-- Hobby section -->
        <div class="tech-skills-section">
            <h3 class="sidebar-title">Hobby</h3>
            <ul class="tech-skills-list">
                <li class="tech-skills-item"><span class="tech-skills-item-text">Чтение книг</span></li>
                <li class="tech-skills-item"><span class="tech-skills-item-text">Йога, цигун</span></li>
            </ul>
        </div>

    </aside>

</div>

</body>
</html>