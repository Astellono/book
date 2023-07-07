<?php

require_once 'php/connect.php'

    ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fav.ico">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css?ver=227">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <script src="js/burger.js" defer></script>
    <script src="js/newsPag.js" defer></script>
    <title>Bifrǫst</title>
</head>

<body>
    <header>
        <?php
        if (isset($_COOKIE["admin"]))
            echo '<a class="menuAdmin" href="admin/adminPanel.php">В админку</a>'


                ?>




            <img class="header__title" src="img/logo.png">

            <hr>

        </header>

        <section class="menu">
            <div class="container">

                <nav>
                    <img class="menu__burgerImg" src="img/burger.svg" id="burger" alt="" srcset="">
                    <ul class="menu__list" id="menu">
                        <li class="menu__item cross" id="cross">
                            <img class="menu__cross" src="img/cross.svg">
                        </li>
                       
                        <li class="menu__item">
                            <a class="menu__link" href="#news">Новости</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#book">Книги</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#author">Об авторе</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <hr>
        </section>
        <section class="main">
            <div class="container container__main">
                <div class="main__desc">
                    <h2 class="main__title">Биврёст</h2>
                    <p class="main__text">Мир, где сосуществуют различные магические реальности, объединенные Радужным
                        Мостом. Этот мистический мост простирается сквозь бесконечные пространства, пересекая все миры и
                        связывая их воедино. Каждый мир на Биврёсте уникален и многогранен во всех своих проявлениях.</p>
                    <a class="main__link">GO</a>
                </div>
                <div class="main__imgBox">
                    <img class="main__img" src="img/mainImg.jpg" alt="" srcset="">
                </div>

            </div>

        </section>

        <section class="news">
            <div class="container">

                <h2 class="news__title">
                    <a name="news"></a>
                    Новости
                </h2>
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
    </section>
</body>

</html>