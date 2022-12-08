<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="/index.php?c=user&a=inscription" method="post" id="formInscription">
        <div>
            <label for="mail"></label>
            <input type="email" name="mail" id="mail" placeholder="Votre email">
        </div>
        <div>
            <label for="username"></label>
            <input type="text" name="username" id="username" placeholder="Votre nom d'utilisateur">
        </div>
        <div>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe">
        </div>
        <div>
            <label for="passwordRepeat"></label>
            <input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Confirmer le mot de passe">
        </div>

        <input type="submit" name="save" value="Inscription">
    </form>

</body>
</html>