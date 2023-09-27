<?php
$name = " Olu";
$names = array (" Ola", " Oyin", " Oye", $name);
echo $names[0] . " is a dork";
echo"<br/>";
echo $names[3] . " is a bolo";
echo"<br/>";

// greet everybody
foreach ($names as $person) {
    echo "Good morning" .$person . "<br/>";
}

?>