<?php
    $maximum = 10
?>
<?php
    function compter($maximum){
        $boucle1 = 0;
        while ($boucle1 < $maximum){
            echo $boucle1 ."<br/>";
            $boucle1 = $boucle1 + 1;
        }
    }
?>
<?php
compter($maximum);
?>
<?php
    function compter_for($maximum){
        for ($boucle2 = 0; $boucle2 < $maximum; $boucle2 = $boucle2 + 1) 
        { 
            echo $boucle2 ."<br/>";
        }
    }
?>
<?php
compter_for($maximum);
?>