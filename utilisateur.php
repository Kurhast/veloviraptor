<?php
// Connexion à la base de données
$serveur = "discoruvelovirap.mysql.db";
$utilisateur = "discoruvelovirap"; // Remplacez par le nom d'utilisateur de votre base de données
$mot_de_passe = "NalfoBG123"; // Remplacez par le mot de passe de votre base de données
$nom_base_de_donnees = "discoruvelovirap"; // Remplacez par le nom de votre base de données

// Connexion
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

// Requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO `User-test`(`nom`, `prenom`, `email`) VALUES ('$nom','$prenom','$email')";

if ($connexion->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>
