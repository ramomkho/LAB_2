<?php
$fruits = array("Orange",
        "Apple",
        "Grape",
        "Banana",
        "Coconut");
echo("The entire array is: <br/>");
print_r($fruits);
echo ("<br/>");
print_r("The third elements in array is: $fruits[2] ");
$fruits[]= "Pineapple";
$fruits[]= "Peach";
echo ("<br/>");
echo("The final array is: <br/>");
print_r($fruits);
