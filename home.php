<?php
session_start();

// Redirection vers la page de connexion si l'utilisateur n'est pas connecté
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
    <!-- Affichage d'un message de bienvenue avec le nom de l'utilisateur -->
    <h1>Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>