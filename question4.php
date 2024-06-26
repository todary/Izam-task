<?php


function main()
{
    $array = [
        ['a','b','c'],
        ['x','b','a'],
        ['z','z','v'],

    ];

    return getUniqueValues($array);

}

function getUniqueValues($array) {
    $uniqueValues = [];
    foreach ($array as $subArr) {
        foreach ($subArr as $value) {
            if (!in_array($value, $uniqueValues)) {
                $uniqueValues[] = $value;
            }
        }
    }
    return $uniqueValues;
}


print_r(main());;