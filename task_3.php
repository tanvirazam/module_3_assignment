<?php
// Task 3: Array Sorting

function sortGrades($grades) {
    
    arsort($grades);

    print_r($grades);
}

// make a array
$grades = [85, 92, 78, 88, 95];

sortGrades($grades);