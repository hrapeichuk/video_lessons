<?php
session_start();
if (!isset($_SESSION['username']) && isset($_COOKIE['username'])){
    $_SESSION['username'] = $_COOKIE['username'];
}
$username = $_SESSION['username'];
$_SESSION['page'] = "a.php";

if ($username == null){
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Страница А</title>
</head>
<body>
<h1>Страница "А"</h1>
<b>А</b> и <a href="b.php">Б</a> сидели на трубе.
<br/>
<br/>
Вы вошли как <b><?php echo $username; ?></b> | <a
    href="login.php">Выход</a>
</body>
</html>