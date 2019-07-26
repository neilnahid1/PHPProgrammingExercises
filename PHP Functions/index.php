<?php
require("fibo.php");
require("mult.php");
require("pyr.php");
require("pal.php");
require("calc.php");
//Fibonacci
echo "--FIBONACCI--\n";
fibonacci((Integer)readline("How many iterations? "),1,1);

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