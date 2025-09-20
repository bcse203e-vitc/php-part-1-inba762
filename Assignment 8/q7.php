<?php
$x = array(1, 2, 3, 4, 5);
echo "Original array :\n";
foreach ($x as $v) {
    echo $v . " ";
}
array_splice($x, 3, 0, '$');
echo "<br>After inserting '\$' the array is :\n";
foreach ($x as $v) {
    echo $v . " ";
}
?>

