<?php

use function PHPSTORM_META\type;

$a = "10";

echo $a;
echo "<br>";
echo gettype((int) $a);
echo "<br>";
echo $a + 0;
echo "<br>";
echo gettype($a + 0);
echo "<br>";
echo $a += 0;
echo "<br>";
echo gettype($a += 0);
echo "<br>";

// // Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

// // For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"