<?php 

if( isset($_GET[ 'l' ]) )
{
   
    if( $_GET[ 'l' ] == 1 )
    {
        $imgTask4 = '<img src="/img/1.png" alt="image" width="200px" height="200px" class="imgTask4">';
    
    };
    if( $_GET[ 'l' ] == 2 )
    {
        $imgTask4 = '<img src="/img/2.png" alt="image" width="200px" height="200px" class="imgTask4">';
    
    };
    if( $_GET[ 'l' ] == 3 )
    {
        $imgTask4 = '<img src="/img/3.png" alt="image" width="200px" height="200px" class="imgTask4">';
    
    };
    if( $_GET[ 'l' ] == 4 )
    {
        $imgTask4 = '<img src="/img/4.png" alt="image" width="200px" height="200px" class="imgTask4">';
     
    };
}
print_r($_GET);
?>

<?php require_once '../header.php' ?>
<link rel="stylesheet" href="/css/main.css" />
<form action="/assets/answer_get_post/task_4.php" method="Get" class="form4">

<p>
    <p><strong>Выберите нужное</strong></p>
    <input id="lab1" type="radio" name="l" value="1">
    <label for="lab1">Лаб1</label>
    <input id="lab2" type="radio" name="l" value="2">
    <label for="lab2">Лаб2</label>
    <input id="lab3" type="radio" name="l" value="3">
    <label for="lab3">Лаб3</label>
    <input id="lab4" type="radio" name="l" value="4">
    <label for="lab4">Лаб4</label>
</p>

<p>
<button type="submit" name="">Отправить</button>
</p>

</form>
<?php 
if( empty($_GET))
{
    echo '<p class="task4Error">Выберите лабораторную работу</p>';

}else {echo $imgTask4; }
 ?>
