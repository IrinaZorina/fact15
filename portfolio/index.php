<?php require_once 'inc/header.php' ?>

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
                            $pos = mb_strlen($text_about)-1;
                            $posOne = mb_strpos($text_about,".");
                            $posTwo = mb_strpos($text_about,"!");
                            $posThree = mb_strpos($text_about,"?");

                            (($posOne<$pos) && ($posOne !== false))? $pos = $posOne:null;
                            (($posTwo<$pos) && ($posTwo !== false))? $pos = $posTwo:null;
                            (($posThree<$pos) && ($posThree !== false))?$pos = $posThree:null;
                            $strnew = mb_substr($text_about,0,$pos+1);
                            echo str_replace($strnew,"<span style=color:#f8be7c;>".$strnew."</span>",$text_about);

                            preg_match_all ( '#[ауоыиэяюёе]#iu', $text_about, $matches);
                            $count_about = count($matches[0]);
                        
                            $NumberOfWords_about = count(explode(' ',$text_about));
                        ?>
                    </p>
                    <p>
                        <?php
                            $text_hobby = "Года три назад, в свободное от основной работы время стал подрабатывать 1C-разработкой, так сказать хобби.";
                            echo $text_hobby;
                        
                            preg_match_all ( '#[ауоыиэяюёе]#iu', $text_hobby, $matches);
                            $count_hobby = count($matches[0]);
                            
                            $NumberOfWords_hobby = count(explode(' ',$text_hobby));
                        ?>
                    </p>
                    <p>
                        <?php
                            $text_kurs = "Узнав про курс, решил, что это возможность наверстать упущенное и сменить все-таки вид основной деятельности. Программа курса разнообразна, много новой информации, новых программных систем. Хорошая форма обучения, находишься в комфортной обстановке и в тоже время полностью погружаешься в атмосферу учебного процесса.";
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
                            echo $text_new;


                            preg_match_all ( '#[ауоыиэяюёе]#iu', $text_kurs, $matches);
                            $count_kurs = count($matches[0]);
                            $count_all = $count_about+$count_hobby+$count_kurs;
                            $_SESSION['count_all'] = $count_all;
                            
                            $NumberOfWords_kurs = count(explode(' ',$text_kurs));
                            $NumberOfWords = $NumberOfWords_about+$NumberOfWords_hobby+$NumberOfWords_kurs;
                            $_SESSION['NumberOfWords'] = $NumberOfWords;
                        ?>

                    </p>
                </div>
            </div>
        </div>
    </div>


<?php require_once 'inc/footer.php' ?>