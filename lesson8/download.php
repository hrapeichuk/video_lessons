<?php
include_once ('database.php');
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');

if(isset($_POST['download'])){
    if (@copy($_FILES['image']['tmp_name'], $path_to_big_images . $_FILES['image']['name'])){

        $size = getimagesize($path_to_big_images . $_FILES['image']['name']);
        $width = $size[0];
        $height = $size[1];
        $image = $path_to_big_images . $_FILES['image']['name'];
        $new_image = $path_to_small_images . $_FILES['image']['name'];
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $review = 0;

        if($width > $height){
            $width_min = 200;
            $scale = $width_min/$width;
            $height_min = $height * $scale;
        }
        else{
            $height_min = 200;
            $scale = $height_min/$height;
            $width_min = $width * $scale;
        }
        $thumb = imagecreatetruecolor($width_min, $height_min);
        $source = imagecreatefromjpeg($image);

        imagecopyresized($thumb, $source, 0, 0, 0, 0, $width_min, $height_min, $width, $height);
        imagejpeg($thumb, $new_image);

        if ($stmt = $connection->prepare("INSERT INTO image (name, type, review) VALUES (?, ?, ?)")) {
            $stmt->bind_param('ssi', $name, $type, $review);
            if (!$stmt->execute()) {
                die('Insert error');
            }
        }
        header("Location: view.php");
    }
    else{
        echo "Загрузка изображения не произошла";
    }
    if (!in_array($_FILES['image']['type'], $types)){
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