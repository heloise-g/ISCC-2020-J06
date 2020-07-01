<?php
    $h_max=23;
    $m_max=59;
?>
<?php
    function clock(){
        for($h = 0; $h <= $h_max; $h = $h + 1)
        {
            echo $h . "<br/>";
        }
        for($m=0, $m <= $m_max; $m = $m + 1)
        {
            echo $m . "<br/>";
        }
        echo $h ET $m
    }
?>
<?php
clock()
?>