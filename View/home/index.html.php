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
    </div> <?php
} else { ?>
    <div id="divRequired">
        <p id="required">Veuillez vous connecter pour utiliser l'application ! <span>😂</span></p>
    </div> <?php
} ?>

<div id="container">
    <?php
foreach ($_SESSION['user']->ownProjectList as $project) { ?>
    <div class="project">
        <i class="fa fa-trash time"></i>
        <h2><?= $project->title . " ID = " . $project->id ?></h2>
        <div class="task">
            <form action="/index.php?c=home&a=create-task&id=<?= $project->id ?>" method="post">
                <input type="text" name="taskName" id="taskName">
                <input type="submit" name="save" value="+ Ajouter une tâche">
            </form>
        </div>
        <div class="divView">
            <div class="divRightLeft">
                <i class="fa fa-calendar time"></i>
                <span class="Date Time">Date Time</span>
            </div>
            <div class="divRightLeft">
                <i class="fa fa-clock-o time"></i>
                <span class="Total Time">Total Time</span>
            </div>
        </div>
    </div> <?php
    } ?>
</div>







