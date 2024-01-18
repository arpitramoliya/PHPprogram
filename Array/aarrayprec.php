<?php
//$multidimensionalArray

$multidimensionalArray = array(
    'fruit' => array('apple', 'banana', 'cherry'),
    'colors' => array('red', 'yellow', 'blue'),
    'numbers' => array(1, 2, 3)
);

// Selecting a specific value from the multidimensional array
$valueToPrint = $multidimensionalArray['fruit'][1];

// Printing the selected value using print_r
print_r($valueToPrint);
?>