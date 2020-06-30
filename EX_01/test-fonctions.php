<?php include("affichage.php");
?>
<?php include("gestion-produit.php");
?>
<?php
    $nom_produit ="t-shirt femme";
    $couleur = "rouge";
    $prix = "15.50";
    $disponible = true;
    $quantite = "10";
    $nb_ajout = "4";
    $nb_achat = "7";
?>
<h1>
    <?php
        afficher_titre($nom_produit);
    ?>
</h1>
<p>
    <?php
        afficher_description($couleur, $prix);
    ?>
</p>
<p>
    <?php
        afficher_produit($nom_produit, $couleur, $prix, $disponible);
    ?>
</p>

<?php
    $result = update_dispo($quantite);
    if ($result == true){
        echo "true";
    }
    else{
        echo "false";
    }
?>
<p>
    <?php
        $result = restockage($quantite, $nb_ajout);
        echo $result
    ?>
</p>
<p>
    <?php
        $result = achat($quantite, $nb_achat);
        echo $result
    ?>
</p>