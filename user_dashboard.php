<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Bienvenue sur votre tableau de bord utilisateur</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="surname">Nom :</label><br>
        <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>"><br><br>
        
        <label for="name">Prénom :</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>
        
        <label for="mail">Mail :</label><br>
        <input type="email" id="mail" name="mail" value="<?php echo $mail; ?>"><br><br>

        <label for="age">Age :</label><br>
        <input type="text" id="age" name="age" value="<?php echo $age; ?>"><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>"><br><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>