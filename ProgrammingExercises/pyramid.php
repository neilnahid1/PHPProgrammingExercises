<?php
$height = readline("Enter the height of the pyramid:");
for ($i=0; $i < $height; $i++) { 
    $spaces = $height-$i;
    while($spaces-- > 0){
        echo " ";
    }
    $stars = $i+1;
    while($stars-- > 0){
        echo "* ";
    }
    echo "\n";
}
?>