<?php
require("fibo.php");
require("mult.php");
require("pyr.php");
require("pal.php");
require("calc.php");

//mult_table function
if (!empty($_POST['rows']) && !empty($_POST['columns'])) {
    if(is_numeric($_POST['rows']) && is_numeric($_POST['columns'])){
        $rows = $_POST['rows'];
        $columns = $_POST['columns'];
        $DOM = multiplication($rows, $columns);
    }
    else{
        echo "inputs not an integer";
    }
}
//fibonacci function
else if (isset($_POST['operand1']) && isset($_POST['operand2']) && isset($_POST['iterations'])){
    if(is_numeric($_POST['operand1']) && is_numeric($_POST['operand2']) && is_numeric($_POST['iterations'])){
        $num1 = $_POST['operand1'];
        $num2 = $_POST['operand2'];
        $ite = $_POST['iterations'];
        $DOM = "<div>"; //declare open div here since fibonacci func is recursive
        $DOM .= fibonacci($ite,$num1,$num2,$DOM);
        $DOM .= "</div>";
    }
}
else {
    echo "Inputs empty";
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