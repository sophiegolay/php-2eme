 <!DOCTYPE html>
<?php
/* -------------------------------------------------------------------
 * Nom du programme : 1-005.php                       
 * 
 * Auteur: MSI
 * Date: Janvier 2010
 * Description: Ce programme affiche la chaîne de caractère "Hello World!"                                 
 * -------------------------------------------------------------------
 */
 // Variables
 $nom = '';
 $pays = '';
 $ville = '';
 
 
 echo "Bonjour<strong>$nom</strong>! <br>vous habitez à $ville en $pays<br><br>";
 
 //avec apostrophes
 echo 'Bonjour<strong>'. $nom .'</strong>! <br>vous habitez à' . $ville .'en ' .$pays'<br><br>';
//virgules
 echo 'Bonjour<strong>', $nom ,'</strong>! <br>vous habitez à' , $ville ,'en ' ,$pays'<br><br>';
 
 
 //printf
 printf('Bonjour <strong>%s</strong>!<br>Vous habitez à %s en %s<br><br>', $nom, $ville, $pays);

//html
?>

Bonjour <strong><?=$nom?></strong> ! <br>
Vous habitez à <?=$ville?> en <?=$pays?><br>
<br>

<?php
$operation = strlen ($nom);
echo 


?>
