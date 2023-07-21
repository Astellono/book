<?php
if (!isset($_COOKIE["admin"]))

    header('Location: /admin.html');

$news_id = $_GET['id'];


require_once '../../php/connect.php';


$news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");
$news = mysqli_fetch_array($news)
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change</title>

    <link rel="stylesheet" href="../../style/reset.css">
    <link rel="stylesheet" href="../admin.css">
    <!-- <script src="../../js/newsPag.js" defer></script> -->
    <script src="../../js/chFroala.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

    <style>
        .containerAdmin {


            width: 100%;
            height: 100vh
        }

        .form {
            width: 100%;
            max-width: 880px;
            padding: 20px 20px;
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
        <form action="update.php" id="form" class="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $news['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                <input name="title" type="textarea" class="form-control" aria-describedby="emailHelp"
                    value="<?= $news['title'] ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Текст</label>

                <div name="desc" id="froala"></div>
                <script type="text/javascript"
                    src="../../node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
                <script> var editor = new FroalaEditor('#froala');</script>


                <textarea id='textarea' hidden="true" style='height:300px; white-space: pre;' name="desc"
                    class="form-control" value=""><?= $news['desc'] ?></textarea>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Выбор картинки: </label>
                <input type="file" name="file">
            </div>


            <input type="submit" class="btn btn-primary" value='Изменить'>
        </form>

    </div>

</body>

</html>