<?php

function multiplication($rows,$columns){
    for ($x=1; $x <= $rows; $x++) { 
        for ($y=1; $y <= $columns; $y++) { 
            $product = $x*$y;
            echo $product;
            
            //to fix the jagged table
            for ($i=5; $i > strlen(strval($product)); $i--) { 
                echo " ";
            }
        }
        echo "\n";
    }
}
?>