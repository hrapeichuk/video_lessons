<?php
session_start();
if ($_SESSION['username'] == ''){
    header("Location: login.php");
    exit();
}
else{
    $page = $_SESSION['page'];
    header("Location: $page");
}