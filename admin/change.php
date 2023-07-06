<?php
if (!isset($_COOKIE["admin"]))

    header('Location: /admin.html');

$news_id = $_GET['id'];


require_once '../php/connect.php';


$news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");
$news = mysqli_fetch_array($news)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/reset.css">
    <title>Change</title>

    <link rel="stylesheet" href="/admin/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .containerAdmin {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh
        }

        .form {
            width: 100%;
            max-width: 600px;
            padding: 0 20px;
        }

        .btn-primary {
            width: 100%;
            text-align: center;
            background-color: rgb(69, 28, 110);
        }

        .form-label {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="containerAdmin">
        <form action="/admin/update.php" class="form" method="post">
            <input type="hidden" name="id" value="<?= $news['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                <input name="title" type="textarea" class="form-control" aria-describedby="emailHelp" value="<?= $news['title'] ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Текст</label>
                <textarea style='height:300px' name="desc" class="form-control" value=""><?= $news['desc'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" ">Ссылка на картинку</label>
                <input name="img" type="text" class="form-control" value="<?= $news['img'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Дата</label>
                <input name="date" type="text" class="form-control"  value="<?= $news['date'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

    </div>
</body>

</html>