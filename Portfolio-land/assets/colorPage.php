<?php
$color = '';
if (isset($_GET['go'])) {
    if ($_GET['color'] == 'green') {
        $color = 'style = "background-color: green;"';
    }
    elseif ($_GET['color'] == 'blue') {
        $color = 'style = "background-color: blue;"';
    }
    elseif ($_GET['color'] == 'red') {
        $color = 'style = "background-color: red;"';
    }
    elseif ($_GET['color'] == 'yellow') {
        $color = 'style = "background-color: yellow;"';
    }
};

if(isset($_GET['color'])){
    setcookie('color',$_GET["color"],time()+3600);
    $сolor = $_GET["color"];
}
else{
    $color = (isset($_COOKIE['color']))?$_COOKIE['color']:'';
};

if(isset($_COOKIE['color'])) {
    if ($_COOKIE['color'] == 'green') {
        $color = 'style = "background-color: green;"';
    }
    elseif ($_COOKIE['color'] == 'blue') {
        $color = 'style = "background-color: blue;"';
    }
    elseif ($_COOKIE['color'] == 'red') {
        $color = 'style = "background-color: red;"';
    }
    elseif ($_COOKIE['color'] == 'yellow') {
        $color = 'style = "background-color: yellow;"';
    }
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XAYC</title>
  </head>

  <body <?=$color?>>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <select name="color" id="">
            <option value="green">GREEN</option>
            <option value="blue">BLUE</option>
            <option value="red">RED</option>
            <option value="yellow">YELLOW</option>
        </select>
        <input type="submit" name="go">
    </form>
  </body>
</html>