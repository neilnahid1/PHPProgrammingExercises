<?php
function palindrome($string){
$strLength = strlen($string)-1;
    for ($i=0; $i < $strLength; $i++) {
        if($string[$i]==$string[$strLength-$i]){
            if($i==$strLength-1 || ($strLength-$i)-$i==0){
                echo "Palindrome.\n";
                return;
            }
            continue;
        }
        else{
            echo "NOT a Palindrome.\n";
            return;
        }
    }
    echo "NOT a palindrome\n";
    return;
}
?>
