<?php 
$data = $_POST;
if( isset($data['go_login']) )
{
    if( trim($data['login']) == '' )
    {
        $errors[] = 'Введите логин!';
    };
    if( trim($data['password']) == '' )
    {
        $errors[] = 'Введите пароль!';
    }
    if( empty($errors))
    {
        $data['password'] = md5($_POST['password']);
        $login = $data['login'];
        $password = $data['password'];
        $pageSignupGood = '/assets/loginGood.php';
        header('location: ' . $pageSignupGood);
        }else
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
}
?>


<form action="/assets/login.php" method="POST">

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


</form>