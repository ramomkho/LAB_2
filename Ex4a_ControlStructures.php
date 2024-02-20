<?php
$score = 100;
if ($score >= 90){
    echo ("Excellent!!");
}
elseif ($score>70||$score<90){
    echo ("Good Job!");
}
elseif ($score<70){
    echo ("Sorry! you need to improve.");
}
