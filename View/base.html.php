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

<div id="connect">
    <a href="/index.php?c=home" id="title">Time Tracking</a>
    <div id="formConnect"> <?php
        if (empty($_SESSION['user'])) { ?>
            <a href="/index.php?c=user&a=connection" id="connection">Connexion 🔒</a>
            <a href="/index.php?c=user&a=inscription" id="inscription">Inscription 📝</a> <?php
        }
        else { ?>
            <a href="/index.php?c=user&a=profile" id="profile">Profil <?= $_SESSION['user']->username ?></a>
            <a href="/index.php?c=user&a=logout" id="logout">Deconnexion</a> <?php
        } ?>
    </div>
</div>

<div><?= $html ?></div>

    <script src="/build/js/front-bundle.js"></script>
</body>
</html>