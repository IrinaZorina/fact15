<?php
$formSum = array_sum($_POST);
if ($formSum > 15)
{
    $str = 'У Вас покладистый характер';
}
if ($formSum > 8 && $formSum < 15)
{
    $str = 'Вы не лишены недостатков, но с вами можно ладить';
}
if ($formSum < 8) 
{
    $str = 'Вашим друзьям можно посочувствовать';
}
if ($formSum == 0) 
{
    $str = 'Пройдите тестирование';
}
/*         $pageResult = 'task_3-2_Good.php';
        header('location: ' . $pageResult); */
?>



<link rel="stylesheet" href="/css/main.css" />
<div class="resultTask3_2"> <?php  echo $str ?> </div>
<form action="/assets/answer_get_post/task_3-2.php" method="POST" class="form3_2">

<p>
    <p><strong>Вопрос №1</strong></p>
    <input id="yes" type="radio" name="question1" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question1" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №2</strong></p>
    <input id="yes" type="radio" name="question2" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question2" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №3</strong></p>
    <input id="yes" type="radio" name="question3" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question3" value="0">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №4</strong></p>
    <input id="yes" type="radio" name="question4" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question4" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №5</strong></p>
    <input id="yes" type="radio" name="question5" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question5" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №6</strong></p>
    <input id="yes" type="radio" name="question6" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question6" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №7</strong></p>
    <input id="yes" type="radio" name="question7" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question7" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №8</strong></p>
    <input id="yes" type="radio" name="question8" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question8" value="1">
    <label for="no">Нет</label>
</p>

<p>
    <p><strong>Вопрос №9</strong></p>
    <input id="yes" type="radio" name="question9" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question9" value="0">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №10</strong></p>
    <input id="yes" type="radio" name="question10" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question10" value="0">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №11</strong></p>
    <input id="yes" type="radio" name="question11" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question11" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №12</strong></p>
    <input id="yes" type="radio" name="question12" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question12" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №13</strong></p>
    <input id="yes" type="radio" name="question13" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question13" value="0">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №14</strong></p>
    <input id="yes" type="radio" name="question14" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question14" value="0">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №15</strong></p>
    <input id="yes" type="radio" name="question15" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question15" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №16</strong></p>
    <input id="yes" type="radio" name="question16" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question16" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №17</strong></p>
    <input id="yes" type="radio" name="question17" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question17" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №18</strong></p>
    <input id="yes" type="radio" name="question18" value="0" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question18" value="1">
    <label for="no">Нет</label>
</p>


<p>
    <p><strong>Вопрос №19</strong></p>
    <input id="yes" type="radio" name="question19" value="1" checked>
    <label for="yes">Да</label>
    <input id="no" type="radio" name="question19" value="0">
    <label for="no">Нет</label>
</p>

<p>
<button type="submit" name="">Отправить</button>
</p>
</form>