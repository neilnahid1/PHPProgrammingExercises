<?php

function Calculator(){
    system("clear");
    $operand1 = readline("Enter operand1: ");
    $operand2 = readline("Enter operand2: ");
    $operator = readline("/ - divide\n* - multiply\n- - subtract\n+ - add\nEnter operator:");
        switch($operator){
            case "/": 
            if($operand2!=0)
                echo $operand1/$operand2."\n";
            else
                echo "division by 0, nice try.\n";
                break;
            case "*": echo $operand1*$operand2."\n"; break;
            case "-": echo $operand1-$operand2."\n"; break;
            case "+": echo $operand1+$operand2."\n"; break;
            default: 
            $res = readline("Invalid input, would you like to retry?(Y/N)");
            if($res=="Y" || $res == "y")
             Calculator();
            else
                return;
        }
}
Calculator();
?>