<?php require_once 'inc/header.php' ?>
<main class="page-main">
    <P class="font">15 слайд</P>
    <p class="font">1. Создать функцию, которая сравнивает два числа и возвращает наибольшее.
    </p>

    <?php
    function number($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }
    $a = 30;
    $b = 20;
    $max = number($a, $b);
    echo "Наибольшее число $max";

    ?>

    <p class="font">2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.</p>

    <?

    function hypotenuse($c, $d)
    {
        $h = sqrt(($c * $c) + ($d * $d));
        return $h;
    }
    $length = 5;
    $length2 = 10;
    $result_hypo = hypotenuse($length, $length2);
    echo "Гипотенуза равна $result_hypo";
    ?>

    <p class="font">3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
    </p>

    <?

    function number_limit($a)
    {
        while ($a < 1000000) {
            $a *= 10;
            echo "$a <br>";
        }
        echo 'Вы достигли предела!';
    }
    number_limit(10);

    ?>
    <p class="font">16 слайд</p>
    <P class="font">4. Создать функцию, в которой объявляется массив и случайными элементами.</P>

    <?

    function array_random($a)
    {
        $arr = [];
        for ($i = 0; $i < $a; $i++) {
            $arr[$i] = mt_rand(0, 15);
            echo $arr[$i] . ' ';
        }
        //  echo '<pre>';
        //  print_r($arr);
        //  echo '</pre>';
    }
    $a = 10;
    echo array_random($a);
    ?>

    <p class="font">5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</p>

    <?
    function number_array($arr, $n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = mt_rand(0, 15);
            $sum = $sum + $arr[$i];
            echo $arr[$i] . ' ';
        }
        echo "<br> $sum <br>";
        $average = $sum / count($arr);
        return $average;
    }
    $arr2 = [];
    $avg = number_array($arr2, 6);
    echo "Ответ:Среднее фрифметическое = $avg";

    ?>

    <p class="font">6. Создать функцию, которая принимает строку. Вернуть количество слов в строке.</p>

    <?
    function string_words($str)
    {
        $str = trim($str);
        $word_arr = explode(" ", $str);
        return count($word_arr);
    }
    $str = "                   Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.                 ";
    $words = string_words($str);
    echo "Ответ: Количество слов в строке = $words <br>";
    ?>
</main>

<?php require_once 'inc/footer.php' ?>