<?php
$path = "big_image/";
$types = array('image/gif', 'image/png', 'image/jpeg');

if(isset($_POST['download'])) {
    if (@copy($_FILES['image']['tmp_name'], $path . $_FILES['image']['name'])){
        header("Location: view.php");
    }
    else{
        echo 'Загрузка изображения не произошла';
    }
    if (!in_array($_FILES['picture']['type'], $types)){
        echo "Неверный тип файла";
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<h2 style="margin-top: 30px;">Загрузка файла на сервер</h2>
<form method="post" enctype="multipart/form-data">
    <div style="margin-top: 50px;">
        <input type="file" name="image">
    </div>
    <div style="margin-top: 40px;">
        <input type="submit" name="download" value="Загрузить файл">
    </div>
</form>
</body>
</html>