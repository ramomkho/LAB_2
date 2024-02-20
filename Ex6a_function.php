<?php
// Define a function to print student information
function printStudentInfo($studentInfo) {
    echo "Student Information:\n";
    foreach ($studentInfo as $key => $value) {
        echo "$key: $value\n";
    }
}
// Define an associative array for a student
$studentInfo = [
    'name' => 'John Doe',
    'age' => 20,
    'grade' => 'B',
    'courses' => ['Math', 'Science', 'History']
];
// Call the function with the student information array
printStudentInfo($studentInfo);
?>
