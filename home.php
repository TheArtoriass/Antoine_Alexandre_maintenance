<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil Connecté</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>