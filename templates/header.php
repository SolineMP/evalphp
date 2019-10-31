<?php 
// opening the user session
session_start();
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma page d'admin</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Ma page admin</li>
                <li><a href="index.php">Accueil</a></li>
                <?php 
                // Disconnect button
                if (isset($_SESSION["name"])) {
                    ?> 
                    <li><a href="<?php session_destroy() ?>">Déconnexion</a>
                <?php    
                } else {

                }
                ?>
            </ul>
        </nav>
    </header>    
