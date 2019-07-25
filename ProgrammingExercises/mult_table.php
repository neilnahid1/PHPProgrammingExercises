<?php
//assign the arguments to a var
$sizeX = $argv[1];
$sizeY = $argv[2];

//create the multiplication table
for ($x=1; $x <= $sizeX; $x++) { 
    for ($y=1; $y <= $sizeY; $y++) { 
        $product = $x*$y;
        echo $product;
        
        //to fix the jagged table
        for ($i=5; $i > strlen(strval($product)); $i--) { 
            echo " ";
        }
    }
    echo "\n";
}
?>