<?php
// break
$i = 0;
while ($i < 10) {
    $i++;
    if ($i==5) {
        break;
    }
    echo "<h1>$i<?h1>";
}
// continue
// greet everyone except oye
$names = array("Ola", "Oyin", "Oye", "Olu");
foreach ($names as $name) {
    if ($name == "Oye") {
        continue;
    }
    echo "<h1>Good morning $name</h1>";
}