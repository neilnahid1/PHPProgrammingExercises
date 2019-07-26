<?php
function fibonacci($i,$operand1,$operand2){
    if($i>0){
        echo $operand2." ";
        $sum = $operand1+$operand2;
        $operand1 = $operand2;
        $operand2 = $sum;
        Fibonacci(--$i,$operand1,$operand2);
    }
    else{
        echo "\n";
        return;
    }
}
?>