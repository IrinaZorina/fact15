<footer>
    <div class="footer">
    <?php
    echo 'Дата рождения: ' . $dateOfBirth  = date("M-d-Y", mktime(0, 0, 0, 01, 02, 1990)) . '<br>';
    echo 'Сколько дней прошло: ' . $dateDiff = date_diff(new DateTime(), new DateTime('1990-01-02')) -> days;
    ?>
    </div>
</footer>
</body>
</html>