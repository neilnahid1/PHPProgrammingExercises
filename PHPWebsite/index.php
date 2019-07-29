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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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