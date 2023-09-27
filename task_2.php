<?php
// Task 2: Array Manipulation

function removeEvenNumbers($numbers) {
    // Initialize an empty
    $result = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    print_r($result);
}


$numbers = range(1, 10);

// Call the function
removeEvenNumbers($numbers);