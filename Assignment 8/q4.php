<?php
$x = array(1, 2, 3, 4, 5);
echo "Before deleting:\n";
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo "After deleting:\n";
var_dump($x);
?>

