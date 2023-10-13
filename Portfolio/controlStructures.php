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
                        for($i = 1980; $i <= 2023; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
            </select>
            </form>
        </div>
        <div class="wrapperTwo">
            <div class="task">Задание 2</div>
            <?
                //1
                for($i = 1; $i <= 30; $i++){
                    if($i % 2 == 0){
                        echo $i . '<br/>';
                    }
                };
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 3</div>
            <?
                //2
                for ($i = 1; $i <= 50; $i++) {
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        echo "<b>$i</b>" . '<br/>';
                    } elseif ($i % 3 == 0) {
                        echo "<i>$i</i>" . '<br/>';
                    } else {
                        echo "$i" . '<br/>';
                    }
                };
            ?>
        </div>
        <div class="wrapperFour">
            <div  class="task">Задание 4</div>
                <?php
                $a=1;
                $b=1;
                $s=mt_rand(10,20);
                $sum = 0.0;
                $text = "";
                while ($sum < $s){
                    $sum = $sum + $b/$a;
                    $text=$text.$b."/".$a."+";
                    $a++;
                    $b+=3;
                }
                $text = substr ($text, 0, strlen ($text)-1);
                echo $text."<br>";
                $a-=1;
                echo "На ".$i." шаг сумма этого ряда(".$sum.") станет больше заданого числа(".$s.")<br>";
                ?>
        </div>
    </div>

<!--    //______!!!_______\\    -->

    <div class="wrapper">
        <h1>Слайд 24</h1>
            <div class="wrapperOne">
                <div  class="task">Задание 1</div>
                <?php
                $int_rand=mt_rand(10,1000);
                $s = $int_rand;

                $sum = 0;
                while ($s > 0){
                    $k = $s%10;
                    $s = intdiv($s,10);
                    if ($k%2==0) {
                        $sum += $k;
                    }
                }
                echo "Сумма четных цифр числа $int_rand = $sum<br>";
                ?>
            </div>
        <div class="wrapperTwo">
            <div  class="task">Задание 2</div>
                <?php
                $intOne=mt_rand(100,10000);
                $intTwo = $intOne;
                $text = "";
                while ($intTwo > 0){
                    $min = $intTwo%(10);
                    $intThree = intdiv($intTwo,10);
                    $i = 1;
                    $count = 1;
                    while ($intThree > 0) {
                        $i++;
                        $k = $intThree%(10);
                        if ($k<$min) {
                            $min = $k;
                            $count = $i;
                        }
                        $intThree = intdiv($intThree,10);
                    }
                    $text = $text.$min;
                    $remainder = $intTwo%(10**($count-1));
                    $intTwo = intdiv($intTwo,(10**$count))*(10**($count-1))+$remainder;
                }
                echo "Из числа $intOne путем сортировки в порядке неубыванию получили : $text  <br>";
                ?>
        </div>
        <div class="wrapperTree">
            <div  class="task">Задание 3</div>
                <?php
                $intOne=mt_rand(100,10000);
                $intTwo = $intOne;
                $text = "";
                $x = 0;
                $col = (int) log10($intOne)+1;
                while (($intTwo > 0) || ($x<$col)){
                    $max = $intTwo%(10);
                    $intThree = intdiv($intTwo,10);
                    $i = 1;
                    $count = 1;
                    while ($intThree > 0) {
                        $i++;
                        $k = $intThree%(10);
                        if ($k>$max) {
                            $max = $k;
                            $count = $i;
                        }
                        $intThree = intdiv($intThree,10);
                    }
                    $text = $text.$max;
                    $intTwo = intdiv($intTwo,(10**$count))*(10**($count-1))+$intTwo%(10**($count-1));
                    $x++;
                }
                echo "Из числа $intOne путем сортировки в порядке невозрастания получили : $text  <br>";
                ?>
        </div>
    </div>
</div>

</body>
</html>

