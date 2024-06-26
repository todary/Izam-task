<?php


function binarySearch($arr, $needle) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = (int)floor(($low + $high) / 2); // Ensures integer division

        if ($arr[$mid] === $needle) {
            return $mid;
        } elseif ($arr[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return false; // Not found
}

// Example usage
$sortedArray = [1, 3, 5, 7, 9];
$needle = 7;

$key = binarySearch($sortedArray, $needle);

if ($key !== false) {
    echo "Element found at key: $key";
} else {
    echo "Element not found";
}
