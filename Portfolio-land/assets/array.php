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
        <div class="array">
          <div class="array-one">
          <p>Slide No. 16 / Task No. 5, lesson 5-6 PHP:</p>
          <br>
          <p>Для группы учащихся известны годовые оценки по следующим предметам: математика, <br>
             физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. <br>
             Суммирование оценок по каждому предмету.</p>
          <br>
          <p>Answer: <br>
          <?php
              $number = 3;
              $sum =0;
              $resMath =0;
              $resPhysics =0;
              $resChemistry =0;
              $resComputer =0;
              $item = [
                  'Math'=> [
                      'Ivanov' => 3,
                      'Petrov' => 4,
                      'Sidorov' => 5], 
                  'Physics'=> [
                      'Ivanov' => 5,
                      'Petrov' => 3,
                      'Sidorov' => 3], 
                  'Chemistry'=> [
                      'Ivanov' => 3,
                      'Petrov' => 3,
                      'Sidorov' => 4], 
                  'Computer science' => [
                      'Ivanov' => 4,
                      'Petrov' => 4,
                      'Sidorov' => 5], 
              ];
              foreach ($item as $key => $value){
                  foreach ($value as $key_new => $allRes){
                      $sum += $allRes;
                  }
              }
              echo $sum . '<br>';

              foreach ($item['Math'] as $key => $value) {
                  $resMath += $value / $number;

              };
              echo $resMath . '<br>';

              foreach ($item['Physics'] as $key => $value) {
                  $resPhysics += $value / $number;

              };
              echo $resPhysics . '<br>';

              foreach ($item['Chemistry'] as $key => $value) {
                  $resChemistry += $value / $number;

              };
              echo $resChemistry . '<br>';


              foreach ($item['Computer science'] as $key => $value) {
                  $resComputer += $value / $number;

              };
              echo $resComputer . '<br>';

          ?>
          </p>
          </div>
          <div class="array-two"></div>
          <div class="ciclo-thre"></div>
          <div class="ciclo-four"></div>
          <div class="ciclo-five"></div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>