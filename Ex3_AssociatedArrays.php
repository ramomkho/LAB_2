<?php
$stu = array(
    'name' => "Kho Ramom ",
    'Age' => "19 ",
    'Grade' =>"B ",
    'Course' => array('OOP','PHP','Robotic')
);
echo ("The entire associate array is: <br/>");
print_r($stu);
echo ("<br/>");
echo ("The value associate with the age key is:  ");
print_r($stu['Age']);
$stu['city']= "Phnom Penh";

echo ("All associate array is: <br/>");
print_r($stu);
