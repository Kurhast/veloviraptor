<?php
include('config.php');

$surname = $_POST['surname'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$sql = "INSERT INTO Utilisateur (NomUtilisateur, PrenomUtilisateur, Email, MotDePasse) VALUES ('$surname', '$name', '$mail', '$password')";

if ($connect->query($sql) === TRUE) {
    header('Location: user_dashboard.php');
} else {
    echo "Erreur :" . $sql . "<br>" . $connect->error;
}

$connect->close();
?>