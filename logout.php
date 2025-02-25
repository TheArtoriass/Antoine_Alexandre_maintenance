<?php
session_start();
// Destruction de la session et redirection vers la page d'accueil
session_destroy();
header("Location: index.php");
exit;
?>