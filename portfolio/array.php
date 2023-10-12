<?php require_once 'header/header.php' ?>
<main class="page-main">
    <strong>
        <p>Слайд №15</p>
    </strong>

    <!-- Задача 1
    1.Объявить и проинитиализировать массив
    2. Запустить цикл (от 0 до n-го элемента)
    3. Записать в сумму текущее значение массива (не переписывая сумму) -->

    <p class="font">1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.
    </p>
    <?php
    $result = 0;  //начальное значение
    $arr = [50,  45, 40, 35, 30];
    foreach ($arr as  $value) {
        $result = $result + $value;
    }
    echo "result = $result";

    // Задача 2
    // 1.Объявить  массив (не инитиализируем его).
    // 2 Запустить цикл, выполнить ф-ю mt_rand.
    // 3. В цикле вывести элемента массива.
    // 4. Запустить новый цикл, но не от первого элемента, а от последнего к первому элементу.
    // for($i =count(??)); $i???; $i--)

    ?>
    <p class="font"> 2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке</p>

    <?php
    $arr2 = [];
    for ($i = 0; $i < 20; $i++) {
        $arr2[$i] = mt_rand(1, 200);
        echo $arr2[$i] . " ";
    }
    echo "<br>";
    for ($i = count($arr2) - 1; $i >= 0; $i--) {
        echo $arr2[$i] . " ";
    }
    ?>

    <!-- Задача 3
    * $arr = ['1.png', '2.png'];
    $rand_img = mt_rand(0, ??);
    echo "<img src='??/???' alt=''>"; -->

    <p class="font">3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
    </p>
    <?php

    $arr = ['tekst.jpg', '2.jpg', '3.jpeg', '4.jpg'];
    $rand_img = mt_rand(0, count($arr) - 1);
    echo $rand_img;
    echo "<img src='img/$arr[$rand_img]' alt='#' width = '250px' height = '250px'>";
    ?>

    <!-- * Задача 4
    * 1. Массив заполнить случайными числами
    * 2.Объявить переменные, куда будем сохранять min и max
    * значения
    * $min =101 или можно присвоить первый элемент массива
    * $min = $arr[0]
    * 3. Запускаем цикл, в цикле идут проверки
    * Например, $arr = [100,34,-23, 45]
    * $min = 34
    * то необходимо взять первый элемент массива и сравнить его с $min
    * if($arr[$i] < $min){ * $min=??? * } * */
     -->


    <p class="font">4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.
    </p>
        <!-- мин положительное = 1 максим отрицательное  = -1 -->
    <?php
        // Заполняем массив
    $randomArr = [];
    for ($i = 0; $i < 15; $i++) {
        $randomArr[$i] = mt_rand(-100, 100);
        echo $randomArr[$i] . ' ';
    }
    echo '<br>';
    $min = 101;
    $max = -101;
     // Обходим массив и ищем числа
    for ($i = 0; $i < 15; $i++) {
        if($randomArr[$i] < $min && $randomArr[$i] > 0) {
            $min =$randomArr[$i];
        } elseif ($randomArr[$i] > $max && $randomArr[$i] < 0) {
            $max =$randomArr[$i];
        }
    }
    echo "Минимальное =  $min  <br>";
    echo "Максимальное =  $max  <br>";
    ?>




    <p class="font">5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
    </p> 
    <?php

    //Задаю рандомные значения
$math = mt_rand(2, 5);
$phisics = mt_rand(2, 5);
$chemistry = mt_rand(2, 5);
$inform = mt_rand(2, 5);

$averageMark = 0;
$subjects = [
    "Математика" => "$math",
    "Физика" => "$phisics",
    "Химия" => "$chemistry",
    "Информатика" => "$inform"
];
//  Перебираю массив
foreach ($subjects as $key => $grade) {
    echo "$key = $grade";
    echo "<br>";
    // Средний бал
    $averageMark += $grade / count($subjects);
}
echo "Средний бал учащихся = " . $averageMark;

    ?>
    <p class="font">6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
    </p>

    <?php

$arr = [
    'Июнь' => [
        'Куба' => mt_rand(30, 50),
        'Тринидад' => mt_rand(30, 50),
        'Ямайка' => mt_rand(30, 50),
        'Гаити' => mt_rand(30, 50)
    ],
    'Июль' => [
        'Куба' => mt_rand(30, 50),
        'Тринидад' => mt_rand(30, 50),
        'Ямайка' => mt_rand(30, 50),
        'Гаити' => mt_rand(30, 50)
    ],
    'Август' => [
        'Куба' => mt_rand(30, 50),
        'Тринидад' => mt_rand(30, 50),
        'Ямайка' => mt_rand(30, 50),
        'Гаити' => mt_rand(30, 50)
    ]
];

foreach ($arr as $key => $value) {
    $max = 0;
    // print_r($arr) ;
    foreach ($value as $new_key => $new_value) {
        // print_r($arr);
        if ($new_value > $max) {
            $max = $new_value;
        }
    }
    echo "Максимальная температура для  $key  =   $max  <br>";
}
    ?>



    <p class="font">7. Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.
    </p>


    <?php



    ?>

</main>

<?php require_once 'footer/footer.php' ?>