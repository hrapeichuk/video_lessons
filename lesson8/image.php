<?php
include_once ('database.php');
$id = (int)$_GET['id'];

$data = $connection->query("SELECT * FROM image WHERE id = '$id'")->fetch_array(MYSQLI_ASSOC);
$name = $data['name'];
$review = $data['review'];
$review ++;

if ($result = $connection->prepare("UPDATE image SET review = ? WHERE id = ?")) {
    $result->bind_param('ii', $review, $id);
    if (!$result->execute()) {
        die('Update error');
    }
}
?>
<html>
<head>
    <title>Галерея</title>
</head>
<body>
<img src="<?php echo $path_to_big_images.$name; ?>">
</body>
</html>