<?php
$path_to_big_images = "big_image/";
$path_to_small_images = "small_image/";
?>
<html>
<head>
    <title>Галерея</title>
</head>
<body>
<h2 style="margin-top: 30px; text-align: center;">Галерея изображений</h2>
<a href="download.php">Загрузить ещё изображения</a>
<br/><br/>
<div style="overflow: auto; width: 100%;">
<?php foreach (scandir($path_to_big_images) as $key => $value): ?>
    <?php if ($value != "." && $value != ".."): ?>
        <div style="text-align:center; width:200px; height:200px; float: left; padding-right: 40px;">
            <div>
                <p align="center"><?php echo $value?></p>
            </div>
            <div>
                <a href="<?php echo $path_to_big_images.$value?>" target="_blank"><img src="<?php echo $path_to_small_images.$value?>"></a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>
</body>
</html>