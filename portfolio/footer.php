<?php
function getBirth() {
    $dateOfBirth = date("M-d-Y", mktime(0, 0, 0, 01, 02, 1990));
    return 'Дата рождения: ' . $dateOfBirth;
}
function getDaysBirth() {
    $dateDiff = date_diff(new DateTime(), new DateTime('1990-01-02'))->days;
    return 'Сколько дней прошло: ' . $dateDiff;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <select name="color">
        <option value="white">Белый</option>
        <option value="red">Красный</option>
        <option value="green">Зеленый</option>
        <option value="blue">Синий</option>
    </select>
    <input type="submit" value="Изменить цвет">
</form>
<footer>
    <div class="footer">
        <?php
        echo getBirth() . '<br>';
        echo getDaysBirth();
        ?>
    </div>
</footer>
</body>
</html>

<!--// Цвета-->
<?php
function setBackgroundColor($color) {
    echo '<style>body, footer { background-color: ' . $color . '; transition: background-color 0.5s; }</style>';
}
if (isset($_COOKIE['backgroundColor'])) {
    $selectedColor = $_COOKIE['backgroundColor'];
} else {
    $selectedColor = 'white';
}
if (isset($_POST['color'])) {
    $selectedColor = $_POST['color'];
    setcookie('backgroundColor', $selectedColor, time() + 3600 * 24 * 30);
}
setBackgroundColor($selectedColor);
?>
