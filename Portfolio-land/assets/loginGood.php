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
        <strong class="reg_good">Вы успешно вошли!</strong>
        <p class="lastPage">Последняя страница, которую вы посетили: <?php echo $_COOKIE['Page']?></p>
      </div>
    </main>

    <!--  FOOTER -->
    <?php require_once 'footer.php' ?>
  </body>
</html>