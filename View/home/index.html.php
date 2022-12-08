<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Tracking</title>
    <link rel="stylesheet" href="/build/css/front.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<?php

if (!empty($_SESSION['user'])) { ?>
    <div id="header">
        <div>
            <form action="/index.php?c=home&a=create-project" method="post">
                <label for="title"></label>
                <input type="text" id="title" name="title" placeholder="Titre du projet">

                <label for="save"></label>
                <input type="submit" id="addButton" name="save" value="Ajouter un projet">
            </form>
        </div>
    </div>

    <div id="container"></div> <?php
    }
    else { ?>
        <div id="divRequired">
            <p id="required">Veuillez vous connecter pour utiliser l'application ! <span>😂</span></p>
        </div> <?php
    }


