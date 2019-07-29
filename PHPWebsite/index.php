<?php
if (isset($_GET['func_list'])) {
    $function = $_GET['func_list'];
    switch ($function) {
        case "mult":
            $inputDOM = "Rows:<input type='text' name='rows'></br>";
            $inputDOM .= "Columns:<input type='text' name='columns'></br>";
            break;
        case "fibo":
            $inputDOM = "Starting Operand1:<input type='text' name='operand1'></br>";
            $inputDOM .= "Starting Operand2:<input type='text' name='operand2'></br>";
            $inputDOM .= "Number of Iterations:<input type='text' name='iterations'></br>";
            break;
        case "pyra":
            $inputDOM = "Pyramid Height:<input type='text' name='pyramidHeight'></br>";
            break;
        case "pali":
            $inputDOM = "Enter word:<input type='text' name='word'</br>";
            break;
        case "calc":
            $inputDOM = "Operand1:<input type='text' name='operand1'</br>";
            $inputDOM .= "Operand2:<input type='text' name='operand2'</br>";
            //operator
            $inputDOM .= "Operation:<select form='process' name='operator'";
            $inputDOM .= "<option value='ADD'>ADD</option>";
            $inputDOM .= "<option value='SUBTRACT'>SUBTRACT</option>";
            $inputDOM .= "<option value='MULTIPLY'>MULTIPLY</option>";
            $inputDOM .= "<option value='DIVIDE'>DIVIDE</option></select>";

    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get" id="form">
        <select name="func_list" form="form">
            <option value="mult">Multiplicatio Table</option>
            <option value="fibo">Fibonacci</option>
            <option value="pyra">Pyramid</option>
            <option value="pali">Palindrome</option>
            <option value="calc">Calculator</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <!-- echo dom depending on selected function -->
    <form action="process.php" method="post" id="process">
        <input type="hidden" name="func" value="<?= $function ?>">
        <?php echo $inputDOM ?>
        <button type="submit">Submit</button>
    </form>
</body>

</html>