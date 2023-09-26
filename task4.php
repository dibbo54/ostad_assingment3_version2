<?php
function calculateAndPrintAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);

        $letterGrade = getLetterGrade($average);

        
        //echo "Student $student's Average Grade: $average\n"." , ";

        echo "$student's - Average Grade: " . $letterGrade . "\n". " , ";

    }
}

function getLetterGrade($average) {
    if ($average >= 90) {
        return 'A+';
    } elseif ($average >= 80) {
        return 'A';
    } elseif ($average >= 70) {
        return 'B';
    } else {
        return 'C';
    }
}


// Create a multidimensional array with student grades
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 76, 'English' => 84, 'Science' => 89)
);

// Call the function to calculate and print average grades
calculateAndPrintAverageGrades($studentGrades);
?>
