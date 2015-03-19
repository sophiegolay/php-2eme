 <!DOCTYPE html>
<?php
/* -------------------------------------------------------------------
 * Nom du programme : 1-001.php                       
 * 
 * Auteur: MSI
 * Date: Janvier 2010
 * Description: Ce programme affiche la chaîne de caractère "Hello World!"                                 
 * -------------------------------------------------------------------
 */
 // Variables
 $nom = 'Gastion Lagaffe';
 $var1 = 10;
 $var2 = 3.3;
 $operation = 0;
                  
 // Pas de variables
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Premier programme en PHP</title>
  </head>
    <body>
        <?php
        // Affiche la chaîne de caractère
        // <br> Permet de faire un saut à la ligne, c'est une balise HTML
        echo = "Bonjour <b>$nom</b>!<br>";
        
        echo 'var1 + var2 =' .($var1 + $var2). '<br>';
        
        $operation= $var1 + $var2;
        echo "var1 % var2 = $operation<br>";
        
        $operation= $var1 % $var2;
        echo "var1 + var2 = $operation<br>";
        
        $operation= round($var1 / $var2);
        echo "division entière de var1 par var2 = $operation<br>";
        $var1 += 20;
        
        echo "incrémentation de 20 pour var1: $var1<br>";
        $var1++;
        
        echo "incrémentation de 1 pour var1: $var1<br>";
        $var1 = (int) $var2;
        
        echo "var1 vaut la valeur entière de var2: $var1<br>;
    
        
        ?>
    </body>
</html>

