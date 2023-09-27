<?php
for ( $i = 0; $i < 5; $i++) {
    echo "i is now: $i <br/>";
}
$ans= 0;
for ( $i = 0; $i < 100; $i++) {
    $ans = $ans + $i;
}
echo $ans;
echo"<br/>";
$ans2 = 0;
$i = 1;
while ($i <100) {
    $ans2 = $ans2 + $i;
    $i++;
}
echo $ans2;