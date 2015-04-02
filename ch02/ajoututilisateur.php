<?php
/**
 * Affiche les variables serveur prédéfinies de PHP
 *
 * @author: 
 * @date : 
 */
 // Variables
 // Pas de variables
$login = $_POST['login'];
$password = $_POST['passe de passe'];
$majeur = $_POST['majeur'];

$type = 'non renseigné';
if (isset($_POST['type'])) {
    $type = $_POST['type'];
}
    
$lettre = isset($_POST['lettre']) ? $_POST ['lettre'] : 0;
$membre = isset($_POST['membre']) ? $_POST ['membre'] : 0;

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
            <title>Ex 02</title>
    </head>
     <body>
         <h3>Voilà</h3>
         Login: <?=$login ?><br>
         Mot de passe: <?=$password ?><br>
         Majeur: <?=$majeur ?><br>
         Type: <?=$type ?><br>
         Lettre: <?=$lettre ?><br>
         Membre: <?=$membre ?><br>
     </body>
</html>
