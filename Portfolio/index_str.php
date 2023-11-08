<?php

require_once 'Class/String.php';

$str = new StringClass();

$searchStr = $str->search_str('AAABaaabbbCCCDDDbbaaabbb', 'b');
echo "Поиск подстроки: $searchStr";

$copyStr = $str->copy_str('Copy string', 2, 5);
echo '<br>';
echo "Копия строки: $copyStr";

$changeStr = $str->change_str('bbbccddd');
echo '<br>';
echo "Изменение строки: $changeStr";

$deleteStr = $str->delete_str('aaabbbaacccdddaaammmmm', 'a');
echo '<br>';
echo "Удаление подстроки: $deleteStr";

$lenght_str = $str->lenght_str('abc g g g');
echo '<br>';
echo "Длина строки: $lenght_str";
