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
    <div class=" wrapper">
        <h1>Слайд 22</h1>
        <div class="wrapperOne">
            <div>Задание 1</div>
            <?
            $str = 'fact';
            echo $result = str_replace('f', 'F', $str);
            ?>
        </div>
        <div class="wrapperTwo">
            <div>Задание 2</div>
            <?
            $str = 'Филоненко Алексей Андреевич';

            $name = mb_substr($str, 10, 7);
            $surname = mb_substr($str, 0, 9);
            echo $name . " " . $surname;
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 3</div>
            <?
            $str = "Привет, мИр";

            $arrSymbol = mb_str_split($str, 1);
            $count = 0;

            foreach ($arrSymbol as $value){
                if ($value == 'и' || $value == 'И'){
                    $count += 1;
                }
            }

            echo $count;
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 4</div>
            <?
            $str = 'html css php';

            echo $html = mb_substr($str, 0,4);
            echo '<br>';
            echo $css = mb_substr($str, 5,3);
            echo '<br>';
            echo $php = mb_substr($str, 9,3);
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 5</div>
            <?
            $str = 'dsvvvvdv.png';

            $substr = substr($str, -4,4);

            if ($substr == '.png'){
                echo 'да';
            }else {
                echo 'нет';
            }
            ?>
        </div>
    </div>

<!--   ______ -->

    <div class=" wrapper">
        <h1>Слайд 23</h1>
        <div class="wrapperOne">
            <div>Задание 1</div>
            <?
                function str ($string)
                {
                    echo (strlen($string) > 5) ? mb_substr($string, 0, 5) . "..." : $string;
                }

                $string = "String";

                echo str($string);
            ?>
        </div>
        <div class="wrapperTwo">
            <div>Задание 2</div>
            <?
                function strReplace ($str){
                    $a = str_replace('a', 1, $str);
                    $b = str_replace('b', 2, $a);
                    echo $c = str_replace('c', 3, $b);
                }

                $str = 'acbababbcbcbca';
                strReplace($str);
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 3</div>
            <?
                function positionLastLetter ($string)
                {
                    echo "позиция последней буквы 'b' = " . strrpos($string, "b");
                }

                $string = "abc abc abc";

                positionLastLetter($string);
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 4</div>
            <?
                function wordSeparateArrayElement ($string) {
                    print_r(explode(' ',$string));
                }

                $string = "html css php";

                wordSeparateArrayElement ($string);
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 5</div>
            <?
                function numberDaysBetweenDates ($now, $my_date) {
                    $date = $now - $my_date;
                    echo intdiv($date , (60 * 60 * 24));
                }

                $now = strtotime("2021-11-29");
                $my_date = strtotime("1988-11-02");

                numberDaysBetweenDates($now, $my_date);
            ?>
        </div>
    </div>
</div>

</body>
</html>

