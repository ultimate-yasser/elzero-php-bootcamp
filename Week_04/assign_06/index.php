<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " . $b . " " . $c;

echo $d; // Elzero Web School
echo "<br>";
// Method Two
$d = "$a $b $c";

echo $d; // Elzero Web School
echo "<br>";
// Method Three
$d = "{$a} {$b} {$c}";

echo $d; // Elzero Web School
echo "<br>";
// Method Four
$d = "$a $b ". $c;

echo $d; // Elzero Web School
echo "<br>";