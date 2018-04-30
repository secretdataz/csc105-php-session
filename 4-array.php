<?php

$sequenceArray = [
    1112, 1150, 1669
];

echo $sequenceArray[0] . '<br>';
// You can retrieve an array's length with `sizeof`
echo '$sequenceArray\'s length is ' . sizeof($sequenceArray) . '<br>';

$dictionaryArray = [
    "pizzacomp" => 1112,
    "pizzahut" => 1150,
    "eattoomuch" => 1669
];

echo $dictionaryArray["eattoomuch"] . '<br>';

// Traditional incremental loop
$size = sizeof($sequenceArray);
for($i = 0; $i < $size; ++$i) {
    echo "array at \$i = $i " . $sequenceArray[$i] . '<br>';
}

echo 'Start foreach loop<br>';
// For-each loop
foreach($sequenceArray as $value) {
    echo "$value <br>";
}

// You can also assign keys in loop
foreach($dictionaryArray as $key => $value) {
    echo "\$dictionaryArray['$key'] = $value<br>";
}
