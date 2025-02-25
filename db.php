<?php
$conn = mysqli_connect("localhost", "root", "root", "mini_site");
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}
?>