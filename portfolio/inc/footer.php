<footer>
    <ul class="flex-container">
        <li>Copyright</li>
        <li>Город: Магнитогорск
            <p>
                <?

                // вывод даты от дня рождения 
                $date = '30-10-1991';
                $date2 = date("d-m-Y");
                date_dif($date, $date2);
                
                //количество слов на странице
                countWords('index.php');
                echo "<br>";



                // количество гласных букв на странице\
                $page_words = file_get_contents('index.php');
                vowels($page_words);
                ?>
            </p>
        </li>
        <li class="logotip"></li>
    </ul>
</footer>
</main>
</body>

</html>