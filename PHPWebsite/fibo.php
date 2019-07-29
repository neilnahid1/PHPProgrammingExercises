<?php
function fibonacci($i,$operand1,$operand2,$DOM){
    if($i>0){
        if($i%5==0)
        $DOM .= "</br>";
        $DOM .= $operand2." ";
        $sum = $operand1+$operand2;
        $operand1 = $operand2;
        $operand2 = $sum;
        Fibonacci(--$i,$operand1,$operand2,$DOM);
    }
    else{
        echo $DOM;
    }
}
?>