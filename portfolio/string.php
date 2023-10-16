<?php require_once 'inc/header.php' ?>

<main class="page-main">
    <p class="font">1 Задача</p>
    <P>
    <pre>1. [0] - HEL [1] - LO</pre>
    </P>
    <?php

    $str = "HELLO";
    $arr = str_split($str, 3);
    print_r($arr);

    ?>
    <p class="font">2 Задача</p>
    <P>
    <pre>1. [0] - HE [1] - LLO</pre>
    </P>

    <?php

    $str2 = mb_substr($str, 0, 2);
    // echo $str2;
    $str3 = mb_substr($str, 2, 3);
    // echo $str3;
    $arr2 = [$str2, $str3];
    print_r($arr2);
    // или так  
    // echo "<br>";
    // $arr2[0] = mb_substr($str, 0, 2);
    // $arr2[1] = mb_substr($str, 2, 3);
    // print_r($arr2);
    ?>
    <p class="font">Слайд 22</p>
    <p class="font">№1. Дата строка «fact». Привести строку к виду «Fact».</p>

    <?php
    $str4 = 'fact';
    $str5 = str_replace('f', 'F', $str4);
    echo $str5;
    // или так через функцию
    // echo ucfirst($str);

    ?>
    <p class="font">№2. Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».
    </p>

    <?php

    $str6 = 'Шахрай Александр Николаевич';
    $str7 = mb_substr($str6, 0, 6);
    // echo $str6;
    $str8 = mb_substr($str6, 7, 9);
    // echo $str7;
    echo "<p>$str8 $str7</p>";

    // или так
    // $arr3 = explode(" ",$str6);
    // print_r($arr6);
    // echo "<br>";
    // print_r($arr6[1]);
    // echo " ";
    // print_r($arr6[0]);
    // echo "<br>";

    ?>

    <p class="font">№3. Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).</p>

    <?php

    $str = 'ПрИвет, мИр!';
    $char = 0;
    $arr = mb_str_split($str);
    // print_r($arr);
    // echo "<br>";
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == 'и' || $arr[$i] == 'И') {
            $char = $char + 1;
        }
    }
    echo $char;

    ?>

    <p class="font">№4. Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</p>

    <?php

    $str9 = 'html css php';
    $str10 = mb_substr($str9, 0, 4);
    // echo $str10;
    $str11 = mb_substr($str9, 5, 3);
    // echo $str11;
    $str12 = mb_substr($str9, 9, 3);
    // echo $str12;
    echo "<p>$str10</p>";
    echo "<p>$str11</p>";
    echo "<p>$str12</p>";


    ?>

    <p class="font">№5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
    </p>

    <?php
    $str15 = '  sffsgsgsggsgsggshaehhahrahaasqwrq.png';
    if (substr($str15, -4, 4) == '.png') {
        echo "да";
    } else {
        echo "нет";
    }
    ?>

    <p class="font">23 слайд</p>
    <p class="font">№1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.
    </p>
    <p>Язык гипертекстовой разметки HTML был разработан британским учёным Тимом Бернерсом-Ли приблизительно в 1986—1991 годах в стенах ЦЕРНа в Женеве в Швейцарии</p>

    <?php
    $str = 'Язык гипертекстовой разметки HTML был разработан британским учёным Тимом Бернерсом-Ли приблизительно в 1986—1991 годах в стенах ЦЕРНа в Женеве в Швейцарии';
    $length = mb_strlen($str);
    if ($length > 5) {
        echo mb_substr($str, 0, 5) . '...';
    } else {
        echo $str;
    }

    ?>

    <p class="font">№2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
    <p class="font">"The Old Arbat is a picturesque pedestrian street in Moscow, running west from Arbat Square (which is part of the Boulevard Ring) towards Smolenskaya Square (which is part of the Garden Ring). The Old Arbat has the reputation of being Moscow's most touristy street, with lots of entertainment and souvenirs sold. It is distinct from the New Arbat, a street running parallel to it and lined with Soviet skyscrapers made of steel, concrete, and glass.";</p>

    <?php

    $str16 = "The Old Arbat is a picturesque pedestrian street in Moscow, running west from Arbat Square (which is part of the Boulevard Ring) towards Smolenskaya Square (which is part of the Garden Ring). The Old Arbat has the reputation of being Moscow's most touristy street, with lots of entertainment and souvenirs sold. It is distinct from the New Arbat, a street running parallel to it and lined with Soviet skyscrapers made of steel, concrete, and glass.";

    $str17 = str_replace("a", "1", $str16);
    $str18 = str_replace("b", "2", $str17);
    $str19 = str_replace("c", "3", $str18);
    echo $str19;
    // Или так
    // echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str16);
    ?>

    <p class="font">№3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</p>

    <?php

    $str20 = 'abc abc abc';
    echo strpos($str20, 'b', 6);

    ?>

    <p class="font">№4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
    </p>

    <?php

    $str20 = 'html css php';
    $arr5 = explode(" ", $str20);
    print_r($arr5);
    echo "<br>";
    print_r($arr5[0]);
    echo "<br>";
    print_r($arr5[1]);
    echo "<br>";
    print_r($arr5[2]);
    // Или так
    // $arr5 = explode(" ", $str20);
    // for ($i = 0; $i < count($arr5); $i++) {
    // echo $arr5[$i] . " <br>";
    ?>


    <p class="font">№5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
        Определите количество дней между датами.</p>

    <?php

    $date = date_create('30-10-1991');
    $date2 = date_create('16-10-2023');
    // $date2 = date("d-m-Y");
    // // echo $date2;
    $result = date_diff($date, $date2);
    echo $result->days;
    ?>
    
</main>

<?php require_once 'inc/footer.php' ?>