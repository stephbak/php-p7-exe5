<?php
include 'indexCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>php partie7</title>
    </head>
    <body>
        <form  action="index.php" method="POST">
            <label for="civility" >Civilité : </label>
            <select id="civility" name="civility">
                <option>Choisir</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <?php
            if (isset($_POST['civility'])) {
                ?>
                <p>Civilité : <?= $_POST['civility']; ?></p>
            <?php } ?>
                <label for="firstname">Prénom : </label>
                <input id="firstname" type="text" name="firstname" />
                <p>Votre prénom est : <?= isset($firstname) ? $firstname : '' ?></p>
                <label for="lastname">Nom : </label><input id="lastname" type="text" name="lastname" />
                <p>Votre nom est : <?= isset($lastname) ? $lastname : '' ?></p>
            <input type="submit" name="submit" value="sauvegarder" />
        </form>
        <p><a href="index.php">Retour au formulaire</a></p>
    </body>
</html>
