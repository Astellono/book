<?php
if (!isset($_COOKIE["admin"]))

    header('Location: /admin.html');


require_once '../../php/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/reset.css">

    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        ul {
            padding-left: 0;
        }
    </style>
    <script src="../../js/newsPag.js" defer></script>
    <title>News</title>
</head>

<body>
    <section name="news" class="news">
        <div class="container">

            <h2 class="news__title">
                <a name="news"></a>
                Новости
            </h2>
            <a class="back" href="../adminPanel.php">Назад</a>
            <ul class="news__list">
            <!-- SELECT *,DATE_FORMAT(date_registration,'%d.%m.%Y') as date_reg FROM users -->
                <?php
                
                $news = mysqli_query($connect, "SELECT * FROM `news`");
                $news = mysqli_fetch_all($news);

                foreach ($news as $news) {
                    ?>
                    <li class="news__item">
                        <div class="news__imgBox">
                            <img class="news__img" src="<?= $news[4] ?>" alt="" srcset="">
                        </div>
                        <div class="news__textBlock">
                            <div class="CRUD__block">
                                <a href="change.php?id=<?= $news[0] ?>" style="margin-right: 7px;"><img
                                        src="../svg/change.svg"></a>
                                <a onclick="return confirm('Are you sure?')" href="dell.php?id=<?= $news[0] ?>"><img
                                        src="../svg/del.svg"></a>
                            </div>
                            <h3 class="news__textTitle">
                                <?= $news[1] ?>
                            </h3>
                            <p class="news__textDesc">
                                <?= nl2br($news[2]) ?>
                            </p>
                            <p class="news__date">
                                <?= $news[3] ?>
                            </p>
                        </div>


                    </li>

                    <?php
                }
                ?>

            </ul>
            <div class="news__btnBlock">
                <button class="news__btn" id='watchNews'>Показать еще</button>
                <button class="news__btn" id='clear'>Cвернуть</button>
            </div>

        </div>
        <div class="container">
            <h2 class="news__title" style="border-bottom:none; font-size:24px">
                Добавить
            </h2>
            <form action="add.php" id='form' class="form" method="post">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                    <input name="title" type="textarea" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Текст</label>
                    <textarea id='textarea' style='height:300px;' name="desc" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ссылка на картинку</label>
                    <input name=" img" type="text" class="form-control">
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Дата</label>
                    <input name="date" type="text" class="form-control">
                </div> -->

                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>

        </div>
    </section>
</body>

</html>