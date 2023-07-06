<?php
$login = $_POST['login'];
$pass = $_POST['pass'];






$mysql = new mysqli('localhost', 'astellono_bifros', '123137', 'astellono_bifros');

// $mysql->query("INSERT INTO `admin` (`login`, `pass`) VALUES('$login', '$pass')"); Регистрация
$result = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `pass` = '$pass'");

$admin = $result->fetch_assoc();

if (count($admin) == 0) {
    echo 'Неверные данные';

    header('Refresh: 2;url=/admin.html');
    exit();
}

setcookie('admin', $admin['login'], time() + 3600, "/");

$mysql->close();



header('Location: /admin/adminPanel.php')
    ?>