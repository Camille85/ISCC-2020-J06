<?php
    function update_dispo($quantite){
        if ($quantite > 0){
        return true;
        }
        
        else {
        return false;
        }
    }
?>

<?php
    function restockage($quantite, $nb_ajout){
    echo '<p> '. $nb_ajout . ' produits ont été ajouté en stock </p>';
    return $quantite + $nb_ajout;
}
?>

<?php
    function achat ($quantite, $nb_achat){
    echo '<p> '. $nb_achat . ' produits ont été acheté </p>';
    return $quantite - $nb_achat;
}
?>