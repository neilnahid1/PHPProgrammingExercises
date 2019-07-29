<?php
function palindrome($string){
$strLength = strlen($string)-1;
    for ($i=0; $i < $strLength; $i++) {
        if($string[$i]==$string[$strLength-$i]){
            if($i==$strLength-1 || ($strLength-$i)-$i==0){
                return "<div>palindrome</div>";
            }
            continue;
        }
        else{
            return "<div>Not a Palindrome</div>";
        }
    }
    return "<div>NOT a palindrome</div>";
}
?>
