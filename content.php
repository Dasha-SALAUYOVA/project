<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/content.css">
 
</head>

<body class="accueil">
    <?php require_once 'templates/header.php'?>
    <?php if ($_SESSION) { ?>
        <p>Welcome, man!</p>
        <p><a href=""><img src="img/shark.jpeg" width="50%"></a></p>
        <p><a href=""><img src="img/Capture.png" width="70%"></a></p>
    <?php } else { ?>
      <p style="color:orange"><b>Vous devez être connectés pour voir le contenu</b></p>
      <a style="color:orange; font-size:16px" href="formulaire.php">Se connecter</a>
    <?php } ?>
</body>  
</html>
    <?php require_once 'templates/footer.php'?> 
</body>
</html>
