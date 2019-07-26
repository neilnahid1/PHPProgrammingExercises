<?php
function fibonacci($i,$operand1,$operand2,$DOM){
    if($i>0){
        echo $operand2." ";
        $DOM .= $operand2." ";
        $sum = $operand1+$operand2;
        $operand1 = $operand2;
        $operand2 = $sum;
        Fibonacci(--$i,$operand1,$operand2,$DOM);
    }
    else{
        return $DOM;
    }
}
?>