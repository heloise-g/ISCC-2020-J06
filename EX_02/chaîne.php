<?php
    $str1 = "La maîtrise des fonamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile."
?>
<p>
    <?php
    echo "La chaîne str1 contient" . strlen($str1) . " caractères";
    ?>
</p>
<p>
    <?php
    echo "La chaîne str1 contient" . str_word_count($str1) . " mots";
    ?>
</p>
<p>
    <?php
    echo strtolower($str1);
    ?>
</p>
<p>
    <?php
    echo strtoupper($str1);
    ?>
</p>
<p>
    <?php
    echo str_shuffle($str1);
    ?>
</p>
<p>
    <?php
    $recherche = 'la';
    $remplacement = 'LA';
    echo str_replace($recherche,$remplacement,$str1);
    ?>
</p>
<p>
    <?php
    $str1 = substr($str1,0,-34);
    echo $str1;
    ?>
</p>