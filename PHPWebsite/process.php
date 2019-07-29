<?php
require("fibo.php");
require("mult.php");
require("pyr.php");
require("pal.php");
require("calc.php");
require("utility.php");

//SWITCH STATEMENT
$function = $_POST['func'];
switch ($function) {
    case "mult":
        $DOM = multiplication($_POST['rows'], $_POST['columns']);
        break;
    case "fibo":
        $i = $_POST['iterations'];
        $op1 = $_POST['operand1'];
        $op2 = $_POST['operand2'];
        $DOM = "<div>"; //declare open div here since fibonacci func is recursive
        $DOM .= fibonacci($i, $op1, $op2, $DOM);
        $DOM .= "</div>";
        break;
    case "pyra":
        $DOM = pyramid($_POST['pyramidHeight']);
        break;
    case "pali":
        $DOM = palindrome($_POST['word']);
        break;
    case "calc":
        $DOM = calculator($_POST['operand1'],$_POST['operand2'],$_POST['operator']);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Process</title>
</head>

<body>
    <?php echo $DOM ?>
</body>

</html>