<?php 
include('config.php');

$mail = $_POST['mail'];
$password = $_POST['password'];

$sql = "SELECT * FROM Utilisateur WHERE Email='$mail' AND MotDePasse='$password'";
$result = $connect->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $role = $row['Role'];

    if ($role == 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: user_dashboard.php");
    }
    exit();
} else {
    header("Location: page_connexion.php?error=1");
}

$connect->close();
?>