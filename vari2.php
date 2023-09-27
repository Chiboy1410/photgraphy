<?php
//  creating a css box with php values;
$box_width = '300px';
$box_height = '400';
$box_bg = '#48acde';
$box_color = '#000';

?>
<div style="height: <?php echo $box_height. 'px' ?>;
            width:<?php echo $box_width; ?>;
            background-color:<?php echo $box_bg ?>;
            color: <?= $box_color ?>; line-height: 400px; text-align: center">
           
    HELLO WORLD

</div>