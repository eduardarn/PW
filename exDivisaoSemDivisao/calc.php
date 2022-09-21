<?php
    $tPnum = $_POST["txtPnum"];
    $tSnum = $_POST["txtSnum"];
  
    $total = 0;
    while ($tPnum >= $tSnum){
        $total++;
        $tPnum -=5;
    }
    
    echo $total;
?>