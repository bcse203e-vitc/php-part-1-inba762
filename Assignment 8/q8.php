<?php
$age = array(
    "Sophia" => "31",
    "Jacob" => "41",
    "William" => "39",
    "Ramesh" => "40"
);

echo "a) Ascending order sort by value:<br>";
asort($age);
foreach ($age as $key => $value) {
    echo "$key = $value<br>";
}
echo "<br>";

echo "b) Ascending order sort by key:<br>";
ksort($age);
foreach ($age as $key => $value) {
    echo "$key = $value<br>";
}
echo "<br>";

echo "c) Descending order sort by value:<br>";
arsort($age);
foreach ($age as $key => $value) {
    echo "$key = $value<br>";
}
echo "<br>";

echo "d) Descending order sort by key:<br>";
krsort($age);
foreach ($age as $key => $value) {
    echo "$key = $value<br>";
}
?>

