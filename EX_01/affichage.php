<?php 
    function afficher_titre ($nom_produit){ //afficher titre
    echo "Fiche produit : ";
    echo $nom_produit;
    }
?>
<?php
    function afficher_description ($couleur, $prix) {
    echo "Couleur: ";
    echo $couleur;
    echo ", Prix: ";
    echo $prix;
    }
?>
<?php
    function afficher_produit($nom_produit, $couleur, $prix, $disponible) {
        if ($disponible == true)
        {
            echo afficher_titre($nom_produit);
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