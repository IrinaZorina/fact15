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
<h1>Анкета</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>1. Вы обычно опаздываете на встречи? <input type="radio" name="q1" value="да" checked> Да <input type="radio" name="q1" value="нет"> Нет</p>
    <p>2. Вам нравится убирать квартиру? <input type="radio" name="q2" value="да" checked> Да <input type="radio" name="q2" value="нет"> Нет</p>
    <p>3. Вы любите готовить? <input type="radio" name="q3" value="да" checked> Да <input type="radio" name="q3" value="нет"> Нет</p>
    <p>4. Вам нравится читать книги? <input type="radio" name="q4" value="да" checked> Да <input type="radio" name="q4" value="нет"> Нет</p>
    <p>5. Вы занимаетесь спортом? <input type="radio" name="q5" value="да" checked> Да <input type="radio" name="q5" value="нет"> Нет</p>
    <p>6. Вы любите животных? <input type="radio" name="q6" value="да" checked> Да <input type="radio" name="q6" value="нет"> Нет</p>
    <p>7. Вы любите пиццу? <input type="radio" name="q7" value="да" checked> Да <input type="radio" name="q7" value="нет"> Нет</p>
    <p>8. Вы бывали в Москве? <input type="radio" name="q8" value="да" checked> Да <input type="radio" name="q8" value="нет"> Нет</p>
    <p>9. У вас есть высшее образование? <input type="radio" name="q9" value="да" checked> Да <input type="radio" name="q9" value="нет"> Нет</p>
    <p>10. Вам нравится программирование? <input type="radio" name="q10" value="да" checked> Да <input type="radio" name="q10" value="нет"> Нет</p>
    <p>11. Вы любите HTML? <input type="radio" name="q11" value="да" checked> Да <input type="radio" name="q11" value="нет"> Нет</p>
    <p>12. Вы любите CSS? <input type="radio" name="q12" value="да" checked> Да <input type="radio" name="q12" value="нет"> Нет</p>
    <p>13. Вы любите PHP? <input type="radio" name="q13" value="да" checked> Да <input type="radio" name="q13" value="нет"> Нет</p>
    <p>14. Вы занимаетесь утренней зарядкой? <input type="radio" name="q14" value="да" checked> Да <input type="radio" name="q14" value="нет"> Нет</p>
    <p>15.Вы любите лето? <input type="radio" name="q15" value="да" checked> Да <input type="radio" name="q15" value="нет"> Нет</p>
    <p>16. Вы любите горы? <input type="radio" name="q16" value="да" checked> Да <input type="radio" name="q16" value="нет"> Нет</p>
    <p>17. Вы любите сплавы по реке? <input type="radio" name="q17" value="да" checked> Да <input type="radio" name="q17" value="нет"> Нет</p>
    <p>18. Вы любите кататься на велосипеде? <input type="radio" name="q18" value="да" checked> Да <input type="radio" name="q18" value="нет"> Нет</p>
    <p>19. Вы ночевали в палатке? <input type="radio" name="q19" value="да" checked> Да <input type="radio" name="q19" value="нет"> Нет</p>
    <p><input type="submit" value="Отправить"></p>
</form>

</body>
</html>
<?php
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 19; $i++) {
        $question = "q" . $i;
        if (isset($_POST[$question])) {
            $answer = $_POST[$question];
            if (in_array($i, [3, 9, 10, 13, 14, 19]) && $answer == "да") {
                $score++;
            } elseif (in_array($i, [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18]) && $answer == "нет") {
                $score++;
            }
        }
    }
    echo "<h2>Результат анкетирования:</h2>";
    if ($score > 15) {
        echo "У Вас покладистый характер";
    } elseif ($score >= 8 && $score <= 15) {
        echo "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        echo "Вашим друзьям можно посочувствовать";
    }
}
?>