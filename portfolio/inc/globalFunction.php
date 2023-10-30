<?
// Текст первой фразы окрасить в произвольный цвет
function about_me($about_me)
{
    $arr_about_me = explode('. ', $about_me);
    // print_r($arr_about_me);
    echo str_replace($arr_about_me[0], "<span style='color:blue'> $arr_about_me[0] </span>", $about_me);
}


//Каждое четное слово окрасить в первый цвет, каждое нечетное слово окрасить во второй цвет. 
function  feedback_me($feedback_me)
{
    $arr_feedback_me = explode(' ', $feedback_me);
    // print_r($arr_feedback_me);
    foreach ($arr_feedback_me as $key => $value) {
        if ($key % 2 == 0) {
            echo "<span style='color:#A018FF'> $value </span>" . ' ';
        } else {
            echo "<span style='color:green'> $value </span>" . ' ';
        }
    }
}

// вывод даты от дня рождения
function date_dif($date, $date2)
{
    $result = date_diff(date_create($date), date_create($date2));
    echo "С момента моего дня рождения прошло $result->days  дней <br>";
}



// количество гласных букв на странице
function vowels($page_words)
{
    $page_words = file_get_contents('index.php');
    $arr = mb_str_split($page_words);
    // print_r($arr);
    $vowels_words = 0;
    // перебираем массив
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == 'а' || $arr[$i] == 'А') {
            $vowels_words++;
        }
        if ($arr[$i] == 'е' || $arr[$i] == 'Е') {
            $vowels_words++;
        }
        if ($arr[$i] == 'ё' || $arr[$i] == 'Ё') {
            $vowels_words++;
        }
        if ($arr[$i] == 'и' || $arr[$i] == 'И') {
            $vowels_words++;
        }
        if ($arr[$i] == 'о' || $arr[$i] == 'О') {
            $vowels_words++;
        }
        if ($arr[$i] == 'у' || $arr[$i] == 'У') {
            $vowels_words++;
        }
        if ($arr[$i] == 'ы' || $arr[$i] == 'Ы') {
            $vowels_words++;
        }
        if ($arr[$i] == 'э' || $arr[$i] == 'Э') {
            $vowels_words++;
        }
        if ($arr[$i] == 'ю' || $arr[$i] == 'Ю') {
            $vowels_words++;
        }
        if ($arr[$i] == 'я' || $arr[$i] == 'Я') {
            $vowels_words++;
        }
    }
    echo 'Количество гласных букв на  странице:' . " " . $vowels_words . '<br>';
}

//   смена темы в зависимости от времени суток
function theme($time)
{
    if ($time > 8 and $time <= 20) {
        echo "<link rel='stylesheet' href='styles/styles_day.css'>";
    } else {
        echo '<link rel="stylesheet" href="styles/styles_night.css">';
    }
}


          //подсчЁт количество слов на странице
          
function countWords($strUrl)
{
    $str = file_get_contents($strUrl);
    $count = 0;
    $arr = str_word_count($str,1,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    for ($i = 0; $i < count($arr); $i++) {
        $count++;
    }
    echo "Количество слов на моей странице: $count ";
}

