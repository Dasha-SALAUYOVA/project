<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/formulaire.css">
</head>

<body class="accueil">
    <?php require_once 'templates/header.php'?>
    <main>
        <p id="white">Êtes-vous l'un des notres ? Connectez-vous :</p>
        <form action="controllers/login.php" method="POST">
            <div class="block">
                <p><label for="name">Idéntifiant :</label></p>
                <input type="text" placeholder="Pseudo" name="name" required>
                <p><label for="pass">Mot de passe :</label></p>
                <input type="password" placeholder="Mot de passe" name="pass" required>
                <button type="submit" class="btn">OK</button>
            </div>
        </form>
    <main>
    
    <?php require_once 'templates/footer.php'?>
</body>
</html>