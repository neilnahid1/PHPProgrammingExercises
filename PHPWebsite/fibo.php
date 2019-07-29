<?php
function fibonacci($i,$operand1,$operand2,$DOM){
    if($i>0){
        $DOM .= $operand2." ";
        $sum = $operand1+$operand2;
        $operand1 = $operand2;
        $operand2 = $sum;
        return Fibonacci(--$i,$operand1,$operand2,$DOM);
    }
        return $DOM;
}
?>