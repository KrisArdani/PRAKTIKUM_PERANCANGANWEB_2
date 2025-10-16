<?php

// Deret a: 4, 6, 9, 13, 18, ?, ?
$a = [4, 6, 9, 13, 18];
$diff = 2;
for ($i = 5; $i < 7; $i++) {
    $diff++;
    $a[] = $a[$i-1] + $diff;
}
echo "Deret a: " . implode(", ", $a) . "\n";

// Deret b: 2, 2, 3, 3, 4, ?, ?
$b = [2, 2, 3, 3, 4];
$b[] = 4;
$b[] = 5;
echo "</br>Deret b: " . implode(", ", $b) . "\n";

// Deret c: 1, 9, 2, 10, 3, ?, ?
$c = [1, 9, 2, 10, 3];
$c[] = 11;
$c[] = 4;
echo "</br>Deret c: " . implode(", ", $c) . "\n";

?>