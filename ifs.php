<?php
// if statement
$x =7;
$y =3;
$z =7.0;
if($x > $y) {
    echo"great <br/>";
}
if ($z === $x) {
    echo "You can't see me";
} else {
    echo " Scot";
}
$dc = 12;
if ( $dc > $x + $z) {
   ?>
    <div style="height: 100px; width: 100px;
    border-radius: 50%; background-color: orange;
    line-height: 100px; color: #fff; text-align: center;">
        orange Balls
</div>
<?php
} else {
    ?>
    <div style="height: 100px; width: 100px;
    border-radius: 50%; background-color: blue;
    line-height: 100px; color:#fff; text-align: center;">
    Blue Balls
</div>
<?php
}
