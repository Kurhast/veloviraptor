<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

<h1>Inscription</h1>

<form action="inscription.php" method="post">
    <label for="surname">Nom:</label><br>
    <input type="text" id="surname" name="surname" required><br>
    <label for="name">Prénom:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="mail">Email:</label><br>
    <input type="text" id="mail" name="mail" required><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="S'inscrire">
</form>

<a href="page_connexion.php">Connectez vous !</a>
<div>
    <a href="/">Retour à l'accueil</a>
</div>

</body>
</html>