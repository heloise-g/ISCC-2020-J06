<?php
    $maximum = 100;
?>
<?php
    function compter_dizaine($maximum){
        for($a=1; $a <= $maximum; $a = $a + 1)
        {
            echo $a . "<br/>";
        
        if($a % 10 == 0)
        {
            echo "Ceci est une dizaine." . "<br/>";
        }
        if($a % 100 ==0)
        {
            echo "Ceci est une centaine." . "<br/>";
        }
        }
    }
?>
<?php
compter_dizaine($maximum)
?>