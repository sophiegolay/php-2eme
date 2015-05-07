 <?php
/* ---------------------------------------------------------------------
 *                        Exercice test                            
 * Nom du fichier: structure de controle.php
 * Auteur: sgy
 * Date: 04.05.15
 * Description: -                             
 * ---------------------------------------------------------------------
 */
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link href="style.css" rel="stylesheet" media="all"/>
		<title>Test</title>
	</head>
	<body>	
		
		<!-- Création tableau de multiplication -->
		<table id="tableau-multiplication" border="1">
			<thead> <!-- en tête colonne -->
				<tr>
					<th>X</th>
		 <?php
		 //Variables
		 $nombre = filter_input(INPUT_POST, 'nombre');
		 
		 

		if ($nombre < 2 || $nombre > 16){
			echo "Erreur " ;
		}else{
			echo "<h3>Voici la table de multiplication et d'addition pour la base " . $nombre . "</h3>" ;
			
			// Génération du tableau de multiplication
			for($i=0; $i<$nombre; $i++){ 	// Pour l'en-tête
				echo "<th>" . $i . "</th>";
			}
			echo "</tr></thead>"; // Fin de l'en-tête
			
			echo "<tbody>"; // Début du corps du tableau de multiplication
			
			for($i=0; $i<$nombre; $i++){ // pour chaque ligne
				echo "<tr>";
				echo "<th>" . $i . "</th>"; // en-tête de ligne
				for($j=0; $j<$nombre; $j++){ // pour chaque colonne
					$produit= $i * $j;
					//converti $produit qui est en base 10 en la base $nombre, et l'affiche
					echo "<td width=\"30\" height=\"30\" align=\"center\">" . base_convert($produit, 10, $nombre) . "</td>";
					 
				}
				echo "</tr>";
			}
			
			echo "</tbody>"; // Fin du corps du tableau de multiplication
		?>
		</table> <!-- Fin du tableau de multiplication -->
		<br>
		<table id="tableau-addition" border="1">
			<thead>
				<tr>
					<th>+</th>
		<?php
			// Générer en-tête de colonne du tableau d'addition
			for($i=0; $i<$nombre; $i++){
				echo "<th>" . $i . "</th>";
			}
			echo "</tr></thead>";
			
			// Génération du tableau d'addition
			for($i=0; $i<$nombre; $i++){ // pour chaque ligne
				echo "<tr>";
				echo "<th>" . $i . "</th>"; // en-tête de ligne
				for($j=0; $j<$nombre; $j++){
					$somme= $i + $j;
					//converti $somme qui est en base 10 en la base $nombre, et l'affiche
					echo "<td width=\"30\" height=\"30\" align=\"center\">" . base_convert($somme, 10, $nombre) . "</td>";
				}
				echo "</tr>";
			}
			echo "</tbody>"; // Fin du corps du tableau d'addition
		}
		?>
		</table>
    </body>
</html>
