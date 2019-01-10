<?php

if (isset($_POST['firstname'])) {
    if (!empty($_POST['firstname'])) {
        if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['firstname'])) {
            $firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $firstname = 'Veuillez rentrer un prénom valide.';
        }
    } else {
        $firstname = 'Veuillez entrer votre prénom.';
    }
}
    if (isset($_POST['lastname'])) {
        if (!empty($_POST['lastname'])) {
            if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['lastname'])) {
                $lastname = htmlspecialchars($_POST['lastname']);
            } else {
                $lastname = 'Veuillez rentrer un nom valide.';
            }
        } else {
            $lastname = 'Veuillez entrer votre nom.';
        }
    }
        ?>

