<?php
// functions
function greet() {
    echo"Good morning";
}
greet(); echo"<br/>";
greet();
// for ($i=0; $i < 1000; $i++) {
//     greet();
// }
function greet_person($person)
{
    echo"<h4> Goodday $person, how are you?</h4>";
}
$name = "Black";
greet_person($name);
$i=0;
// while ($i < 1000) {
//     greet();
//     $i++;
// }
// $i=0;
//  while($i<100) {
//     echo"<h4> Goodday, how are you?</h4>";
//     $name = "Black";
//     greet_person($name);
//     $i++;
//  }
$x = "Ade";
greet_person($x);
function bigger($num1, $num2) {
    if ($num1 > $num2) {
        echo "<h1>$num1</h1>";
    } else {
        echo "<h1>$num2</h1>";
    }
}
bigger (40, 92);
function smaller($x, $y)
{
    if ($x <$y) {
        return $x;
    } else {
        return $y;
    }
}
$ans = smaller(5, 6);
echo $ans;