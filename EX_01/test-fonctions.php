<?php
$nom_produit = "t-shirt femme";
$couleur = "Rouge";
$prix = "15.50";
$disponible = "true";
$quantite = "10";
$nb_ajout = "5";
$nb_achat = "5";

include("affichage.php")

?>

<?php
include("gestion-produit.php")
?>

<h1>
    <?php
    affichage($nom_produit)
    ?>
</h1>

<p>
    <?php
    afficher_description ($couleur, $prix)
    ?>
</p>

<p>
    <?php
        afficher_produit($nom_produit, $couleur, $prix, $disponible);
    ?>
</p>

<?php
       update_dispo($quantite);
    ?>



<?php
$result=update_dispo($quantite);
if ($result == true) {
echo 'true';
}
else {
echo 'false';
}
?>
<p>
    <?php
        $result=restockage($quantite, $nb_ajout);
        echo $result
    ?>
</p>


<?php
    $result=achat($quantite,$nb_achat);
    echo $result;
    ?>