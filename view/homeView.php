<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue!</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>
<body>
    <!-- Créer un formulaire pour récupérer le nom de l'utilisateur connecté -->
     <header>

        <div id="logform">
        <?php
            if(isset($_SESSION["id"])){
                $username = $_SESSION["pseudo"];
            ?>
                <p><?= "Bonjour $username" ?></p>
            <?php
            }else{
            ?>
            <form method="post" action="../controller/home.php" id="login-form">
                <div class="form-line">
                    <label for="username">Nom d'utilisateur : </label>
                    <input type="nomUtilisateur" id="nomUtilisateur" name="nomUtilisateur" required>
                </div>
                <?php
                if(isset($_GET["message"]))

                ?>

                <?php

                ?>
                <div class="form-line">
                    <input type="submit" value="Se connecter" class="login-bouton">
                </div>     

            </form><?php
            } ?>
    </div>
     
    </header>
</body>
</html>
