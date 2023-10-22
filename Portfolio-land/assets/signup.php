<?php 
$data = $_POST;
if( isset($data['signup']) )
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
        $pageSignupGood = '../assets/signupGood.php';
        header('location: ' . $pageSignupGood);
        }else
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
}
?>

<form action="/assets/signup.php" method="POST">

<p>
    <p><strong>Придумайте логин</strong></p>
    <input type="text" name="login">
</p>

<p>
    <p><strong>Придумайте пароль</strong></p>
    <input type="password" name="password">
</p>

<p>
<button type="submit" name="signup">Отправить</button>
</p>


</form>