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
            Решите задачу сначала через цикл while, а потом через цикл for.</p>
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
          <div class="ciclo-three"></div>
          <div class="ciclo-four"></div>
          <div class="ciclo-five"></div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>
