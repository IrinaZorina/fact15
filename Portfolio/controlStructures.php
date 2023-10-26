<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_task.css">
</head>
<body>
<div class="main-container">
    <div class="wrapper">
        <h1>Слайд 23</h1>
        <div class="wrapperOne">
            <div class="task">Задание 1</div>
            <form>
                <select>
                        <?php
                        function years ($minYear, $maxYear)
                        {
                            for ($i = $minYear; $i <= $maxYear; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        }

                        $minYear = 1980;
                        $maxYear = 2023;

                        years($minYear, $maxYear);
                        ?>
            </select>
            </form>
        </div>
        <div class="wrapperTwo">
            <div class="task">Задание 2</div>
            <?
                function valuesMultiplesTwo ($minNum, $maxNum)
                {
                    for ($i = $minNum; $i <= $maxNum; $i++) {
                        if ($i % 2 == 0) {
                            echo $i . '<br/>';
                        }
                    };
                };

                $minNum = 1;
                $maxNum = 30;

                valuesMultiplesTwo($minNum, $maxNum);
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 3</div>
            <?
                function numberPi ($minNum, $maxNum)
                {
                    for ($i = $minNum; $i <= $maxNum; $i++) {
                        if ($i % 3 == 0 && $i % 5 == 0) {
                            echo "<b>$i</b>" . '<br/>';
                        } elseif ($i % 3 == 0) {
                            echo "<i>$i</i>" . '<br/>';
                        } else {
                            echo "$i" . '<br/>';
                        }
                    };
                };

                $minNum = 1;
                $maxNum = 50;

                numberPi($minNum, $maxNum);
            ?>
        </div>
        <div class="wrapperFour">
            <div  class="task">Задание 4</div>
                <?php
                function minimumNumberElements ($num1, $num2, $num3, $num4, $str)
                {
                    $a = $num1;
                    $b = $num2;
                    $s = $num3;
                    $sum = $num4;
                    $text = $str;
                    while ($sum < $s) {
                        $sum = $sum + $b / $a;
                        $text = $text . $b . "/" . $a . "+";
                        $a++;
                        $b += 3;
                    }
                    $text = substr($text, 0, strlen($text) - 1);
                    echo $text . "<br>";
                    $a -= 1;
                    echo "На " . $a . " шаг сумма этого ряда(" . $sum . ") станет больше заданого числа(" . $s . ")<br>";
                };

                $num1 = 1;
                $num2 = 1;
                $num3 = mt_rand(10, 20);
                $num4 = 0.0;
                $str = "";

                minimumNumberElements($num1, $num2, $num3, $num4, $str);
                ?>
        </div>
    </div>

<!--    //______!!!_______\\    -->

    <div class="wrapper">
        <h1>Слайд 24</h1>
            <div class="wrapperOne">
                <div  class="task">Задание 1</div>
                <?php
                function sumEvenDigits ($num1, $num2)
                {
                    $int_rand = mt_rand($num1, $num2);
                    $s = $int_rand;

                    $sum = 0;
                    while ($s > 0) {
                        $k = $s % 10;
                        $s = intdiv($s, 10);
                        if ($k % 2 == 0) {
                            $sum += $k;
                        }
                    }
                    echo "Сумма четных цифр числа $int_rand = $sum<br>";
                }

                $num1 = 10;
                $num2 = 100;

                sumEvenDigits($num1, $num2);
                ?>
            </div>
        <div class="wrapperTwo">
            <div  class="task">Задание 2</div>
                <?php
                function orderNondecreasingNumbers ($num1, $num2)
                {
                    $intOne = mt_rand($num1, $num2);
                    $intTwo = $intOne;
                    $text = "";
                    while ($intTwo > 0) {
                        $min = $intTwo % (10);
                        $intThree = intdiv($intTwo, 10);
                        $i = 1;
                        $count = 1;
                        while ($intThree > 0) {
                            $i++;
                            $k = $intThree % (10);
                            if ($k < $min) {
                                $min = $k;
                                $count = $i;
                            }
                            $intThree = intdiv($intThree, 10);
                        }
                        $text = $text . $min;
                        $remainder = $intTwo % (10 ** ($count - 1));
                        $intTwo = intdiv($intTwo, (10 ** $count)) * (10 ** ($count - 1)) + $remainder;
                    }
                    echo "Из числа $intOne путем сортировки в порядке неубыванию получили : $text  <br>";
                }

                $num1 = 100;
                $num2 = 1000;

                orderNondecreasingNumbers($num1, $num2);
                ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 3</div>
                <?php
                function numbersNonincreasingOrder($num1, $num2)
                {
                    $intOne = mt_rand($num1, $num2);
                    $intTwo = $intOne;
                    $text = "";
                    $x = 0;
                    $col = (int)log10($intOne) + 1;
                    while (($intTwo > 0) || ($x < $col)) {
                        $max = $intTwo % (10);
                        $intThree = intdiv($intTwo, 10);
                        $i = 1;
                        $count = 1;
                        while ($intThree > 0) {
                            $i++;
                            $k = $intThree % (10);
                            if ($k > $max) {
                                $max = $k;
                                $count = $i;
                            }
                            $intThree = intdiv($intThree, 10);
                        }
                        $text = $text . $max;
                        $intTwo = intdiv($intTwo, (10 ** $count)) * (10 ** ($count - 1)) + $intTwo % (10 ** ($count - 1));
                        $x++;
                    }
                    echo "Из числа $intOne путем сортировки в порядке невозрастания получили : $text  <br>";
                }

                $num1 = 100;
                $num2 = 1000;

                numbersNonincreasingOrder($num1, $num2)
                ?>
        </div>
    </div>

    <!--    //______!!!_______\\    -->

    <div class="wrapper">
        <h1>Слайд 25</h1>
        <div class="wrapperOne">
            <div  class="task">Задание 1</div>
            <?php
            function columnNumbers ($minNum, $maxNum)
            {
                for ($i = $minNum; $i <= $maxNum; $i++) {
                    echo $i . "<br>";
                };
            };

            $minNum = 5;
            $maxNum = 13;

            columnNumbers($minNum, $maxNum);
            ?>
        </div>
        <div class="wrapperTwo">
            <div  class="task">Задание 2</div>
            <?php
            function numberIterations ($num1)
            {
                $num = $num1;

                for ($i = 0; $num > 50; $i++) {
                    $num = $num / 2;
                }
                echo "При делении 1000 на 2 за $i итераций получим " . $num . " < 50";
            }

            $num = 1000;

            numberIterations($num);
            ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 3</div>
            <?php

            ?>
        </div>
    </div>
</div>

</body>
</html>

