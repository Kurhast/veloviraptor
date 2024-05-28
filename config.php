<?php
$servername = "discoruvelovirap.mysql.db";
$db_username = "discoruvelovirap";
$db_password = "NalfoBG123";
$dbname = "discoruvelovirap";

$connect = new mysqli($servername, $db_username, $db_password, $dbname);

if ($connect->connect_error) {
    die("Connexion échoué: " . $connect->connect_error);
}
?>