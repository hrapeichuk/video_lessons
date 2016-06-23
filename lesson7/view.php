<?php
$path = "big_image/";
?>
<html>
<head>
    <title>Галерея</title>
</head>
<body>
<h2 style="margin-top: 30px; text-align: center;">Галерея изображений</h2>
<a href="download.php">Загрузить ещё изображения</a>
<br/><br/>
<?php
if ($open = scandir($path)) {
    foreach ($open as $k => $v) {
        if ($v != "." && $v != "..") {
            echo '<img src="'.$path.$v.'" width="225px">';
        }
    }
}
?>
</body>
</html>