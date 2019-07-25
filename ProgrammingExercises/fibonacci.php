<?php
$iterations = readline("How many Fibonacci iterations?");
function Fibonacci($i,$operand1,$operand2){
    if($i>0){
        $sum = $operand1+$operand2;
        echo $sum." ";
        $operand1 = $operand2;
        $operand2 = $sum;
        Fibonacci(--$i,$operand1,$operand2);
    }
    else{
        echo "\n";
        return;
    }
}
Fibonacci($iterations,1,1);
?>