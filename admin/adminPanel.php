<?php

if (!isset($_COOKIE["admin"]))
    header('Location: /admin.html');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/reset.css">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/admin/admin.css">
</head>

<body>

    <div class="containerAdmin">
        <h1 class="admin__title">Панель управления</h1>
        <ul class="admin__list">
            <li class="admin__item">
                <a href="/admin/news.php" class="admin__itemName">Новости</a>
            </li>
            <li class="admin__item">
                <a href="/admin/news.php" class="admin__itemName">Книги</a>
            </li>
            <li class="admin__item">
                <a href="/admin/news.php" class="admin__itemName">На сайт</a>
            </li>
        </ul>
    </div>
</body>

</html>