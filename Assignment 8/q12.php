<?php
function changeCase($array) {
    echo "Values are in lower case.<br>";
    print_r(array_map('strtolower', $array));
    echo "<br><br>";
    
    echo "Values are in upper case.<br>";
    print_r(array_map('strtoupper', $array));
}

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
changeCase($Color);
?>

