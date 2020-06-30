<?php
function affichage($nom_produit){
    echo "fiche produit :" . $nom_produit . '<br/>';
}

function afficher_description($couleur, $prix){
    echo "couleur :" . $couleur . '<br/>';
    echo "Prix :" . $prix . '<br/>';
}

?>

<?php
    function afficher_produit($nom_produit, $couleur, $prix, $disponible) {
        if ($disponible == true)
        {
            echo affichage($nom_produit);
            echo afficher_description($couleur, $prix);
        }
        else 
        {
            echo "Le produit ";
            echo $nom_produit;
            echo " n'est malheuresement plus disponible";
        }
    }
?>