<?php
$db_hostname = 'localhost';
$db_database = 'images';
$db_username = 'vita';
$db_password = 'vita';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
if ($connection->connect_error) die($connection->connect_error);
$connection->set_charset("utf8");


$path_to_big_images = "big_image/";
$path_to_small_images = "small_image/";