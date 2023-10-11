<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашня работа по теме Массивы</h1>

        <h2>Слайд №16</h2>

        <h3>6.Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</h3>
        <?php
        $islands = ["Cuba","Trinidad","Jamaica","Haiti"];
        $months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        $journal = array();
        $arr_new = array();
        foreach($islands as $nameIsland){
            foreach($months as $nameMonth){
                $celsius = mt_rand(15,40);
                $journal[$nameIsland][$nameMonth] = $celsius;
                if (array_key_exists($nameMonth,$arr_new)){
                    if ($arr_new[$nameMonth] < $celsius){
                    $arr_new[$nameMonth] = $celsius;
                    }
                }    
                else{
                    $arr_new[$nameMonth] = $celsius;
                }
            }
        }
        echo "<pre>";
        print_r($journal);
        echo "Массив максимальных температур для островов : <br>";
        print_r($arr_new);
        echo "</pre>";

        ?>


        <h3>7.Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.</h3>
        <?php                
            $journal = array();
            $max_count = array();
            $resultOfMultiplication = 1;
            for($x=0;$x<6;$x++){
                $max =-100;
                $nameColumn = "column_№".strval($x+1);
                for($y=0;$y<5;$y++){
                    $temp = mt_rand(-100,100);
                    $journal[$nameColumn][$y] = $temp;
                    if (($x+1)%2==0){
                        ($max<$temp)?$max=$temp:null;
                    }
                }
                if (($x+1)%2==0){
                    $max_count[$nameColumn]  = $max;
                    $resultOfMultiplication*=$max;
                }
            }
            
            echo "<pre>";
            print_r($journal);

            print_r($max_count);
            echo "Произведение максимальных значений четных столбцов = $resultOfMultiplication";
            echo "</pre>";
        ?>   

        <!-- <h3>3. Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01</h3>     -->
        <?php 
        ?>    


    </div>
</div>


<?php require_once "inc/footer.php" ?>