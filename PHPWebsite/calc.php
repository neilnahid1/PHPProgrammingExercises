<?php
function calculator($operand1, $operand2, $operator)
{
    switch ($operator) {
        case "/":
        case "DIVIDE":
            if ($operand2 != 0)
                return "<div>" . ($operand1 / $operand2) . "</div>";
            else
                return "<div>division by 0, nice try.</div>";
            break;
        case "*":
        case "MULTIPLY":
            return "<div>" . ($operand1 * $operand2) . "</div>";
            break;
        case "SUBTRACT":
        case "-":
            return "<div>" . ($operand1 - $operand2) . "</div>";
            break;
        case "ADD":
        case "+":
            return "<div>" . ($operand1 + $operand2) . "</div>";
            break;
        default:
        return "something went wrong";
    }
}
