 <footer>
     <ul class="flex-container">
         <li>Copyright</li>
         <li>Город: Магнитогорск
             <p>
                 <?
                  // вывод даты от дня рождения
                    $date = '30-10-1991';
                    $date2 = date("d-m-Y");
                    $result = date_diff(date_create($date), date_create($date2));
                    echo "С момента моего дня рождения прошло $result->days  дней <br>";
                    // количество гласных букв на странице
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
                    ?>
             </p>
         </li>
         <li class="logotip"></li>
     </ul>
 </footer>
 </main>
 </body>
 </html>