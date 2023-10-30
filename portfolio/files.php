<?php require_once 'inc/header.php' ?>

<main class="page-main">
    <p class="font">Слайд 12</p>
    <p>1. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.</p>

    <?

    // 1 вариант
    // $openFile = fopen('test/hello.txt', 'w');
    // $str = "Hello, world! I'm Aleksandr";
    // fwrite($openFile, $str);

     // 2 вариант
    // $openFile = file_get_contents('test/hello.txt');
    // $str = 'Hello, world! I am Aleksandr!';
    // file_put_contents('test/hello.txt', $str);

    ?>
    <p>2. Создайте папку 'test'. </p>
    <?
    // mkdir("test");
    ?>
    <p>3. Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.</p>


    <?
    $openFile = file_get_contents('test/aboutme.txt');
    $str = 'Aleksandr Shakhray 89999999991';
    file_put_contents('test/aboutme.txt', $str);
    $arr = explode(' ', $str);
    echo $arr[0] . ' ' . $arr[1];
    ?>

    <p>4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.</p>

    <?
    $oneFile = file_get_contents('test/one.txt');
    $str2 = 'В магазине продаются конфеты. Класс.';
    file_put_contents('test/one.txt', $str2);
    $tooFile = file_get_contents('test/too.txt');
    $str3 = 'В школе идет урок. Класс.';
    file_put_contents('test/too.txt', $str3);

    $arr = explode('. ', $str2);
    $arr2 = explode('. ', $str3);
    // print_r($arr);
    // print_r($arr2);
    //Сливаем массивы
    $arr3 = array_merge($arr, $arr2);
    // print_r($arr3);
    // Уберем повторы
    $arr4 = array_unique($arr3);
    // сделаем из массива строку
    $str4 = implode('. ', $arr4);
    // echo $str4;
    $threeFile = file_put_contents('test/three.txt', $str4);
    echo "ОТВЕТ: в файле three.txt";
    ?>

    <p>5. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.</p>

    <?
    // файлы созданы, массивы беру из 4 задания 
    // Найдем совпадения в массивах
    $fooFile = array_intersect($arr, $arr2);
    // print_r($file4);
    file_put_contents('test/foo.txt', $fooFile);
    echo "ОТВЕТ: в файле foo.txt";
    ?>
</main>

<?php require_once 'inc/footer.php' ?>


