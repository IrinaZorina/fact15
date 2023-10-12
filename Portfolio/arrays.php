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
<div class="main-container wrapper">
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

</body>
</html>

