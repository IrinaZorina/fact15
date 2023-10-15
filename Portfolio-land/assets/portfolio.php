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
        <div class="card"> <img class="card-photo" src="/img/logo-two.jpg" alt="image">
          <h1 class="card-title">about me</h1>
          <div class="card-skills">
          <p>Skills:</p>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>PHP</li>
            </ul>
          </div>
          <div calss="card-contact">
                <h4 class="card-contact--text">Contact:</h4> <a href="telefon">+74558025147</a>
                <br> <a href="mailto">info@sublime.com</a> 
          </div>
        </div>
        <div class="aboutme-text">
          <h1><?php echo $mainAbout = 'О себе'; ?></h1>
          <font color="
            <?php
              echo 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).')';
            ?>"> <?php echo $str = 'Коротко о себе: Меня зовут Андрей, мне 30 лет.';?></font>
            <?php echo $str2 = 'Основная деятельность на сегодняшний день - арбитраж трафика.
            Активно изучаю веб-разработку. Обучаюсь в Факт.Академии.'; ?>      
        </div>
        <div class="aboutcourse">
        <h1><?php echo $mainAboutCourse = 'О курсе'; ?></h1>
          <?php
              $str3 = "Поговорим об учебе в Факт.Академии. В целом все круто и мне нравится,
              есть нюансы конечно, но они не относятся к качеству преподавания.
              Эти нюансы связаны с моим понимание циклов, в целом я их понимаю, 
              но когда появляются математические задачи, где их надо применить,
              тут я начинаю страдать. Связано это с гуманитарным складом ума или
              в чем та другом, я пока не понял. Активно пытаюсь устранить эти пробелы.
              Надеюсь с практикой все придет, и математические задачи уйдут из моей жизни.";
              $arr = explode(' ', $str3);
              $num = 1;
              foreach ($arr as $value) {
                  if (($num % 2) == 0) {
                    echo "<font color='red';>$value </font>";
                  } else { echo "<font color='green';>$value </font>";}
                  $num++;
              }
          ?>
        </div>
        <div class="numStr">
          <?php
          $strNum = str_word_count($str3, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя") + 
          str_word_count($mainAbout, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя") + 
          str_word_count($mainAboutCourse, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя") + 
          str_word_count($str, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя") + 
          str_word_count($str2, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");

          echo 'Количество слов:' . ' ' . $strNum;
          ?>
        </div>
        <div class="date">
          <?php
          echo 'Дата рождения: ' . $dateOfBirth  = date("M-d-Y", mktime(0, 0, 0, 02, 07, 1993)) . '<br>'; 
          echo 'Сколько дней прошло: ' . $dateDiff = date_diff(new DateTime(), new DateTime('1993-02-07')) -> days;
          ?>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>