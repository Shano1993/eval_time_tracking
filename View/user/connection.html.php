<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>

    <form action="/index.php?c=user&a=connection" method="post" id="formConnection">
        <div>
            <label for="username"></label>
            <input type="text" id="username" placeholder="Nom d'utilisateur">
        </div>
        <div>
            <label for="password"></label>
            <input type="password" id="password" placeholder="Mot de passe">
        </div>

        <input type="submit" name="save" value="Connexion">
    </form>

</body>
</html>