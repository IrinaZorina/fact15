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
            fclose($str);
            echo $str3;
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 4</div>
            <?php
            $oneFile = file_get_contents('1.txt');
            $str2 = 'Тесет1, Тест1, Тест1. Тест1.';
            file_put_contents('1.txt', $str2);
            $tooFile = file_get_contents('2.txt');
            $str3 = 'В школе идет урок. Класс.';
            file_put_contents('3.txt', $str3);

            $arr = explode('. ', $str2);
            $arr2 = explode('. ', $str3);
            $arr3 = array_merge($arr, $arr2);
            $arr4 = array_unique($arr3);
            $str4 = implode('. ', $arr4);
            $threeFile = file_put_contents('3.txt', $str4);
            echo "Ответ: в файле 3.txt";
            ?>
        </div>
        <div class="wrapperTree">
            <div class="task">Задание 5</div>
            <?php
            $fooFile = array_intersect($arr, $arr2);

            file_put_contents('test.txt', $fooFile);
            echo "Ответ: в файле test.txt";
            ?>
        </div>
    </div>
</div>

</body>
</html>

