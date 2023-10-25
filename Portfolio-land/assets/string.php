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
        <div class="string">
          <div class="string-one">
            <p>Slide No. 23 / Task No. 1, lesson 7-8 PHP:</p>
            <br>
            <p>Дана строка. Если в этой строке более 5-ти символов <br>
            - вырежьте из нее первые 5 символов, добавьте троеточие <br>
            в конец и выведите на экран. Если же в этой строке 5 и <br>
            менее символов - необходимо вывести эту строку на экран..</p>
            <br>
            <p>Answer: <br>
            <?php
            $arrTest = [];
            for ($i = 0; $i <= mt_rand(1, 10); $i++) {
                $arrTest[] = mt_rand(0, 35);
            }
            function subTest($a)
            {
                $strTest = implode(',' ,$a);
                $resultStr = mb_strlen($strTest);
                if ($resultStr > 5)
                {
                    $result = mb_substr($strTest, 0, 5) . '...';
                    return $result;
                } else { $result = $strTest;
                        return $result;};
            }
            echo subTest($arrTest);
/*             $strTest = implode(',' ,$arrTest);
            $resultStr = mb_strlen($strTest);
            if ($resultStr > 5)
            {
                echo mb_substr($strTest, 0, 5) . '...';
            } else { echo $strTest;}; */
            ?>
            </p>
            <br>
          </div>
          <div class="string-two">
            <p>Slide No. 23 / Task No. 2, lesson 7-8 PHP:</p>
            <br>
            <p>Дана строка $str. <br>Замените в ней все буквы 'a' на цифру 1,<br>
                 буквы 'b' - на 2, а буквы 'c' - на 3.</p>
            <br>
            <p> Answer: <br>
              <?php
                $str = 'abcdefghijklmnopqrstuvwxyz';
                function replaceStr ($a)
                {
                $shuffStr = str_shuffle($a);
                $arrStr = str_split($shuffStr);
                /* print_r($arrStr); */
                foreach ($arrStr as $value)
                {
                    $str1 = str_replace ('a', 1, $value);
                    $str2 = str_replace('b', 2, $str1);
                    $result = str_replace('c', 3, $str2);
                    echo $result;
                }
                }
                echo replaceStr($str);

                /* $shuffStr = str_shuffle($str);
                $arrStr = str_split($shuffStr);
                foreach ($arrStr as $value)
                {
                    $str1 = str_replace ('a', 1, $value);
                    $str2 = str_replace('b', 2, $str1);
                    $str3 = str_replace('c', 3, $str2);
                    echo $str3;
                } */
              ?>
          </div>
          <div class="string-three">
          <p>Slide No. 23 / Task No. 3, lesson 7-8 PHP:</p>
            <br>
            <p>Дана строка 'abc abc abc'. <br>
            Определите позицию последней буквы 'b'.</p>
            <br>
            <p>Answer: <br>
              <?php
                $strTest2 = 'abc abc abc';
                function positionstr($a)
                {
                    $result = strrpos($a, 'b');
                    echo $result;
                }
                positionstr($strTest2);
              ?>
          </div>
          <div class="string-four">
          <p>Slide No. 23 / Task No. 4, lesson 7-8 PHP:</p>
            <br>
            <p>Дана строка 'html css php'. С помощью функции explode <br>
               запишите каждое слово этой строки в отдельный элемент массива.</p>
            <br>
            <p>Answer: <br>
              <?php
                $strTest3 = 'html css php';
                function arrStr($a)
                {
                    $result = explode(' ',$a);
                    return $result;
                }
                print_r(arrStr($strTest3));
              ?>
          </div>
          <div class="string-five">
          <p>Slide No. 23 / Task No. 5, lesson 7-8 PHP:</p>
            <br>
            <p> В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). <br>
                Определите количество дней между датами.</p>
            <br>
            <p>Answer: <br>
              <?php
              $date1 = mt_rand(1900, 2050) . '-' . mt_rand(1, 12) . '-' . mt_rand(01, 30);
              echo 'Первая дата: ' . $date1 . '<br>';
              $date2 = mt_rand(1900, 2050) . '-' . mt_rand(1, 12) . '-' . mt_rand(01, 30);
              echo 'Вторая дата: ' . $date2 . '<br>';
              function datedifference($a, $b)
                {
                $result = date_diff(new DateTime("$a"), new DateTime("$b")) -> days;
                return $result;
                }
                echo 'Кол-во дней: ' . datedifference($date1, $date2); 
              ?>
          </div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>