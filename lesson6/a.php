<?php
include_once ('session.php');
$_SESSION['page'] = "a.php";
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