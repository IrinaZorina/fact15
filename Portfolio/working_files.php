<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_task.css">
</head>
<body>
<div class="main-container ">
    <div class="wrapper postget">
        <h1>Слайд 12</h1>
        <div class="wrapperOne">
            <div class="task">Задание 1</div>
            <?php
            echo 'Первый вариант файл working_files.php';
            $text = "Hello, world! I'm Alex";
            $filename = __DIR__ . '/hello.txt';

            file_put_contents($filename, $text);
            ?>
            <?php
            echo '<br>';
            echo 'Второй вариант файл working_files.php';
            $text1 = "Hello, world! I'm Alex";
            $filename1 = __DIR__ . '/hello1.txt';

            $fh = fopen($filename1, 'w');
            fwrite($fh, $text1);
            fclose($fh);
            ?>
        </div>
        <div class="wrapperTwo">
            <div class="task">Задание 2</div>
            <?php
            echo 'Решение в файле working_files.php';
            $dir = $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/test';
            if (!is_dir($dir)) {
                mkdir($dir, 0777, True);
            }
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 3</div>
            <?php
            $str = fopen('task_3.txt', 'r');
            $str2 = fread($str, 25);

            $str3 = strstr($str2, ',', true);
//            while ($str2 != NULL){
//                if($str2 == ',') strstr($str2, ',');
//
//            }
            echo $str3;
            fclose($str);
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 4</div>

        </div>
        <div class="wrapperTree">
            <div class="task">Задание 5</div>

        </div>
    </div>
</div>

</body>
</html>

