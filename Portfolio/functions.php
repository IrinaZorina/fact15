<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_tas.css">
</head>
<body>
<div class="main-container">
    <div class="wrapper">
        <h1>Слайд 15</h1>
        <div class="wrapperOne">
            <div class="task">Задание 1</div>
            <?
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);

                function maxNumber ($num1, $num2) {
                    if($num1 > $num2) {
                        return $num1;
                    } else {
                        return $num2;
                    }
                };

                echo maxNumber($num1, $num2);
            ?>
        </div>
        <div class="wrapperFour">
            <div  class="task">Задание 2</div>
                <?php
                    function hypotenuseLength ($a=3, $b=5){
                            $c = ($a**2) + ($b**2);
                            return sqrt($c);

                    };

                    echo hypotenuseLength();
                ?>
        </div>
        <div class="wrapperFour">
            <div  class="task">Задание 3</div>
            <?php
                function randNumber ($num = 10){
                    for($i=1; $i<=$num; $i++){
                        $num *= 10;
                        echo "$num <br>";

                        if($num === 1000000){
                            echo '<br>';
                            echo 'Вы достигли предела';
                            break;
                        }
                    }
                }

                echo randNumber();
            ?>
        </div>
    </div>

<!--    //______!!!_______\\    -->

    <div class="wrapper">
        <h1>Слайд 16</h1>
            <div class="wrapperOne">
                <div  class="task">Задание 1</div>
                <?php
                    function randNumArr ($min = 1, $max = 10){
                        $arr=[];
                        for ($i=0; $i<=10; $i++){
                            $arr[$i] = rand($min, $max);
                        }
                        return $arr;
                    }

                    print_r(randNumArr());
                ?>
            </div>
        <div class="wrapperTwo">
            <div  class="task">Задание 2</div>
                <?php
                    $arr = randNumArr();

                    function arithmeticMean($arr){
                        $countArr = count($arr);
                        $sum = 0;

                        foreach ($arr as $value){
                            $sum += $value;
                        }

                        return $sum / $countArr;
                    }

                    echo arithmeticMean($arr);
                ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 3</div>
                <?php
                    $string = 'Hello world!';

                    function strLenght ($str){
                        return count(explode(' ', $str));
                    }

                    print_r(strLenght($string));
                ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 4</div>
            <?php

                $num = 10;
                function fib($num) {
                    if($num == 0) return 0;

                    if($num == 1 || $num == 2){
                        return 1;
                    } else {
                        return fib($num - 1) + fib($num - 2);
                    }
                }

                echo fib($num);
            ?>
        </div>
    </div>

    <!--    //______!!!_______\\    -->

    <div class="wrapper">
        <h1>Слайд 17</h1>
        <div class="wrapperOne">
            <div  class="task">Задание 3</div>
            <?php
                function reverseOrderLetters($string)
                {
                    $strrev = "";

                    for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
                        $strrev .= mb_substr($string, $i, 1, "UTF-8");
                    }

                    return $strrev;
                };

                $string = 'HTML, CSS, PHP, BITRIX';

                echo reverseOrderLetters($string);
            ?>
        </div>
        <div class="wrapperTwo">
            <div  class="task">Задание 4</div>
            <?php
                function lenghtSting ($str) {
                    return strlen($str);
                }

                $str = 'HTML, CSS, PHP, BITRIX';

                echo lenghtSting($str);
            ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 5</div>
            <?php
                function outputtingLetterNewLine ($str){
                    echo nl2br($str, true);
                }

                $str = "HTML,\r\n CSS,\r\n PHP,\r\n BITRIX";

                outputtingLetterNewLine($str);

            ?>
        </div>
    </div>
</div>

</body>
</html>

