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
<div class="main-container ">
    <div class="wrapper">
        <h1>Слайд 15</h1>
        <div class="wrapperOne">
            <div>Задание 1</div>
            <?
                $result = 0;
                $arr = [50, 45, 40, 35, 30];

                foreach ($arr as $elem){
                    $result += $elem;
                };

                echo $result;
            ?>
        </div>
        <div class="wrapperTwo">
            <div>Задание 2</div>
            <?
                $arr = [];

                for ($i=0; $i<=4; $i++){
                    $number = mt_rand(0, 5);
                    echo $arr[$i] = $number;
                };

                echo '<br/>';
                echo '<br/>';

                for ($i=count($arr)-1; $i>=0; $i--){
                    echo $arr[$i];
                };
            ?>
        </div>
        <div class="wrapperTree">
            <div>Задание 3</div>
            <?
                $arr = ['1.jpeg', '2.jpg'];

                $rand_img = mt_rand(0, count($arr)-1);

                echo "<img src='./img/$arr[$rand_img]' width='100px' alt=''";
            ?>
        </div>
    </div>
</div>
<div class="wrapper">
    <h1>Слайд 16</h1>
    <div class="wrapperOne">
        <div>Задание 1</div>
            <?php
            $islands = ["Cuba","Trinidad","Jamaica","Haiti"];
            $months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
            $journal = array();
            $arr_new = array();
            foreach($islands as $nameIsland){
                foreach($months as $nameMonth){
                    $celsius = mt_rand(15,40);
                    $journal[$nameIsland][$nameMonth] = $celsius;
                    if (array_key_exists($nameMonth,$arr_new)){
                        if ($arr_new[$nameMonth] < $celsius){
                            $arr_new[$nameMonth] = $celsius;
                        }
                    }
                    else{
                        $arr_new[$nameMonth] = $celsius;
                    }
                }
            }
            echo "<pre>";
            print_r($journal);
            echo "Массив максимальных температур для островов : <br>";
            print_r($arr_new);
            echo "</pre>";

            ?>
    </div>
    <div class="wrapperTwo">
        <div>Задание 2</div>

    </div>
    <div class="wrapperTree">
        <div>Задание 3</div>

    </div>
</div>

</body>
</html>

