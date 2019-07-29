<?php
require("fibo.php");
require("mult.php");
require("pyr.php");
require("pal.php");
require("calc.php");

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
        $DOM .= fibonacci($i, $op1, $op2,"");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo $DOM ?>
</body>

</html>