<?php require_once 'header/header.php' ?>

<main>
    <p><strong>Слайд №23</strong></p>
    <p>№1. Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки.</p>
    <?php
    for ($i = 1; $i < 30; $i++) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
    ?>
    <br>
    <p>№2. Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным.</p>
    <?php

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<strong>$i</strong>" . '<br>';
        } elseif ($i % 3 == 0) {
            echo "<i>$i</i>" . '<br>';
        } else {
            echo "$i" . "<br>";
        }
    }
    ?>
    <br>
    <p><strong>Слайд №25</strong></p>
    <p>№1. Выведите столбец чисел от 5 до 13.</p>

    <?php
    // FOR
    for ($i = 5; $i <= 13; $i++) {
        echo $i . '<br>';
    }
    ?>
    <br>

    <?php // WHILE
    $i = 5;
    while ($i <= 13) {
        echo $i . '<br>';
        $i++;
    }
    ?><br>

    <p>№2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
    </p>

    <?php // WHILE
    $num = 1000;
    $x = 0; // количество итераций 
    while ($num > 50) {
        $num = $num / 2;
        $x++;
        echo $x . ' = ' . $num . '<br>';
    }
    ?><br>

    <?php // FOR
    $num = 1000;
    for ($i = 1; $num > 50; $i++) {
        $num /= 2;
        echo $i . '= ' . $num . '<br>';
    }
    ?>
    <br>
    <p>№3. Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.
    </p>
    <?php

    $i = mt_rand(0, 10);
    echo "i = $i <br>";
    switch ($i) {
        case '0':
            echo '0, 1, 2, 3, 4, 5, 6, 7, 8 , 9, 10' . "<br>";
            break;
        case '1';
            echo '0, 1, 2, 3, 4, 5, 6, 7, 8 , 9' . "<br>";
            break;
        case '2';
            echo '0, 1, 2, 3, 4, 5, 6, 7, 8' . "<br>";
            break;
        case '3';
            echo '0, 1, 2, 3, 4, 5, 6, 7' . "<br>";
            break;
        case '4';
            echo '0, 1, 2, 3, 4, 5, 6' . "<br>";
            break;
        case '5';
            echo '0, 1, 2, 3, 4, 5' . "<br>";
            break;
        case '6';
            echo '0, 1, 2, 3, 4' . "<br>";
            break;
        case '7';
            echo '0, 1, 2, 3' . "<br>";
            break;
        case '8';
            echo '0, 1, 2' . "<br>";
            break;
        case '9';
            echo '0, 1' . "<br>";
            break;
        case '10';
            echo '0' . "<br>";
            break;
    }
    ?>
    <br>
</main>

<?php require_once 'footer/footer.php' ?>