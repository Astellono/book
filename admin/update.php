<?php

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$img = $_POST['img'];
$date = $_POST['date'];


require_once '../php/connect.php';


mysqli_query($connect, "UPDATE `news` SET `title` = '$title', `desc` = '$desc', `date` = '$date', `img` = '$img' WHERE `news`.`id` = $id");

header('location: /admin/news.php');
