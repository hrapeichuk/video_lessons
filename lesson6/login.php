<?php
session_start();
setcookie('username', '', time() - 1);
unset($_SESSION['username']);

if (count($_POST) > 0){
    $_SESSION['username'] = $_POST['username'];
    if ($_POST['remember'] == 'on'){
        setcookie('username', $username, time() + 3600 * 24 * 7);
    }
    header("Location: a.php");
}
?>
<html>
<head>
    <title>Вход на сайт</title>
</head>
<body>
<h1>Вход на сайт</h1>
<form action="login.php" method="post">
    Введите имя:
    <br/>
    <input type="text" name="username" />
    <br/>
    <input type="checkbox" name="remember" /> Запомнить меня
    <br/>
    <input type="submit" value="Войти" />
</form>
</body>
</html>