<?php
require("fibo.php");
require("mult.php");
require("pyr.php");
require("pal.php");
require("calc.php");
//Fibonacci
echo "--FIBONACCI--\n";
fibonacci((Integer)readline("How many iterations? "),0,1);

//MULTIPLICATION TABLE
echo "--MULTIPLICATION TABLE--\n";
multiplication((Integer)readline("Enter rows: "),(Integer)readline("Enter columns: "));

//PYRAMID
echo "--PYRAMID--\n";
pyramid((Integer)readline("Enter pyramid height: "));

//PALINDROME
echo "--PALINDROME--\n";
palindrome(strtolower(readline(("Enter word: "))));

//CALCULATOR¥
echo "--CALCULATOR--\n";
calculator();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="get" id="form">
        <button type="submit"></button>
    </form>
    <select name="functionlist" form="form">
        <option value="Multiplication Table"></option>
        <option value="Fibonacci"></option>
        <option value="Pyramid"></option>
        <option value="Palindrome"></option>
        <option value="Calculator"></option>
    </select>
</body>
</html>