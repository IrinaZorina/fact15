<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашняя работа по теме РАБОТА С ФАЙЛАМИ</h1>

        <h2>Задание от 06.11.2023</h2>

        <h3>3.Создать класс строк. Запрограммировать методы поиска подстроки, копирования, замены и удаления заданной подстроки, определения длины строки. (длина строки, поиск подстроки и копирование реализовать самостоятельно, для др. можно использовать стандартные функции замены и удаления).</h3>
        <?php
            //3 Задание
            // Создать класс строк. Запрограммировать методы поиска подстроки,
            //  * копирования, замены и удаления заданной подстроки, определения
            //  * длины строки. (длина строки, поиск подстроки и копирование реализовать
            //  * самостоятельно, для др. можно использовать стандартные функции
            //  * замены и удаления)

            include "inc/Str.php";

            $ExempleString = new Str("a very small string");
            echo "Экземпляр класса Str : ".$ExempleString->txt."<br>";

            $substr = "all";
            echo "В этом экземпляре подстрока '$substr' находится на позиции : ".$ExempleString->FindText($substr)."<br>";

            $position = 14;
            $countCharacter = 3;
            echo "Копия подстроки длиной '$countCharacter' символов с '$position' позиции : ".$ExempleString->CopyText($countCharacter,$position)."<br>";

            $substrBefore = "small";
            $substrAfter = "big";
            echo "Результат замены '$substrBefore' на '$substrAfter' : ".$ExempleString->replaceText($substrBefore,$substrAfter)."<br>";

            echo "Результат удаления '$substrAfter' : ".$ExempleString->DelText($substrAfter)."<br>";
            echo $ExempleString->LenText();

        ?>


    </div>
</div>


<?php require_once "inc/footer.php" ?>