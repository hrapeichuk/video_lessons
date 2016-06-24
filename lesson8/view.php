<?php
include_once ('database.php');
$result = $connection->query("SELECT * FROM image;");

if (isset($_GET['action']) && $_GET['action'] == 'view' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    header("Location: image.php#id_$id");
}
?>
<html>
<head>
    <title>Галерея</title>
</head>
<body>
<h2 style="margin-top: 30px; text-align: center;">Галерея изображений</h2>
<a href="download.php">Загрузить ещё изображения</a>
<br/><br/>
<div style="overflow: auto; width: 100%; margin-top: 40px;">
    <?php for ($i = 0 ; $i < $result->num_rows ; ++$i): ?>
    <?php
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $id = $row['id'];
    $name = $row['name'];
    $review = $row['review'];
    ?>
        <div style="text-align:center; width:200px; height:300px; float: left; padding-right: 40px;">
            <div>
                <p align="center"><?php echo $name; ?></p>
            </div>
            <div id="image_id<?php echo $id; ?>">
                <a href="image.php?action=view&id=<?php echo $id; ?>" target="_blank"><img src="<?php echo $path_to_small_images.$name; ?>"></a>
            </div>
            <div>
                <p align="center">Количество просмотров <?php echo $review; ?></p>
            </div>
        </div>
    <?php endfor; ?>
</div>
</body>
</html>