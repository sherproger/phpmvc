<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- основной CSS -->
    <link href="app/assets/css/style.css" rel="stylesheet" />

    <title>PHPMVC AJAX - товары</title>
</head>
<body style="margin:0 auto;">

    <div class="cointainer">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/" id="home">PHP AJAX</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id='create-product'>Добавить объявление</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id='sign_up'>Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id='login'>Войти</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id='logout'>Выход</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id='update_account'>Аккаунт</a>
                                </li>
                            </ul>
                        </div>
                        <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
                    </div>
                </nav>
            </div>
    </div>

