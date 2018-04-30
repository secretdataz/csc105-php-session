<?php

// Normal, boring string
$str = "I love Java.";
// You can also use a single quote
$str2 = '';
// An integer
$foo = 5;
// A string??
$bar = "2";

// What!? You can multiple int with string??? wtf php
$eiei = $foo * $bar; 

echo 'in php, 5 * "2" = ' . $eiei . '<br>';

// You can substitute variables directly in double-quoted strings
$str = "The result is $eiei <br>";
echo $str;
// but not in single-quoted string
$str = 'The result is $eiei <br>';
echo $str;

// With dynamic types, comparing gets tricky
// == and != operator applies type juggling
// be careful!
$bool = 5 == "5" ? "yes" : "no";
echo '5 == "5" => '. $bool . '<br>';

// === and !== only returns true for the same type
$bool = 5 === "5" ? "yes" : "no";
echo '5 === "5" => '. $bool . '<br>';
