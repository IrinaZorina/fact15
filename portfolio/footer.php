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
