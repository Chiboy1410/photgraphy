<?php
$a = 84;
$b = $a / 9;
if ($b > $a) {
    echo $a + 1;
} elseif ($a > $b * 2) {
    echo $b * 2;
} else {
    echo 2;
}
echo "<br/>";
$h = date("H");
if ($h < "10") {
    echo "Good morning!";
} elseif ($h < "20") {
    echo "Good afternoon!";
} elseif ($h < "23") {
    echo "Good night!";
} else {
    echo "Good midnight!";
}