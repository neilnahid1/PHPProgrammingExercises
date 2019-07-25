<?php
$input = readline(("Enter input:"));
function isPalindrome($string){
$strLength = strlen($string)-1;
    for ($i=0; $i < $strLength; $i++) {
        if(strtolower($string[$i])==strtolower($string[$strLength-$i])){
            if($i==$strLength-1 || ($strLength-$i)-$i==0)
            return true;
            continue;
        }
        else{
            return false;
        }
    }
    return false;
}
if(isPalindrome($input)){
    echo "It's a palindrome\n";
}else{
    echo "NOT a palindrome.\n";
}

?>
