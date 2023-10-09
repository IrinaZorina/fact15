<?
echo 'Слайд 23, задание №4';
echo '<br>';
$a = 1;
$b = 1;
$i = 0;
$s = 0;
while ($s <= 10){
    $s = $s + $a/$b;
    $a +=3;
    $b +=1;
    $i +=1;
}
echo $i;
echo '<br>';

echo 'Слайд 23, задание №3';
echo '<br>';
$pi = 0;
$i = 0;
$a = 1;
$b = 3;
$p = round( M_PI, 2);
while ($pi != $p) {
    if ($i % 2 != 0) {
        $a+= 1/$b;
    }else{
        $a-= 1/$b;
    }
    $i++;
    $b +=2;
    $pi = round(4*$a, 2);
}
echo $i;
echo '<br>';
echo 'Слайд 25, задание №1';
echo '<br>';
for ($i = 5; $i <=13; $i++){
    echo $i ;
    echo '<br>';
}
echo '<br>';
echo 'Слайд 25, задание №2';
echo '<br>';
$num = 1000;
$i = 0;
while ($num > 50){
    $num = $num/2;
    $i++;
}
echo $i;
//$num = 1000;
//for ($i = 0; $num > 50; $i++){
//    $num = $num/2;
//}
//echo $i;
echo '<br>';
echo 'Слайд 25, задание №3';
echo '<br>';
$i = 0;
for ($b = 0; $b <= 10-$i; $b++){
    echo $b;
}