<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашняя работа по теме Массивы</h1>

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
            for($x=0;$x<5;$x++){
                for($y=0;$y<6;$y++){
                    $journal[$x][$y] = mt_rand(-100,100);
                }
            }

            $arrMax = $journal[0];
            echo"<table>";
            foreach($journal as $ValCol){
                echo"<tr>";
                foreach($ValCol as $k => $ValRow){
                    echo "<td align=right width='50'>".$ValRow."</td>";
                    $arrMax[$k] = ($arrMax[$k]<$ValRow)?$ValRow:$arrMax[$k];
                }
            echo "</tr>";
            }

            echo"<tr>";
            $resultOfMultiplication = 1;
            foreach($arrMax as $key => $value){
                echo "<td align=right width='50'>";
                if(($key-1)%2==0){
                    echo $value;
                    $resultOfMultiplication*=$value;
                }
                echo "</td>";
            }
            echo "</tr></table>";
            echo "Произведение максимальных значений четных столбцов = $resultOfMultiplication";
        ?>   

    </div>
</div>


<?php require_once "inc/footer.php" ?>