<?php

function multiplication($rows,$columns){
    $multTable = "<table class='table table-dark'>";
    for ($x=1; $x <= $rows; $x++) { 
        $multTable .= "<tr>"; // opening tr
        for ($y=1; $y <= $columns; $y++) { 
            $product = $x*$y;
            $multTable .= "<th>".$product."</th>"; //th
        }
        $multTable .= "</tr>"; //closing tr
    }
    $multTable .="</table>";
    return $multTable; // returns the dom
}