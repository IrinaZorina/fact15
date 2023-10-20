<?php require_once 'inc/header.php'; 

function firstSentence($text){
    $pos = mb_strlen($text)-1;
    $posOne = mb_strpos($text,".");
    $posTwo = mb_strpos($text,"!");
    $posThree = mb_strpos($text,"?");

    (($posOne<$pos) && ($posOne !== false))? $pos = $posOne:null;
    (($posTwo<$pos) && ($posTwo !== false))? $pos = $posTwo:null;
    (($posThree<$pos) && ($posThree !== false))?$pos = $posThree:null;
    $strnew = mb_substr($text,0,$pos+1);
    return str_replace($strnew,"<span style=color:#f8be7c;>".$strnew."</span>",$text);
}

function evenWord($text_kurs){
    $arr = explode(" ",$text_kurs);
    $text_new = "";
    for ($i=0; $i < count($arr); $i++) { 
        if ($i%2==0){
            $text_new .="<span style=color:#f8be7c;> ".$arr[$i]."</span>";
        }
        else{
            $text_new .="<span style=color:#46f0d9;> ".$arr[$i]."</span>";
        }
    }
    return $text_new;
}        

function numberOfVowelLetters($textArray){
    $SumCount = 0;
    foreach($textArray as $Value){
        preg_match_all ( '#[ауоыиэяюёе]#iu', $Value, $matches);
        $SumCount += count($matches[0]);
    } 
    return $SumCount;
}

function NumberOfWords($textArray){
    $SumCount = 0;
    foreach($textArray as $Value){
        $SumCount += count(explode(' ',$Value));
    } 
    return $SumCount;
}


?>

    <div class="content">
        <div class="container">
            <h1 class="slogan">О себе</h1>
            <div class="aboutTextAndImg">
                <div class="aboutImg">
                    <img src="image/Avotar.jpg" alt="" class="avotar" > 
                </div>
                <div class="about_Text">
                    <p>
                        <?php 

                            $text_about = "Всем привет, меня зовут Крайний Олег, недавно исполнилось 40. Мой опыт в программировании начался где-то в середине 90-х. Отец, помню, купил мой первый компьютер 'MAGIK'. Для сохранения информации которому был нужен кассетный магнитофон. В нем был встроен basic, с помощью которого я и запрограммировал свое первое 'HelloWorld' :)<br>В школе, уже на Pascal, совместно с одноклассниками под руководством учителя по информатики создавали тест, которым затем пользовались для проверки наших знаний по учебной программе.<br>В студенческое время, а поступил я в 'МАГУ' на специальность учитель информатики, познакомился с DELPHI. Закончив универ, судьба занесла меня в другое русло. Попав на стройплощадки города и ММК, устроился промышленным альпинистом. Высоты, красоты, романтика!!!";
                            echo firstSentence($text_about);
                        ?>
                    </p>
                    <p>
                        <?php
                            $text_hobby = "Года три назад, в свободное от основной работы время стал подрабатывать 1C-разработкой, так сказать хобби.";
                            echo $text_hobby;
                        ?>
                    </p>
                    <p>
                        <?php
                            $text_kurs = "Узнав про курс, решил, что это возможность наверстать упущенное и сменить все-таки вид основной деятельности. Программа курса разнообразна, много новой информации, новых программных систем. Хорошая форма обучения, находишься в комфортной обстановке и в тоже время полностью погружаешься в атмосферу учебного процесса.";
                            echo evenWord($text_kurs);

                            $_SESSION['count_all'] = numberOfVowelLetters([$text_about,$text_hobby,$text_kurs]);
                            $_SESSION['NumberOfWords'] = NumberOfWords([$text_about,$text_hobby,$text_kurs]);
                        ?>

                    </p>
                </div>
            </div>
        </div>
    </div>


<?php require_once 'inc/footer.php' ?>