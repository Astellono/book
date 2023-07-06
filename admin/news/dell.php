<?php

$id = $_GET['id'];



require_once '../../php/connect.php';


mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`id` = $id");

header('location: news.php');
