<?php
$age = $argv[1];
if($age<18){
    echo "Teenager\n";
}else if($age>=18 && $age <60){
    echo "Legal Age\n";
}
else if($age>=60){
    echo "Senior\n";
}
?>