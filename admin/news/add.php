<?php


$title = $_POST['title'];
$desc = $_POST['desc'];
$img = $_POST['img'];
$date = $_POST['date'];


require_once '../../php/connect.php';





mysqli_query($connect, "INSERT INTO `news` (`id`, `title`, `desc`, `date`, `img`) VALUES (NULL, '$title', '$desc', NULL, '$img')");

// mysqli_query($connect, "INSERT * DATE_FORMAT(`date_registration`,`%d.%m.%Y`) as `date_reg` FROM `news`");



header('location: news.php');
