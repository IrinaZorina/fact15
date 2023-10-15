<?php
echo 'Слайд 16, задача 5';
echo '<br>';
echo 'Задание. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
Найти среднюю в группе оценку по каждому из предметов. 
Суммирование оценок по каждому предмету.';
echo '<br>';
$groupEstimates = [
    'mathematics' => [5, 4, 4, 5],
    'physics' => [4, 3, 4, 4],
    'chemistry' => [3, 5, 3, 5],
    'informatics' => [5, 4, 5, 3,]
];
foreach ($groupEstimates as $key => $vail) {
    $sum = 0;
    foreach ($vail as $newvail) {
        $sum += $newvail;
    }
    $count = count($vail);
    $average = $sum / $count;
    echo "Средняя оценка по предмету $key: $average<br>";
}
echo '<br>';
echo 'Слайд 16, задача 6';
echo '<br>';
echo 'Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов';
echo '<br>';
$Cuba = [1 => 22, 22, 23, 24.5, 25.5, 26.5, 27, 27.5, 27, 26, 24, 22.5];
$Trinidad = [1 => 26, 26, 26, 27, 28, 27, 27, 27, 27, 27, 27, 26];
$Jamaica = [1 => 25.7, 25.8, 25.9, 26.9, 27.4, 28.3, 28.6, 28.6, 28.3, 27.5, 26.8, 26.2];
$Haiti = [1 => 26, 27, 27, 28, 29, 29, 30, 30, 29, 29, 28, 27];
$month = [1 => "январь", "февраль", "март", "апрель", "май", "июнь",
    "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
$cuba1 = array_combine($month, $Cuba);
$cuba1 = array_unique($cuba1);
$max = max($cuba1);
foreach($cuba1 as $key => $value){
    if($value == $max){
        $new0 = $key;
        $new1 = $value;
    }
}
$Trinidad1 = array_combine($month, $Trinidad);
$Trinidad1 = array_unique($Trinidad1);
$max = max($Trinidad1);
foreach($Trinidad1 as $key => $value){
    if($value == $max){
        $new01 = $key;
        $new11 = $value;
    }
}
$Jamaica1 = array_combine($month, $Jamaica);
$Jamaica1 = array_unique($Jamaica1);
$max = max($Jamaica1);
foreach($Jamaica1 as $key => $value){
    if($value == $max){
        $new02 = $key;
        $new12 = $value;
    }
}
$Haiti1 = array_combine($month, $Haiti);
$Haiti1 = array_unique($Haiti1);
$max = max($Haiti1);
foreach($Haiti1 as $key => $value){
    if($value == $max){
        $new03 = $key;
        $new13 = $value;
    }
}
$arr = [
    'куба' => [$new0, $new1],
    'тринидад' => [$new01, $new11],
    'ямайка' => [$new02, $new12],
    'гаити' => [$new03, $new13]
];
print_r($arr);
echo '<br>';

echo '<br>';
echo 'Слайд 16, задача 7';
echo '<br>';
echo 'Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов';
echo '<br>';
$array = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
        $array[$i][$j] = rand(1, 100);
    }
}
$product = 1;
for ($j = 0; $j < 6; $j += 2) {
    $max = $array[0][$j];
    for ($i = 1; $i < 5; $i++) {
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
        }
    }
    $product *= $max;
}
echo "Произведение максимальных элементов четных столбцов: " . $product;