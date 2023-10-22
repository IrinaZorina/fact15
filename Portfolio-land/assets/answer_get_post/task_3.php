<?php 
$data = $_POST;
if( isset($data[ 'go_login' ]) )
{
    if( trim($data[ 'login' ]) == '' )
    {
        $errors[] = 'Введите логин!';
    };
    if( trim($data[ 'password' ]) == '' )
    {
        $errors[] = 'Введите пароль!';
    }
    if( empty($errors))
    {
        $data[ 'password' ] = md5($_POST[ 'password' ]);
        $login = $data[ 'login' ];
        $password = $data[ 'password' ];
        $pageSignupGood = 'task_3_Good.php';
        header('location: ' . $pageSignupGood);
        }else
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
}
print_r($data);
?>

<?php require_once '../header.php' ?>
<link rel="stylesheet" href="/css/main.css" />

<form action="/assets/answer_get_post/task_3.php" method="POST" class="form3">

<p>
    <p><strong>Ваш логин</strong></p>
    <input type="text" name="login">
</p>

<p>
    <p><strong>Ваш пароль</strong></p>
    <input type="password" name="password">
</p>

<p>
<button type="submit" name="go_login">Отправить</button>
</p>
<p>*Не ясна задача по списку. Можно рассмотреть ее на уроке</p>


</form>