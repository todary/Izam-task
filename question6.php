<?php


function getTagID($htmlTag)
{
    $pattern = '/\bid="([^"]+)"|\bid=\'([^\']+)\'/'; // Regex pattern for ID attribute
    preg_match($pattern, $htmlTag, $matches);

    if (isset($matches[1])) {
        return $matches[1];
    } elseif (isset($matches[2])) {
        return $matches[2];
    }

    return false;
}


$htmlTag1 = '<div id="container">';
$htmlTag2 = '<span class="highlight">';

$id1 = getTagID($htmlTag1);
$id2 = getTagID($htmlTag2);

prentStatus($id1);
prentStatus($id2);
function prentStatus($id)
{
    if ($id) {
        echo "$id \n";
    } else {
        echo "No container \n";
    }
}


