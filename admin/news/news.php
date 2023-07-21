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
    <link rel="stylesheet" href="../../style/slider.css">
    <style>
        ul {
            padding-left: 0;
        }

        /* .fr-wrapper>div:first-child {
            display: none !important;
        } */
    </style>
    <script src="../../js/newsPag.js" defer></script>
    <script src="../../js/modal.js" defer></script>
    <script src="../../js/slider.js" defer></script>

    <link href="../../node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
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
                                <a onclick="event.stopPropagation();" href="change.php?id=<?= $news[0] ?>"
                                    style="margin-right: 7px;"><img src="../svg/change.svg"></a>
                                <a onclick="event.stopPropagation(); return confirm('Are you sure?'); "
                                    href="dell.php?id=<?= $news[0] ?>"><img src="../svg/del.svg"></a>
                            </div>
                            <h3 class="news__textTitle">
                                <?= $news[1] ?>
                            </h3>
                            <div class="news__textDesc">
                                <?= $news[2] ?>
                            </div>
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
            <form action="add.php" id='form' class="form" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                    <input name="title" type="textarea" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Текст</label>
                    <div name="desc" id="froala"></div>
                    <script type="text/javascript"
                        src="../../node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
                    <script> var editor = new FroalaEditor('#froala');</script>

                    <textarea style="display:none;" name='desc' id='textarea' style='height:300px;'
                        class="form-control">

                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Выбор картинки: </label>
                    <input type="file" name="file">
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Дата</label>
                    <input name="date" type="text" class="form-control">
                </div> -->

                <input type="submit" id='addNews' class="btn btn-primary">
            </form>

        </div>
    </section>
    <section class="modalMy" id='modal'>
        <div class="container">
            <div class="modalMy__mainBlock">
                <div class="modalMy__imgBlock">
                    <img src="" class="modalMy__img">
                </div>
                <div class="itc-slider" data-slider="itc-slider" data-autoplay="true" data-interval="5000" data-swipe="true">
                    <div class="itc-slider-wrapper">
                        <div class="itc-slider-items">
                            <!-- <div class="itc-slider-item">
                                <img src="../../img/mainImg.jpg" class="modal__img" alt="" srcset="">
                            </div>
                            <div class="itc-slider-item">
                                <img src="../../img/topImg.png" class="modal__img" alt="" srcset="">
                            </div>
                            <div class="itc-slider-item">
                                <img src="../../img/mainImg.jpg" class="modal__img" alt="" srcset="">
                            </div> -->
                        </div>
                    </div>
                    <!-- Кнопки для перехода к предыдущему и следующему слайду -->
                    <button class="itc-slider-btn itc-slider-btn-prev"></button>
                    <button class="itc-slider-btn itc-slider-btn-next"></button>
                </div>
                <h3 class="modalMy__title"> </h3>

                <p class="modalMy__desc">

                </p>
                
            </div>
        </div>
    </section>
</body>

</html>