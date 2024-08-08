<?php
$a = 200;
$b = &$a; // Added & before $ to make it a reference
$a = 100;

echo $b; // 100