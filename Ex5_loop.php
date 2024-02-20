<?php
$i = 0;
for ($i=0;$i<=10;$i++){
    echo ("The number is: $i");
    echo "<br/>";
}
//Even num from 2 to 10
$num = 2;
while($num<=10){
    echo ("<br/>");
    echo ("The even number from 2 to 10 is: $num");
    $num+=2;
}
//foreach
$colors = array("Red","Blue","Pink","Purple","Orange");
foreach ($colors as $color){
    echo ("<br/>");
    echo ("The colors of array is: $color ");
}
