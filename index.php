<?php
include "config.php";

$firstName = "Alexey";
$lastName = "Mazheykin";
$email = "mazheykin@cmd.su";
$address = "Moscow";
$successOrder = "$firstName, заказ успешно оформлен";
//Жанры
$categories = ["Sci-fi", "Comedy", "Triller", "Roman", "Programming"];
//Издательства
$publisher = ["Exmo", "Book", "Ман Иванов и Фербер", "Освита"];
//$publisher = [];

$book = [
    "id" => "KJKJ",
    "autor" => "Stiven King",
    "title" => "PHP 8 for 3 days",
    "price" => 1500,
    "description" => "Fast PHP learning"
];
$books = [
    [
        "id" => "KJKJ",
        "autor" => "Stiven King",
        "title" => "PHP 8 for 3 days",
        "price" => 1500,
        "description" => "Fast PHP learning"
    ],
    [
        "id" => "KJKE",
        "autor" => "Tarasov",
        "title" => "MVC on PHP",
        "price" => 2100,
        "description" => "Fast PHP learning"
    ],
    [
        "id" => "KJKJ",
        "autor" => "Vasya Pupkin",
        "title" => "PHP the best",
        "price" => 1300,
        "description" => "Slow PHP"
    ]
];

$page = "index"; // Current page

$menu = [
    "index" => "Каталог",
    "delivery" => "Доставка",
    "contacts" => "Контакты",
    "login" => "Войти",
    "basket" => "Корзина",

];
foreach ($menu as $key=>$value) {


}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
        .card-deck {
            margin-top: 20px
        }

        .card-body img {
            display: block;
            margin: 0 auto 15px;

        }

        .card-footer {
            background: transparent;
            border: 0;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Интернет-магазин Книжка</a>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <?php

                foreach ($menu as $key=>$value) { ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="?page=<?= $key ?>"><?= $value ?></a>
                    </li>
                    <?php
                }
                ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-md-3 col-sm-3 ">

            <h4>Категория</h4>

            <div class="row">
                <?php if (count($categories)) {
                    $i = 0;
                    while ($i < count($categories)) {
                        ?>
                        <a class="dropdown-item" href="#"><?= $categories[$i] ?></a>
                        <?php
                        $i++;
                    }
                } else { ?>
                    <a class="dropdown-item" href="#">Нет категорий</a>
                <?php } ?>
            </div>
            <hr>

            <h4>Цена</h4>

            <div class="row">
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">от</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default"> &nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">&nbsp;

                    <button type="button" class="btn btn-success">Найти</button>
                </div>
            </div>
            <hr>
            <h4>Издательство</h4>

            <div class="row">

                <ul class="list-group col-md-12 col-sm-12">
                    <?php if ($publisher) { ?>
                        <?php for ($i = 0; $i < count($publisher); $i++) { ?>
                            <li class="list-group-item">
                                <input type="checkbox" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"><?= $publisher[$i] ?></label>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <li class="list-group-item">
                            <span>Издательств нет</span>
                        </li>
                    <?php } ?>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-success">Найти</button>
                    </li>
                </ul>

            </div>
            <hr>


        </div>

        <div class="col-md-9 col-sm-9 ">
            <?php
            $page = $_GET['page'] ?: $page;
            switch ($page) {
                case 'index':
                    $pageName = 'Каталог товаров';
                    break;
                case 'basket':
                    $pageName = 'Корзина товаров';
                    break;
                case 'contacts':
                    $pageName = 'Наши контакты';
                    break;
                case 'delivery':
                    $pageName = 'Доставка';
                    break;
                case 'login':
                    $pageName = 'Вход на сайт';
                    break;
            }
            ?>
            <h1><?= $pageName ?></h1>

            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title"><?= $book["price"] ?></h3>
                        <p class="card-text"><small class="text-muted">Автор: <?= $book["autor"] ?></small></p>
                        <p class="card-text"><?= $book["description"] ?>. Издательство: <a href="#">Полезное</a></p>
                    </div>
                    <div class="card-footer">
                        <a href="?add2basket=<?= $book['id'] ?>" class="btn btn-primary">В корзину</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title">800руб</h3>
                        <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">В корзину</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title">2100руб</h3>
                        <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">В корзину</button>
                    </div>
                </div>

            </div>


            <div class="card-deck">

                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title">1200руб</h3>
                        <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. Издательство: <a href="#">Полезное</a></p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">В корзину</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title">800руб</h3>
                        <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">В корзину</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://placehold.it/150x220" alt="...">
                        <h3 class="card-title">2100руб</h3>
                        <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">В корзину</button>
                    </div>
                </div>

            </div>


        </div>


    </div>


</div>

<div class="container">


</div><!-- /.container -->

<?php include "./inc/footer.inc.php" ?>
<?php include "./inc/scripts.inc.php" ?>

</body>
</html>