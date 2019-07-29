<?php
function pyramid($height){
    $DOM = "<table class='table table-dark'>";
    for ($i=0; $i < $height; $i++) { 
        $DOM.="<tr><th>";
        $spaces = $height-$i;
        while($spaces-- > 0){
            $DOM .="&nbsp;";
        }
        $stars = $i+1;
        while($stars-- > 0){
            $DOM .="*";
        }
       $DOM.="</th></tr>";
    }
    return $DOM;
}
