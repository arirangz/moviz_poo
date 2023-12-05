<?php

use App\Entity\User;
use App\Tools\NavigationTools;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Moviz</title>
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="/" class="nav-link px-2 <?= NavigationTools::addActiveClass('page', 'home') ?>">Accueil</a>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (User::isLogged()) { ?>
                    <a href="/index.php?controller=auth&action=logout" class="btn btn-primary">Déconnexion</a>
                <?php } else { ?>
                    <a href="/index.php?controller=auth&action=login" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('auth', 'login') ?>">Connexion</a>
                    <a href="/index.php?controller=user&action=register" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('user', 'register') ?>">Inscription</a>
                <?php } ?>
            </div>
        </header>

        <main>