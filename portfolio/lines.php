<?php
echo 'Слайд 23, задача 1';
echo '<br>';
echo 'Слайд 23, задача 1';
echo '<br>';
echo 'Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран';
echo '<br>';
$str = 'words.TGFH.545-numbers.';
$len = mb_strlen($str);

if ($len > 5) {
    $newStr = mb_substr($str, 5) . '...';
    echo $newStr;
} else {
    echo $str;
}
echo '<br>';

echo '<br>';
echo 'Слайд 23, задача 2';
echo '<br>';
echo 'Дана строка $str. Замените в ней все буквы \'a\' на цифру 1, буквы \'b\' - на 2, а буквы \'c\' - на 3';
echo '<br>';
$str = "thiobvraercmhtamopbuiajkc"; //12333
$str = str_replace('a', '1', $str);
$str = str_replace('b', '2', $str);
$str = str_replace('c', '3', $str);
echo "$str";
echo '<br>';

echo '<br>';
echo 'Слайд 23, задача 3';
echo '<br>';
echo 'Дана строка \'abc abc abc\'. Определите позицию последней буквы \'b\'';
$str = 'abc abc abc';
$arr = str_split($str);
foreach($arr as $key => $value){
    if($value == 'b'){
        $n = $key;
    }
}
echo '<br>';
echo "позиция последней буквы 'b':  " . $n + 1 ." из 11";
echo '<br>';

echo '<br>';
echo 'Слайд 23, задача 4';
echo '<br>';
echo 'Дана строка \'html css php\'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива';
echo '<br>';
$str = 'html css php';
$arr = explode(' ', $str);
print_r($arr);
echo '<br>';
