<?php require_once 'header.php'; ?>
<main>
    <div class="container">
        <div class="img1"></div>
        <div class="self">

            <?php
            $str = 'Ражапов Денис, 33 года, работаю на ММК электриком. Из хобби-чтение книг жанра фантастика и литрпг, сноуборд, велосипед.';
            $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            $str = str_replace('Ражапов', '<span style="color:' . $randomColor . ';">Ражапов</span>', $str);
            $str = str_replace('Денис', '<span style="color:' . $randomColor . ';">Денис</span>', $str);
            echo $str;

           $str2 = 'Программированием раньше не занимался, поэтому курсы для меня достаточно сложные.';
            $arr = explode(' ', $str2);
            $num = 1;
            foreach ($arr as $value) {
                if (($num % 2) == 0) {
                    echo "<font color='red';>$value </font>";
                } else { echo "<font color='#4b0082';>$value </font>";}
                $num++;
            }

            function countVowels($str) {
                $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я',];
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
            $str1 = 'Ражапов Денис, 33 года, работаю на ММК электриком. Из хобби-чтение книг жанра фантастика и литрпг, сноуборд, велосипед.';
            $str2 = 'Программированием раньше не занимался, поэтому курсы для меня достаточно сложные.';
            $count1 = countVowels($str1);
            $count2 = countVowels($str2);
            $totalCount = $count1 + $count2;
            echo '<br>';
            echo "Количество гласных в предложениях: $totalCount<br>";
            echo '<br>';

            $str3 = str_word_count($str1 . ' ' . $str2, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя');

            echo "Количество слов в предложениях: $str3<br>";

           ?>

        </div>
    </div>
</main>
<?php require_once 'footer.php'; ?>
