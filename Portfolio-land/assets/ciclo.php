<?php
if (isset($_COOKIE['Page'])?$_COOKIE['Page']:'');
setcookie('Page', $_SERVER['PHP_SELF'], time()+3600);
session_start();
session_unset();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>XAYC</title>
  </head>

  <body>
    <!-- HEADER -->
    <?php require_once 'header.php' ?>

    <!-- MAIN -->
    <main id="main" class="main">
      <div class="container">
        <div class="ciclo">
          <div class="ciclo-one">
          <p>Slide No. 25 / Task No. 1:</p>
          <br>
          <p>Выведите столбец чисел от 5 до 13.</p>
          <br>
          <p>Answer: <br>
            <?php
                for ($i=5; $i <= 13; $i++) {
                    echo $i . '<br>';
                }
            ?>
          </p>
          </div>
          <div class="ciclo-two">
            <p>Slide No. 25 / Task No. 2:</p>
            <br>
            <p>Дано число $num=1000. Делите его на 2 столько раз, <br> 
              пока результат деления не станет меньше 50. <br> 
              Какое число получится? Посчитайте количество итераций, <br> 
              необходимых для этого (итерация - это проход цикла). <br> 
              Решите задачу сначала через цикл while, <br>
              а потом через цикл for.</p>
            <br>
            <p>Answer: <br>
              <?php
                  $num = 1000;
                  for ($i=0; $num > 50 ;$i++) {
                    $num = $num / 2;
                  }
                  echo $num . '<br>';
                  echo $i . '<br>';
              ?>
              <br>
              <?php
              $num = 1000;
              $i = 0;
              while ($num > 50){
                $num = $num / 2;
                $i++;
              }
                echo $num . '<br>';
                echo $i . '<br>';
              ?>
          </div>
          <div class="ciclo-three">
            <p>Slide No. 25 / Task No. 3:</p>
            <br>
            <p>Необходимо создать переменную ($i) и передавать в нее значение. <br>
              Если в переменную положить 0, то на экране должна отображаться <br>
              строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». <br>
              Если переменная равна 1, то на экране отображается строка <br>
              «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, <br>
              то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». <br>
              Если переменная равна 3, то на экране отображается строка <br>
              «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. </p>
            <br>
            <p>Answer: <br>
            <?php
                $i = mt_rand(0, 10);
                switch ($i) {
                    case 0:
                        echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10";
                        break;
                    case 1:
                        echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9";
                        break;
                    case 2:
                        echo "0, 1, 2, 3, 4, 5, 6, 7, 8";
                        break;
                    case 3:
                        echo "0, 1, 2, 3, 4, 5, 6, 7";
                        break;
                    case 4:
                        echo "0, 1, 2, 3, 4, 5, 6";
                        break;
                    case 5:
                        echo "0, 1, 2, 3, 4, 5";
                        break;
                    case 6:
                        echo "0, 1, 2, 3, 4";
                        break;
                    case 7:
                        echo "0, 1, 2, 3";
                        break;
                    case 8:
                        echo "0, 1, 2";
                        break;
                    case 9:
                        echo "0, 1";
                        break;
                    case 10:
                        echo "0";
                        break;
                };
            ?>
          </div>
          <div class="ciclo-four"></div>
          <div class="ciclo-five"></div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>
