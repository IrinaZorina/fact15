<?php
session_start();
$lastVisitedPage = isset($_SESSION['last_visited_page']) ? $_SESSION['last_visited_page'] : '';

if ($lastVisitedPage === 'fact.php') {
    echo 'Последняя посещенная страница - ФАКТ';
} elseif ($lastVisitedPage === 'bitrix.php') {
    echo 'Последняя посещенная страница - БИТРИКС';
} else {
    echo 'Последняя посещенная страница неизвестна';
}
?>

<?php require_once 'header.php'; ?>
<?php
function highlightNameAndAge($text) {
    $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    $text = str_replace('Ражапов', '<span style="color:' . $randomColor . ';">Ражапов</span>', $text);
    $text = str_replace('Денис', '<span style="color:' . $randomColor . ';">Денис</span>', $text);
    return $text;
}
function alternateColorText($text) {
    $arr = explode(' ', $text);
    $result = '';
    $num = 1;
    foreach ($arr as $value) {
        if (($num % 2) == 0) {
            $result .= "<font color='red';>$value </font>";
        } else {
            $result .= "<font color='#4b0082';>$value </font>";
        }
        $num++;
    }
    return $result;
}
function countVowels($str) {
    $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    $str = mb_strtolower($str);
    $count = 0;
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $char = mb_substr($str, $i, 1);
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}
function countWords($text) {
    return str_word_count($text, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя');
}
$str1 = 'Ражапов Денис, 33 года, работаю на ММК электриком. Из хобби-чтение книг жанра фантастика и литрпг, сноуборд, велосипед.';
$str2 = 'Программированием раньше не занимался, поэтому курсы для меня достаточно сложные.';
$highlightedText = highlightNameAndAge($str1);
$alternatingText = alternateColorText($str2);
$totalVowels = countVowels($str1) + countVowels($str2);
$totalWords = countWords($str1 . ' ' . $str2);
?>

<main>
    <div class="container">
        <div class="img1"></div>
        <div class="self">
            <?php echo $highlightedText; ?>
            <?php echo '<br>'; ?>
            <?php echo $alternatingText; ?>
            <?php echo '<br>'; ?>
            <?php echo "Количество гласных в предложениях: $totalVowels<br>"; ?>
            <?php echo "Количество слов в предложениях: $totalWords<br>"; ?>
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>
