<?php
//assign the arguments to a var
$sizeY = readline("Enter number of columns:");
$sizeX = readline("Enter number of rows:");
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