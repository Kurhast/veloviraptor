<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<h1>Connexion</h1>

<form action="connexion.php" method="post">
    <label for="mail">Email:</label><br>
    <input type="text" id="mail" name="mail" value="<?php echo htmlspecialchars($mail); ?>" required><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required><br><br>
    <input type="submit" value="Connexion">
</form>

<a href="page_inscription.php">Pas de compte ? Inscrivez vous !</a>
<div>
    <a href="/">Retour à l'accueil</a>
</div>

</body>
</html>
