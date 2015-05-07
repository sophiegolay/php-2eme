<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Ex1</title>
	</head>
<body>
	<h1>Calcul d'interêts</h1>
	<form>
		<p>PV de la maison de vos rêves<br>
		<input type= "number" name="prix" action="$prixmaison">
		<p>Fonds propres que vous disposez<br>
		  <input type="number" name="fonds" action="$fondspropres" />
		</p>
		<input type="submit" name="Submit" value="Calculez">
      <br>

	</form>

<?php
$prixmaison = $_POST['prix'];
$fondspropres = $_POST ['fonds'];
$montantmin = $prixmaison * 0.2;
$montantmax = $prixmaison * 0.5;
$pret = $prixmaison - $fondspropres;
$rang1 = $pret * 0.2;
$rang2 = $pret * 0.8;
$interetrang1 = $rang1 * 0.035;
$interetrang2 = $rang2 * 0.025;

    $pv_ok = true;
    $posted = (bool)filtrer_input(INPUT_POST , 'submit');
    $prixmaison = filtrer_input(INPUT_SERVER, 'prixmaison', FILTRER_SANITIZE_FULL_NUMBER_FLOAT);
	$fondspropres = filtrer_input(INPUT_SERVER, 'fondspropres', FILTRER_SANITIZE_FULL_NUMBER_FLOAT);
    $nom_du_fichier = filtrer_input(INPUT_SERVER, 'NOM_DU_FICHIER', FILTRER_SANITIZE_FULL_SPECIAL_FLOAT);
    $fondspropres_suffisants = false;

        /*if ($fondspropres < $montantmin) {
            echo "Pas assez de fonds propres";
        } elseif ($fondspropres > $montantmax) {
            echo "Montant de l'emprunt : " , $prixmaison;
            echo "Montant des fonds propres :" , $fondspropres;
            echo "Prêt :" , $pret;
            echo "Rang 2 :" , $fond2;
            echo "Interet rang 2 :" , $interetrang2;
        } else {
            
        }*/
        
        $pv_ok = !empty($prixmaison);
        $fondspropres_ok = !empty($fondspropres) && $prixmaison > $fondspropres;
        
        if ($pv_ok){
            $value_pour_prix_de_vente = 'value ="' . $prixmaison . '"';
        }else{
            $class_pour_fonds_propres = 'erreur';
        }
        
        if ($pv_ok && $fondspropres_ok){
            $fondspropres_suffisants= $fondspropres >=......
            
        }
        
        
        
        
 

?>
</body>
</html>
