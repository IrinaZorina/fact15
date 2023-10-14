<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашня работа по теме СТРОКИ</h1>

        <h2>Слайд №23</h2>

        <h3>1.Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</h3>
        <?php
            $str = "One.2png";
            echo (strlen($str)>5)? mb_substr($str,0,5)."...":$str;
        ?>

        <h3>2.Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</h3>
        <?php                
            $str = 'In the beginning God created the heaven and the earth';
            echo $str."<br>";
            $str = str_replace(array("a","b","c"),array("1","2","3"),$str);
            echo $str;
        ?>   

        <h3>3.Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</h3>
        <?php 
            $str = "abc abc abc";
            echo $str."<br>";
            echo "позицию последней буквы 'b' = ".strrpos($str,"b");
        ?>   

        <h3>4.Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</h3>
        <?php 
            echo "<pre>";
            $str = "html css php";
            echo $str."<br>";
            print_r(explode(' ',$str));
            echo "</pre>";
        ?>   

        <h3>5.В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.</h3>
        <?php 
            $now = strtotime("2021-11-29");
            $your_date = strtotime("1994-09-21");
            $datediff = $now - $your_date;
            echo intdiv($datediff , (60 * 60 * 24))."<br>";
        ?>   


        <h2>Слайд №24</h2>
        <h3>2.Подсчитать количество гласных букв на вашей странице.</h3>
        <?php 
            $count_all = $_SESSION['count_all'];
            echo "Количество гласных букв на главной странице = ". $count_all."<br>";
        ?> 
        
        <h3>3.Посчитать количество слов на вашей странице.</h3>
        <?php 
            $NumberOfWords = $_SESSION['NumberOfWords'];
            echo "Количество слов на главной странице = ". $NumberOfWords."<br>";
        ?> 

        



    </div>
</div>


<?php require_once "inc/footer.php" ?>