<?php
$numOne = 4;
$numTwo = 5;
$numThree = 6;

if ($numOne > $numTwo && $numOne > $numThree) {
    $largest = $numOne;
} elseif ($numTwo > $numOne && $numTwo > $numThree) {
    $largest = $numTwo;
} else {
    $largest = $numThree;
}

echo "$largest";