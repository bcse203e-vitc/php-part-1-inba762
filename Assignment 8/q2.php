<?php
$color = array('white', 'green', 'red');
foreach ($color as $c) {
    echo "<span style='color: $c;'>$c</span>, ";
}
echo "<br>";
$items = array($color[1], $color[2], $color[0]);
foreach ($items as $c) {
    echo "• <span style='color: $c;'>$c</span><br>";
}

?>

