    <footer>
        <div class="container">
            <hr>
            <a href="#">На вверх</a>
            <p class="footer-mail">KrainiyOleg1983@gmail.com</p>
            <p>
                <?php
                    $count_all = $_SESSION['count_all'];
                    echo "Количество гласных букв на главной странице = ". $count_all."<br>";
                    $NumberOfWords = $_SESSION['NumberOfWords'];
                    echo "Количество слов на главной странице = ". $NumberOfWords."<br>";

                    $now = time();
                    $your_date = strtotime("1983-09-30");
                    $datediff = $now - $your_date;
                    echo date('d.m.Y', $your_date)." - дата рождения, ".date('d.m.Y', $now)." - текущее значение. Разность - ".intdiv($datediff , (60 * 60 * 24))." дня.<br>";
        
                ?>
            </p>
        </div>
    </footer>
</body>
</html>