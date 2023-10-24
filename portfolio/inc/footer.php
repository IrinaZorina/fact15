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

                    // session_destroy();
        
                ?>
            </p>
            <br>
            <P style="background-color:<?php echo $defaultColor?>">Добро пожаловать <b><?=$_COOKIE["login"] ?></b>, до этого в прошлый раз вы посещали <?=(isset($_COOKIE["lastPage"]))?$_COOKIE["lastPage"]:""?></P>
            <form>
                Выбирите цвет фона<select name="color" style="background-color:<?php echo $defaultColor?>">
                    <?php
                        $arrColor=["LightYellow","LightGrey","LightBlue"];
                        foreach($arrColor as $color){
                            echo ($color == $defaultColor) ? "<option selected=\"selected\" value=\"$color\" style=\"background-color:$color \">$color</option>":"<option value=\"$color\" style=\"background-color:$color \">$color</option>";
                        }
                    ?>
                </select>
                <input type="submit">
            </form>

        </div>
    </footer>
</body>
</html>