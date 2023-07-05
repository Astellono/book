<?php
if (!isset($_COOKIE["admin"]))

    header('Location: /admin.html');


require_once '../php/connect.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/reset.css">

    <link rel="stylesheet" href="/admin/admin.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>News</title>
</head>

<body>
    <section class="news">
        <div class="container">

            <h2 class="news__title">
                <a name="news"></a>
                Новости
            </h2>
            <a class="back" href="../admin/adminPanel.php">Назад</a>
            <ul class="news__list">

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
                            <h3 class="news__textTitle">
                                <?= $news[1] ?>
                            </h3>
                            <p class="news__textDesc">
                                <?= $news[2] ?>
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
        </div>
    </section>
</body>

</html>