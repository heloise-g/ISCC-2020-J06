<?php
    function clock(){
        for($h = 0; $h <= 24; $h = $h + 1){
        for($m=0, $m <= 59; $m = $m + 1){
            echo $m . "<br/>";
        }
        }
    }
?>
<?php
clock()
?>