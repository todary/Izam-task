<?php


function rotateRows(array $matrix)
{
    $rows = count($matrix);
    $cols = count($matrix[0]);

    for ($row = 0; $row < $rows; $row++) {
        $shift = $row % $cols; // Ensures shift stays within column boundaries

        $temp = array_slice($matrix[$row], -$shift, $shift); // Slice from end for rotation
        $matrix[$row] = array_merge(array_slice($matrix[$row], $shift), $temp); // Merge shifted part with remaining
    }

    return $matrix;
}


$matrix = [
    ['A', 'D', 'F'],
    ['K', 'N', 'P'],
    ['R', 'S', 'V'],
    ['X', 'Y', 'Z'],
];

$rotatedMatrix = rotateRows($matrix);

print_r($rotatedMatrix);



