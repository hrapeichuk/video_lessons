<?php
include_once ('session.php');
$_SESSION['page'] = "b.php";
?>
<html>
<head>
    <title>Страница Б</title>
</head>
<body>
<h1>Страница "Б"</h1>
<a href="a.php">А</a> и <b>Б</b> сидели на трубе.
<br/>
<br/>
Вы вошли как <b><?php echo $username; ?></b> | <a
    href="login.php">Выход</a>
</body>
</html>