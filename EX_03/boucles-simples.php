<?php
    $maximum = 20
?>
<?php
    function compter($maximum){
        $boucle1 = 0;
        while ($boucle1 < $maximum){
            echo $boucle1;
            $boucle1 = $boucle1 + 1;
        }
    }
?>
<?php
compter($maximum);
?>